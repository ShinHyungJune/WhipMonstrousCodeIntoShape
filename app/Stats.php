<?php
/**
 * Created by PhpStorm.
 * User: barocomics
 * Date: 2018-12-21
 * Time: 오전 10:13
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Stats
{
    protected $model;

    function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function favorites()
    {
        return $this->model->favorites()->count();
    }

    public function completions()
    {
        return $this->model->completions()->count();
    }
}
