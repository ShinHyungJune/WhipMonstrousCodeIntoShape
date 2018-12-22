<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function isMaxedOut()
    {
        return false;
    }

    public function isOwnedBy(User $user)
    {
        return $this->owner_id == $user->id;
    }
}
