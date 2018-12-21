<?php

namespace App\Http\Controllers;

use App\Jobs\PurchasePodcast;
use Illuminate\Http\Request;

class PurchasesController extends Controller
{
    public function store()
    {
        dispatch(new PurchasePodcast());

        return 'done';
    }
}
