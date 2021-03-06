<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Gestion Ralucart',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Gestion</b> Raluca Art',

    'logo_mini' => '<b>Ra</b>lu',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'ACCESO RAPIDO',
        [
            'text'        => 'Pedidos Clientes',
            'url'         => 'clientes/pedidos',
            'icon'        => 'shopping-cart',
            'icon_color'  => 'green',
            // 'label'       => 4,
            'label_color' => 'success',
        ],
        [
            'text'        => 'Compras Proveedores',
            'url'         => 'proveedores/compras',
            'icon'        => 'credit-card',
            'icon_color'  => 'blue',

            // 'label'       => 4,
            'label_color' => 'success',
        ],

        'MANTENIMIENTOS',
        [
            'text'        => 'PRODUCTOS',
            'icon'        => 'gift',
            'icon_color'  => 'white',
            'url'         => '#',
            'submenu'     => [
                [
                    'text' => 'Categorías',
                    'icon'        => 'cube',
                    'icon_color'  => 'orange',
                    'url'  => '#',
                    'submenu'   => [
                        [
                            'text'        => 'Listado Categorias',
                            'icon'        => 'list-alt',
                            'icon_color'  => 'yellow',
                            'url'         => 'catprods',
                        ],
                        [
                            'text'        => 'Nueva Categoria',
                            'icon'        => 'plus',
                            'icon_color'  => 'green',
                            'url'         => 'alta-catprods',
                        ],

                    ],
                ],
                [
                    'text' => 'Subcategorías',
                    'icon'        => 'cubes',
                    'icon_color'  => 'orange',
                    'url'  => '#',
                    'submenu'   => [
                        [
                            'text'        => 'Listado Subcategorias',
                            'icon'        => 'list-alt',
                            'icon_color'  => 'yellow',
                            'url'         => 'subcatprods',
                        ],
                        [
                            'text'        => 'Nueva Subcategoria',
                            'icon'        => 'plus',
                            'icon_color'  => 'green',
                            'url'         => 'alta-subcatprods',
                        ],

                    ],
                ],
            ],
        ],


        [
            'text'        => 'CLIENTES',
            'icon'        => 'user',
            'icon_color'  => 'white',
            'url'         => '#',
            'submenu'     => [
                                [
                                    'text'        => 'Listado',
                                    'url'         => 'customers',
                                    'icon'        => 'list-alt',
                                    'icon_color'  => 'yellow',
                                    'label_color' => 'success',
                                ],
                                [
                                    'text'        => 'Nuevo',
                                    'url'         => 'alta-customers',
                                    'icon'        => 'user',
                                    'icon_color'  => 'green',
                                    'label_color' => 'success',
                                ],

            ],
        ],

        [
            'text'        => 'PROVEEDORES',
            'icon'        => 'briefcase',
            'icon_color'  => 'white',
            'url'         => '#',
            'submenu'     => [
                                [
                                    'text'        => 'Listado',
                                    'url'         => 'providers',
                                    'icon'        => 'list-alt',
                                    'icon_color'  => 'yellow',
                                    'label_color' => 'success',
                                ],
                                [
                                    'text'        => 'Nuevo',
                                    'url'         => 'alta-providers',
                                    'icon'        => 'briefcase',
                                    'icon_color'  => 'green',
                                    'label_color' => 'success',
                                ],
            ],
        ],







    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
