<?php

namespace App\Http\Controllers\Profile\Experiences;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Authenticatable $user): View
    {
        return view('profile.experiences.show', [
            'user' => $user->load(['profile.experiences']),
        ]);
    }
}
