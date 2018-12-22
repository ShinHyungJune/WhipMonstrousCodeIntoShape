<?php

namespace App;

class Revenue
{
    private $revenue;

    public function __construct($revenue)
    {
        $this->revenue = $revenue;
    }

    // $performance->revenue->inDollars() 같은 형태로 접근 가능.
    public function inDollars()
    {
        return $this->revenue / 100; // 86
    }

    public function asCurrency()
    {
        return money_format('$%i', $this->inDollars()); // $86.00
    }

    // 객체화시키면 echo $performance->revenue같은 형태로 접근할 시 string으로 쓰려한다는 오류 뜸
    // 근데 이런 개꿀 놓칠 수 없으니 아래같은 함수 추가해두는거.
    public function __toString()
    {
        return (string)$this->revenue;
    }
}
