<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;

class LogVisitorAfterLogin
{
    public function __construct()
    {
        //
    }

    public function handle(Login $event)
    {
        // Logic untuk mencatat pengunjung setelah login
    }
}
