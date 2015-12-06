<?php
return array(
    'router' => array(
        'routes' => array(
            'code-orders.rest.customer' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/customer[/:customer_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Customer\\Controller',
                    ),
                ),
            ),
            'code-orders.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'CodeOrders\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'code-orders.rest.customer',
            1 => 'code-orders.rest.users',
        ),
    ),
    'zf-rest' => array(
        'CodeOrders\\V1\\Rest\\Customer\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Customer\\CustomerResource',
            'route_name' => 'code-orders.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Customer\\CustomerEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Customer\\CustomerCollection',
            'service_name' => 'customer',
        ),
        'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'CodeOrders\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'code-orders.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '5',
            'page_size_param' => null,
            'entity_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'CodeOrders\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'CodeOrders\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'CodeOrders\\V1\\Rest\\Users\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'CodeOrders\\V1\\Rest\\Customer\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
            'CodeOrders\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.code-orders.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'CodeOrders\\V1\\Rest\\Customer\\CustomerEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'CodeOrders\\V1\\Rest\\Customer\\CustomerCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'CodeOrders\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'code-orders.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'CodeOrders\\V1\\Rest\\Customer\\CustomerResource' => array(
                'adapter_name' => 'DBAdapter',
                'table_name' => 'customer',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'CodeOrders\\V1\\Rest\\Customer\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'CodeOrders\\V1\\Rest\\Customer\\Controller' => array(
            'input_filter' => 'CodeOrders\\V1\\Rest\\Customer\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'CodeOrders\\V1\\Rest\\Customer\\Validator' => array(
            0 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
                'allow_empty' => true,
                'description' => 'Name of customer',
                'error_message' => 'The name field is invalid.',
            ),
            1 => array(
                'name' => 'email',
                'required' => false,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                    ),
                    1 => array(
                        'name' => 'Zend\\Filter\\StripTags',
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'min' => 1,
                            'max' => '255',
                        ),
                    ),
                ),
            ),
            2 => array(
                'name' => 'created_at',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'CodeOrders\\V1\\Rest\\Users\\UsersResource' => 'CodeOrders\\V1\\Rest\\Users\\UsersResourceFactory',
            'CodeOrders\\V1\\Rest\\Users\\UsersRepository' => 'CodeOrders\\V1\\Rest\\Users\\UsersRepositoryFactory',
        ),
    ),
);
