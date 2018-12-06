<?php



$menu =  [

    'title' => 'Registration',

    'title_prefix' => '',

    'title_postfix' => '',



    'logo' => '<b>Registration</b>',

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
            'url'  => 'dashboard',
            'icon' => 'home',
            'can'  =>'islogin'
        ],
        [
            'text' => 'Home',
            'url'  => '/',
            'icon' => 'home',
            'can' =>'islogout'
        ],
        [
            'text'    => 'Registration',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Scheme',
                    'url'  => 'scheme',
                ],


                [
                    'text' => 'Manager',
                    'url'  => 'manager',
                ],

                [
                    'text' => 'Administrator',
                    'url'  => 'administrator',
                ],
                [
                    'text' => 'Custodian',
                    'url'  => 'custodian',
                ],
                [
                    'text' => 'iChf',
                    'url'  => 'chf',
                ],

            ],
            'can'=>'islogin'
        ],


        [
            'text'    => 'Registration Details',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Scheme',
                    'url'  => 'scheme/details',
                ],


                [
                    'text' => 'Manager',
                    'url'  => 'manager/details',
                ],

                [
                    'text' => 'Administrator',
                    'url'  => 'administrator/details',
                ],
                [
                    'text' => 'Custodian',
                    'url'  => 'custodian/details',
                ],
                [
                    'text' => 'Chf',
                    'url'  => 'chf/details',
                ],

            ],
            'can'=>'islogin'
        ],


        [
            'text' => 'Advanced Search',
            'url'  => '#',
            'icon' => 'th',
            'can'=>'islogin'
        ],
        [
            'text'    => 'Fees',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Add Fees',
                    'url'  => 'fees',
                ],


                [
                    'text' => 'View Fees',
                    'url'  => '#',
                ],

                [
                    'text' => 'Fees Per Scheme',
                    'url'  => '#',
                ],

            ],
            'can'=>'islogin'
        ],


        [
            'text'    => 'Failed Application',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Manager',
                    'url'  => 'manager/failed/application',
                ],


                [
                    'text' => 'Custodian',
                    'url'  => 'custodian/failed/application',
                ],

                [
                    'text' => 'Administrator',
                    'url'  => 'administrator/failed/application',
                ],
                [
                    'text' => 'Scheme',
                    'url'  => 'scheme/failed/application',
                ],
                [
                    'text' => 'chf',
                    'url'  => 'chf/failed/application',
                ],

            ],
            'can'=>'islogin'
        ],

        [
            'text'    => 'Report',
            'url'     =>'report/select',
            'icon'    => 'th',
            'can'=>'islogin'
        ],
        [
            'text'    => 'System user Setting',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Register User',
                    'url'  => 'user/register',
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

            ],
            'can'=>'islogin'
        ],


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


    return $menu;
