<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public function getRevenueAttribute($revenue)
    {
        return new Revenue($revenue);
    }
    /* 아래처럼 revenue에 대한 메소드를 쫙 쓰지말고 revenue 객체클래스를 만들자.
     * public function revenue()
    {
        return $this->revenue; // 8600
    }

    public function revenueInDollars()
    {
        return $this->revenue() / 100; // 86
    }

    public function revenueAsCurrency()
    {
        return money_format('$%i', $this->revenueInDollars()); // $86.00
    }
    */

}
