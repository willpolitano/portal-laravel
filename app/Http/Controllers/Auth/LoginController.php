<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $githubUser = Socialite::driver('github')->user();

        // create a new user in our database
        $user = User::firstOrCreate(
            [
                'provider_id' => $githubUser->getId(),
            ],
            [
                'email' => $githubUser->getEmail(),
                'name' => $githubUser->getName(),
            ]
        );

        // log the user in
        auth()->login($user, true);

        //redirect to dashboard
        return redirect('home');
    }
}
