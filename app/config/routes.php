<?php return [

    /**
     * Main
     */

    '' => [
        'controller' => 'main',
        'action' => 'index',
    ],

    'music' => [
        'controller' => 'main',
        'action' => 'music',
    ],

    'video' => [
        'controller' => 'main',
        'action' => 'video',
    ],

    'about' => [
        'controller' => 'main',
        'action' => 'about',
    ],

    'release' => [
        'controller' => 'main',
        'action' => 'release',
    ],

    /**
     * Account
     */

    'login' => [
        'controller' => 'account',
        'action' => 'login',
    ],

    'profile' => [
        'controller' => 'account',
        'action' => 'profile',
    ],

    'logout' => [
        'controller' => 'account',
        'action' => 'logout',
    ],

    'register' => [
        'controller' => 'account',
        'action' => 'register',
    ],

    'account/confirm/{token:.*}' => [
        'controller' => 'account',
        'action' => 'confirm',
    ],

    'settings' => [
        'controller' => 'account',
        'action' => 'settings',
    ],

    /**
     * API
     */

    'api/status' => [
        'controller' => 'api',
        'action' => 'status',
    ],
    
    'api/link/{token:.*}' => [
        'controller' => 'api',
        'action' => 'link',
    ],

    /**
     * Админпанель
     */

    'admin' => [
        'controller' => 'admin',
        'action' => 'dashboard',
    ],

    'admin/users' => [
        'controller' => 'admin',
        'action' => 'users',
    ],

    'admin/players' => [
        'controller' => 'admin',
        'action' => 'players',
    ],

    'admin/reports' => [
        'controller' => 'admin',
        'action' => 'reports',
    ],

    'admin/groups' => [
        'controller' => 'admin',
        'action' => 'groups',
    ],

    'admin/history' => [
        'controller' => 'admin',
        'action' => 'history',
    ],

    'admin/history/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'history',
    ],

    'admin/tariffs' => [
        'controller' => 'admin',
        'action' => 'tariffs',
    ],

    'admin/tariffs/{page:\d+}' => [
        'controller' => 'admin',
        'action' => 'tariffs',
    ],

    'admin/account/{id:\d+}/change' => [
        'controller' => 'admin',
        'action' => 'changeUser',
    ],

    'admin/login' => [
        'controller' => 'admin',
        'action' => 'login',
    ],

    'admin/logout' => [
        'controller' => 'admin',
        'action' => 'logout',
    ],

    'admin/analyse' => [
        'controller' => 'admin',
        'action' => 'analyse',
    ],

];
