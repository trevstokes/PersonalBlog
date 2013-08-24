<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Posts\Controller\Posts' => 'Posts\Controller\PostsController',
        ),
    ),

    'router' => array(
        'routes' => array(
            'posts' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/posts[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Posts\Controller\Posts',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
	
    'view_manager' => array(
        'template_path_stack' => array(
            'posts' => __DIR__ . '/../view',
        ),
    ),
);
?>