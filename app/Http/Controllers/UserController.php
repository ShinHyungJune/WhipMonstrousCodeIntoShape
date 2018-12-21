<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function store()
    {
        /*
         * Register a user.
         *
         * @event App\Events\UserRegistered
         * */
        // 위처럼 이벤트 사용시에는 항상 주석을 달아줘야 무슨일이 일어날지 유지보수할 때 알 수 잇음

        // user 등록하면 UserRegistered 이벤트 발생
        User::register([
            "name" => "test",
            "email" => "test@naver.com",
            "password" => bcrypt("password")
        ]);

        // SendWelcomeEmail 리스너가 트리거되면서 환영메일보냄.
    }
}
