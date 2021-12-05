(() => {
    const menuButton = document.querySelector('.menu__button');
    const menuList = document.querySelector('.menu__list');
    const form = document.querySelector('form');
    const notificator = document.querySelector('.notify');
    const ipCopyBtn = document.querySelector('#ipCopyBtn');
    const linkCopyBtn = document.querySelector('#linkCopyBtn');

    if (!!ipCopyBtn) {
        ipCopyBtn.addEventListener('click', () => copyText());
    }

    menuButton.addEventListener('click', () => {
        let expanded = menuButton.getAttribute('aria-expanded') === 'true';
        menuButton.setAttribute('aria-expanded', !expanded);
        menuButton.classList.toggle('menu__button--open');
        menuList.classList.toggle('menu__list--open');
    });

    if (!!form) {
        form.addEventListener('submit', () => {
            if (form.id === 'no_ajax') {
                return;
            }
            event.preventDefault();

            let request = new XMLHttpRequest();
            request.open(form.method, form.action, true);

            request.onload = function () {
                if (this.status >= 200 && this.status < 400) {
                    let data = JSON.parse(this.response);
                    if (data.url) {
                        window.location.href = "/" + data.url;
                    } else if (data.reload) {
                        window.location.reload();
                    } else {
                        notify(data.message, data.status);
                    }
                } else {
                    notify('Ошибка при подключении к серверу, повторите попыку позднее', 'error');
                }
            };

            request.onerror = (e) => notify(e.returnValue, 'error');
            request.send(new FormData(form));
        });
    }

    function copyText(text = 'obsidianorder.ru') {
        if (text) {
            navigator.clipboard.writeText(ip)
                .then(() => notify('Текст скопирован!'))
                .catch(() => notify('Что-то пошло не так', 'error'))
        }
    }

    function notify(text, type = 'notice') {
        if (text) {
            notificator.innerHTML = text;
            notificator.setAttribute("data-notification-status", type);
            notificator.classList.add('do-show');
            setTimeout(function () {
                notificator.classList.remove('do-show');
            }, 4000);
        }
    }

    window.notify = notify;

})();
