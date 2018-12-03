<?php



$menu =  [

    'title' => 'Registration',

    'title_prefix' => '',

    'title_postfix' => '',



    'logo' => '<b>Registration</b>',

    'logo_mini' => '<b>A</b>LT',



    'skin' => 'red',



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
            'text' => 'Advanced Search',
            'url'  => 'search/form',
            'icon' => 'th',
            'can'=>'islogin'
        ],
        [
            'text' => 'Fuatilia Lalamiko',
            'url'  =>'complaints/followups',
            'icon' => 'th',


        ],
        [
            'text' => 'Registration',
            'url'  => 'complaints/create',
            'icon' => 'th',
            'can'=>'islogin'
        ],
        [
            'text'    => 'Complaints',
            'icon'    => 'th',
            'url'      => 'complaint/tab/1',
//            'url'     =>'complaints/tab',
            'can'=>'islogin'



        ],

        [
            'text'    => 'Feedback',
            'url'     =>'complaints/feedback/view',
            'icon'    => 'th',
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

        [
            'text'    => 'System Table Configuration',
            'icon'    => 'th',
            'submenu' => [


                [
                    'text' => 'Schemes',
                    'url'  => 'config-scheme/create',
                ],

                [
                    'text' => 'Social Security Info',
                    'url'  => 'configuration/ssinfo',
                ],

                [
                    'text' => 'Response Types',
                    'url'  => 'configuration/response',
                ],
                [
                    'text' => 'Complaint Types',
                    'url'  => 'Configuration/complaint-type',
                ],
                [
                    'text' => 'Complaint Status',
                    'url'  => 'Configuration/complaint-status',
                ],

                [
                    'text' => 'Complaint Receive Modes',
                    'url'  => 'Configuration/complaint-receive-mode',
                ],
                [
                    'text' => 'Complaint Status',
                    'url'  => 'Configuration/complaint-status',
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
