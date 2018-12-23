<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPresenter extends Presenter
{
    public function welcomeMessage()
    {
        return sprintf(
            'Welcome, $s, You signed up $s.',
            $this->user->name,
            $this->user->created_at->diffForHumans()
        );
    }
}
