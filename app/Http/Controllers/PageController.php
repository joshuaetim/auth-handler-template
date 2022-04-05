<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\APIController;

class PageController extends APIController
{
    public function home() 
    {
        return $this->sendResponse([], 'Welcome to LaraJwt', 200);
    }

    public function secured()
    {
        return $this->sendResponse([], 'this is a secure page', 200);
    }
}
