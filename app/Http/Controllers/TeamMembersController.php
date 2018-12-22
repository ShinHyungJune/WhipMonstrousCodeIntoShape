<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;

class TeamMembersController extends Controller
{
    public function store(Team $team)
    {
        // policy 클래스에 정의한 store 부분을 살펴봐줌.
        $this->authorize('store', $team);

        /* 이렇게 권한에 관한건 policy 클래스를 만들어서 처리
        // If you are not a sigend in, no way.
        if(auth()->guest()) {
            abort(403, 'You are not sigend in.');
        }

        // If you are not the owner of the team, no way.
        if($team->owner_id != auth()->user()->id){
            abort(403, 'You are not the owner of this team.');
        }

        // If the team is maxed out, no way.
        if($team->isMaxedOut()){
            abort(403, 'Your team is maxed out.');
        }
        */

        return 'Add the user to the team.';
    }
}
