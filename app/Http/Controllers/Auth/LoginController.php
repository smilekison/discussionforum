<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\SocialAccount;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Socialite;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }    

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();

        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect($this->redirectTo);
    }


    public function findOrCreateUser($user, $provider){

        $authUser = User::where('provider_id', $user->id)->first();
        if($authUser){
            return $authUser;
        }
        //OAuth Two Providers
        return User::create([
            'provider' => 'google',
            'provider_id'=> $user->getId(),
            'name' => $user->name,
            'email' => $user->email,
            'email_verified_at' => '2019-01-10 10:55:45',            
        ]);

        //return $user->getId();
        
    }
}
