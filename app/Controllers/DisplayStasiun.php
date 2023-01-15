<?php

namespace App\Controllers;

class DisplayStasiun extends BaseController
{
    public function index(): string
    {
        return view("display/index");
    }

    public function kereta(): string
    {
        return view("display/stasiun/kereta");
    }
}
