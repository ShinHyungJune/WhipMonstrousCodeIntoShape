<?php

namespace App\Http\Controllers;

use App\RegistersForeverUser;
use App\RegistersSubscriber;
use App\RegistersTeamMember;
use App\User;
use Illuminate\Http\Request;

// 1. Identify a point of flexibility
    // 1.1. Forum Account
    // 1.2. Regular Subscriber
    // 1.3. Team Member Access
    // 1.4. Forever Account

// 2. Extract each strategy into its own class.

// 3. Ensure that each of those strategies adheres to a common API(or contract or interface).

// 4. Determine the proper strategy, and let it handle the task.

class SubscriptionsController extends Controller
{
    public function store(Request $request)
    {
        $strategy = $this->getRegistrationStrategy($request);

        // 이렇게 $strategy->메소드명으로 사용해야 하니까 각 전략클래스마다 동일한 메소드(인터페이스)를 갖고 있어야함.
        $strategy->handle($request->all());
    }

    protected function getRegistrationStrategy(Request $request)
    {
        if($request->plan == 'forever'){
            return new RegistersForeverUser();
        }

        if($request->invitation){
            return new RegistersTeamMember();
        }

        return new RegistersSubscriber();
    }


}
