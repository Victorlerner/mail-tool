<?php

namespace App\Http\Web\Controllers\User;

use Illuminate\Http\Request;

class UserController
{
    public function __invoke()
    {
        return auth()->user();
    }


}
