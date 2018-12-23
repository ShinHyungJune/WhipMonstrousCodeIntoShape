<?php

namespace App;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Model;

protected $hidden = [
    'passord', 'remember_token'
];

class User extends Authenticate
{
    public function present()
    {
        return new UserPresenter($this);
    }

    public function welcomeMessage
}
