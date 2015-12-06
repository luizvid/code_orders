<?php
return array(
    'CodeOrders\\V1\\Rest\\Customer\\Controller' => array(
        'description' => 'Handles customers',
        'collection' => array(
            'description' => 'Collection of customers',
            'GET' => array(
                'description' => 'Lists all customers',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer"
       },
       "first": {
           "href": "/customer?page={page}"
       },
       "prev": {
           "href": "/customer?page={page}"
       },
       "next": {
           "href": "/customer?page={page}"
       },
       "last": {
           "href": "/customer?page={page}"
       }
   }
   "_embedded": {
       "customer": [
           {
               "_links": {
                   "self": {
                       "href": "/customer[/:customer_id]"
                   }
               }
              "name": "Name of customer",
              "email": "",
              "created_at": ""
           }
       ]
   }
}',
            ),
            'POST' => array(
                'description' => 'Creates a new customer',
                'request' => '{
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer[/:customer_id]"
       }
   }
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
            ),
        ),
        'entity' => array(
            'description' => 'Customer entity',
            'GET' => array(
                'description' => 'Returns a customer',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer[/:customer_id]"
       }
   }
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
            ),
            'PATCH' => array(
                'description' => 'Update partially a customer',
                'request' => '{
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer[/:customer_id]"
       }
   }
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
            ),
            'PUT' => array(
                'request' => '{
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer[/:customer_id]"
       }
   }
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
                'description' => 'Updates a customer',
            ),
            'DELETE' => array(
                'description' => 'Deletes a customer',
                'request' => '{
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
                'response' => '{
   "_links": {
       "self": {
           "href": "/customer[/:customer_id]"
       }
   }
   "name": "Name of customer",
   "email": "",
   "created_at": ""
}',
            ),
        ),
    ),
);
