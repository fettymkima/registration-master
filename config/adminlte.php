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
            'text' => 'Registration',
            'url'  => '#',
            'icon' => 'th',
            'can'=>'islogin'
        ],

        [
            'text' => 'Registration Details',
            'url'  => '#',
            'icon' => 'th',
            'can'=>'islogin'
        ],

        [
            'text' => 'Advanced Search',
            'url'  => '#',
            'icon' => 'th',
            'can'=>'islogin'
        ],
        [
            'text' => 'Fees',
            'url'  =>'#',
            'icon' => 'th',


        ],
//        [
//            'text' => 'View Fees',
//            'url'  => 'complaints/create',
//            'icon' => 'th',
//            'can'=>'islogin'
//        ],
//        [
//            'text'    => 'Fees Per Scheme',
//            'icon'    => 'th',
//            'url'      => 'complaint/tab/1',
//            'can'=>'islogin'
//        ],

        [
            'text'    => 'Failed Application',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Manager',
                    'url'  => '#',
                ],


                [
                    'text' => 'Custodian',
                    'url'  => '#',
                ],

                [
                    'text' => 'Administrator',
                    'url'  => '#',
                ],
                [
                    'text' => 'Scheme',
                    'url'  => '#',
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
