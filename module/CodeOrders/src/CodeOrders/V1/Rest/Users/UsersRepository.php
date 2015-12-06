<?php
/**
 * @author Luiz Fernando Vid <luizvid@gmail.com>
 * @copyright 2015
 * DateTime 05/12/2015 20:44
 */

namespace CodeOrders\V1\Rest\Users;

use Zend\Db\TableGateway\TableGatewayInterface;
use Zend\Paginator\Adapter\DbTableGateway;

class UsersRepository
{
    /**
     * @var TableGatewayInterface
     */
    private $tableGateway;

    /**
     * @param TableGatewayInterface $tableGateway
     */
    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function findAll()
    {
        $tableGateway = $this->tableGateway;
        $paginatorAdapter = new DbTableGateway($tableGateway);

        return new UsersCollection($paginatorAdapter);
    }

    public function find($id)
    {
        $resultSet = $this->tableGateway->select(['id' => (int)$id]);

        return $resultSet->current();
    }

}