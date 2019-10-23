<?php
/**
 * Created by PhpStorm.
 * User: gamalan
 * Date: 07/10/16
 * Time: 10:24
 */

namespace Application\Router;

use Phalcon\Mvc\Router\Group;

class MainRouter extends Group
{
    public function initialize()
    {
        $this->setPaths([
            // 'namespaces' => 'Application\\Controllers',
            'controller' => 'index'
        ]);

        $this->addGet(
            '/',
            [
                'action' => 'index'
            ]
        );

        /**
         * Customer Route
         */
        $this->addGet(
            "/customer",
            [
                "action" => "list"
            ]
        );
        $this->addGet(
            "/customer/{custId}",
            [
                "action" => "show"
            ]
        );
        $this->addGet(
            "/customer/create",
            [
                "action" => "create"
            ]
        );
        $this->addPost(
            "/customer/create",
            [
                "action" => "store"
            ]
        );
        // untuk edit dan delete disini saya belum bisa menggunakan method put dan delete di phalcon versi 3.0 (method PUT 404 not found)
        // sudah mencoba berbagai cara tetap 404 not found
        // jadi saya menggunakan old route http method (get dan post)
        $this->addGet(
            "/customer/edit/{custId}",
            [
                "action" => "edit"
            ]
        );
        $this->addPost(
            "/customer/edit/{custId}",
            [
                "action" => "save"
            ]
        );
        $this->addGet(
            "/customer/delete/{custId}",
            [
                "action" => "delete"
            ]
        );

    }
}