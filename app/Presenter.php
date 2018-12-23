<?php
/**
 * Created by PhpStorm.
 * User: master
 * Date: 2018-12-23
 * Time: 오후 5:38
 */

namespace App;


class Presenter
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $model;
    }

    public function __get($property)
    {
        if(method_exists($this, $property)){
            return call_user_func([$this, $property]);
        }

        $message = '%s does not respond to the "%s" property or method.';

        throw new \Exception(sprintf($message, static::class, $property));
    }
}