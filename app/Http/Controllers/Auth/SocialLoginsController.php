<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use App\Models\User;

class SocialLoginsController extends Controller
{

    /**
     * redirect user who logged in via github
     */
    protected function redirectUser(){
        return Socialite::driver('github')->redirect();
    }

    /**
     * redirect user who loggedin Via Facebook
     */
    protected function redirectFacebookUser(){
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * this function redirects the gmail user
     */
    protected function redirectGmailUser(){
        return Socialite::driver('google')->redirect();
    }

    /**
     * this funtion is a redirect url for a facebook logedin user
     */
    protected function handleProviderCallBackForFaceBook(){
        $facebook_user = Socialite::driver('facebook')->stateless()->user();
        // $user = Socialite::driver('github')->user();

        //Create a new user in the database
        $user_name = $facebook_user->getName();
        if(empty($user_name)){
            $user_name = $facebook_user->getNickname();
        }
        if(User::where('email',$facebook_user->getEmail())->exists()){
            return redirect('/login')->with('msg','An Account Associated with this Email Already exists, Kindly Login to proceed');
        }
        $user = User::create([
            'email'       => $facebook_user->getEmail(),
            'name'        => $user_name,
            'provider_id' => $facebook_user->getId(),
        ]);
        //Log the user in
            auth()->login($user, true);
        //redirect the user to the dashboard
        return redirect('/dashboard_overview');
    }

    /**
     * this funtion is a redirect url for a facebook logedin user
     */
    protected function handleProviderCallBackForGmail(){
        $gmail_user = Socialite::driver('google')->stateless()->user();
        // $user = Socialite::driver('github')->user();

        // dd($github_user);

        //Create a new user in the database
        $user_name = $gmail_user->getName();
        if(empty($user_name)){
            $user_name = $gmail_user->getNickname();
        }
        if(User::where('email',$gmail_user->getEmail())->exists()){
            return redirect('/login')->with('msg','An Account Associated with this Email Already exists, Kindly Login to proceed');
        }
        $user = User::create([
            'email'       => $gmail_user->getEmail(),
            'name'        => $user_name,
            'provider_id' => $gmail_user->getId(),
        ]);
        //Log the user in
            auth()->login($user, true);
        //redirect the user to the dashboard
        return redirect('/dashboard_overview');
    }

    /**
     * this function is the redirect url for the user
     */
    protected function handleProviderCallBack(){
        $github_user = Socialite::driver('github')->stateless()->user();
        // $user = Socialite::driver('github')->user();

        // dd($github_user);

        //Create a new user in the database
        $user_name = $github_user->getName();
        if(empty($user_name)){
            $user_name = $github_user->getNickname();
        }
        if(User::where('email',$github_user->getEmail())->exists()){
            return redirect('/login')->with('msg','An Account Associated with this Email Already exists, Kindly Login to proceed');
        }
        $user = User::create([
            'email'       => $github_user->getEmail(),
            'name'        => $user_name,
            'provider_id' => $github_user->getId(),
        ]);
        //Log the user in
            auth()->login($user, true);
        //redirect the user to the dashboard
        return redirect('/dashboard_overview');
    }
}
