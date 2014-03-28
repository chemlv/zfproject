<?php
return  array (
    'Content' =>
    array (
        'id' => '1',
        'name' => 'Content',
        'label' => 'Content',
        'route' => 'admin/login',
        'params' =>array(),
        'resource' => 'modules/list',
        'pages' =>
        array (
            array (
                'id' => '1',
                'name' => 'Articles',
                'label' => 'Articles',
                'route' => 'admin/login',
                'params' =>
                array (

                ),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
            array (
                'id' => '2',
                'name' => 'news',
                'label' => 'News',
                'route' => 'admin/login',
                'params' =>
                array (

                ),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
            array (
                'id' => '2',
                'name' => 'pages',
                'label' => 'Pages',
                'route' => 'admin/login',
                'params' =>
                array (

                ),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
            array (
                'id' => '2',
                'name' => 'comments',
                'label' => 'Comment',
                'route' => 'admin/login',
                'params' =>
                array (

                ),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
        ),
    ),
    'Plugin' =>
    array (
        'id' => '2',
        'name' => 'Plugin',
        'label' => 'Plugin',
        'route' => 'admin/login',
        'params' =>array ( ),
        'resource' => 'content',
        'pages' =>
        array (
            array (
                'id' => '2',
                'name' => 'seo_optimization',
                'label' => 'SEO optimization',
                'route' => 'admin/login',
                'params' => array (),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
        ),
    ),
    'Acl' =>
    array (
        'id' => '2',
        'name' => 'Acl',
        'label' => 'Acl',
        'route' => 'admin/login',
        'params' =>array ( ),
        'resource' => 'content',
        'pages' =>
        array (
            array (
                'id' => '2',
                'name' => 'Permission',
                'label' => 'Manager Role',
                'route' => 'admin-acl/manager-role',
                'params' => array (),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ), array (
            'id' => '2',
            'name' => 'Permission',
            'label' => 'Manager Permission',
            'route' => 'admin-acl/permission',
            'params' => array (),
            'resource' => 'development/document-type/edit',
            'pages' =>
            array (
            ),
        ), array (
            'id' => '2',
            'name' => 'manager_users',
            'label' => 'Manager Users',
            'route' => 'admin/user-manager',
            'params' => array (),
            'resource' => 'development/document-type/edit',
            'pages' =>
            array (
            ),
        ),
        ),
    ),
    'Settings' =>
    array (
        'id' => '3',
        'name' => 'Settings',
        'label' => 'settings',
        'route' => 'admin/login',
        'params' =>
        array (
        ),
        'resource' => 'development',
        'pages' =>
        array (
            array (
                'id' => '2',
                'name' => 'theme_setting',
                'label' => 'Theme settings',
                'route' => 'admin/login',
                'params' => array (),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
            array (
                'id' => '2',
                'name' => 'page_settings',
                'label' => 'Page settings',
                'route' => 'admin/login',
                'params' => array (),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
            array (
                'id' => '2',
                'name' => 'security_settings',
                'label' => 'Security settings',
                'route' => 'admin/login',
                'params' => array (),
                'resource' => 'development/document-type/edit',
                'pages' =>
                array (
                ),
            ),
        ),
    ),
);