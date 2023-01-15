<?php

namespace App\Controllers;

class DisplayHalte extends BaseController
{
    public function index(): string
    {
        return view("display/index");
    }

    public function bus(): string
    {
        return view("display/halte/bus");
    }

    public function pintu(): string
    {
        return view("display/halte/pintu");
    }

    public function rute(): string
    {
        return view("display/halte/rute");
    }
}
