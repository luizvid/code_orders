<?php
/**
 * @author Luiz Fernando Vid <luizvid@gmail.com>
 * @copyright 2015
 * DateTime 05/12/2015 20:37
 */

namespace CodeOrders\V1\Rest\Users;

use Zend\Stdlib\Hydrator\HydratorInterface;

class UsersMapper extends UsersEntity implements HydratorInterface
{
    /**
     * @param object $object
     * @return array
     */
    public function extract($object)
    {
        return [
            'id' => $object->id,
            'username' => $object->username,
            'password' => $object->password,
            'first_name' => $object->first_name,
            'last_name' => $object->last_name,
            'role' => $object->role
        ];
    }

    /**
     * @param array $data
     * @param object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        $object->id = $data['id'];
        $object->username = $data['username'];
        $object->password = $data['password'];
        $object->first_name = $data['first_name'];
        $object->last_name = $data['last_name'];
        $object->role = $data['role'];

        return $object;
    }

}