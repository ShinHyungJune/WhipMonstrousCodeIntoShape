<?php

namespace App\Policies;

use App\Team;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TeamPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    // before는 마스터권한같이 policy에 거르지않고 프리패스해주고싶을 때 사용.
    public function before($user)
    {
        if($user->isAdmin()){
            return true;
        }
    }
    public function store(User $user, Team $team)
    {
        // If you are not the owner of the team, no way.
        if($team->isOwnedBy($user)){
            abort(403, 'You are not the owner of this team.');
        }

        // If the team is maxed out, no way.
        if($team->isMaxedOut()){
            abort(403, 'Your team is maxed out.');
        }

        return true;
    }
}
