<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Configs\Controller\Index' => 'Configs\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'admin.config' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin/configs',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Configs\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/admin'           => __DIR__ . '/../view/layout/admin/admin.phtml',
            'layout/admin/paginator'    => __DIR__ . '/../view/layout/admin/slidePaginator.phtml',
            'layout/layout'          => __DIR__ . '/../view/layout/admin/admin.phtml',
            'layout/application'     => __DIR__ . '/../view/layout/application/application.phtml',
            'layout/undefiled'       => __DIR__ . '/../view/layout/application/application.phtml',
            'error/404'              => __DIR__ . '/../view/error/404.phtml',
            'error/index'            => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            'configs' => __DIR__ . '/../view',
        ),
    )
);
