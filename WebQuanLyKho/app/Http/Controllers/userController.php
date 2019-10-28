<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
       /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layout.index';

    /**
     * Show the user profile.
     */
    public function showProfile()
    {
        $this->layout->content = View::make('user.profile');
    }
}
