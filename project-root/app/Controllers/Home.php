<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = "welcome_message"
        return view($data);
    }
}
