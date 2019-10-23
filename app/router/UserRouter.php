<?php
/**
 * Created by PhpStorm.
 * User: gamalan
 * Date: 07/10/16
 * Time: 10:24
 */

namespace Application\Router;

use Phalcon\Mvc\Router\Group;

class UserRouter extends Group
{
    public function initialize()
    {
        $this->setPaths([
            'namespaces' => 'Application\\Controllers',
            'controller' => 'user'
        ]);

        // $this->setPrefix('/users');

        $this->add(
            '/',
            [
                'action' => 'read'
            ]
        );
        
        // $this->addGet(
        //     "/users",
        //     [
        //         "action" => "read"
        //     ]
        // );
    }
}