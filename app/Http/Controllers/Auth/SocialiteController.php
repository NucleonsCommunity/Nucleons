<?php

namespace Nucleons\Http\Controllers\Auth;

use Nucleons\User;
use Illuminate\Http\Request;
use Nucleons\Http\Controllers\Controller;
use Auth;
use Socialite;

class SocialiteController extends Controller
{
    /**
     * Redirect the user to the OAuth Provider.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->user();

        $authUser = $this->findOrCreateUser($user, $provider);

        if(!$authUser->number)
            return view('auth.socialite', ['token'=> $authUser->password]);

        Auth::login($authUser, true);
        return redirect()->route('home');
    }

    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('email', $user->email)->first();
        if ($authUser) {
            return $authUser;
        }
        return User::create([
            'name'      => $user->name,
            'gate'      => 0,
            'ies'       => 0,
            'ssc'       => 0,
            'banking'   => 0,
            'email'     => $user->email,
            'password'  => $user->token,
        ]);

    }

    public function numberRegister(Request $request)
    {
        $this->validate($request, [
            'number' => 'required|string|max:15|min:6|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'token' => 'required'
        ]);

        $authUser = User::where('password', $request->token)->first();

        $authUser->number = $request->number;
        $authUser->password = bcrypt($request->password);

        $authUser->save();

        Auth::login($authUser, true);
        return redirect()->route('home');
    }
}
