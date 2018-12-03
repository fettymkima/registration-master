<?php


return [



    'title' => 'Complaints',

    'title_prefix' => '',

    'title_postfix' => '',



    'logo' => '<b>Complaints</b>',

    'logo_mini' => '<b>A</b>LT',



    'skin' => 'blue',



    'layout' => null,

    'collapse_sidebar' => false,



    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',


    'menu' => [


        [
            'text' => 'Home',
            'url'  => 'user/settings',
            'icon' => 'home',
        ],
        [
            'text' => 'Registration',
            'url'  => 'user/settings',
            'icon' => 'th',
        ],
        [
            'text'    => 'Complaints',
            'icon'    => 'th',
            'submenu' => [
                [
                    'text' => 'Edit complaints',

                    'url'  => '#',

                ],

                [
                    'text' => 'Open complaints',
                    'url'  => '#',
                ],
                [
                    'text' => 'Pending complaints',
                    'url'  => '#',
                ],
                [
                    'text' => 'Closed complaints',
                    'url'  => '#',
                ],
                [
                    'text' => 'Delayed complaints',
                    'url'  => '#',
                ],
                [
                    'text' => 'Overdue complaints',
                    'url'  => '#',
                ],

            ],
        ],

        [
            'text'    => 'System Setting',
            'icon'    => 'th',
            'submenu' => [
                [
                    'text' => 'Register User',
                    'url'  => 'user/register',
                ],

                [
                    'text' => 'View All User',
                    'url'  => '#',
                ],

                [
                    'text' => 'Create Role',
                    'url'  => 'role/create',
                ],

                [
                    'text' => 'Create Profile',
                    'url'  => 'profile/create',
                ],
                [
                    'text' => 'View Role Profile',
                    'url'  => 'roleProfile',
                ],
                [
                    'text' => 'View User Profile',
                    'url'  => 'userProfile/',
                ],





            ]
        ]

    ],



    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],


    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
