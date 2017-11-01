<?php

namespace Nucleons\Http\Controllers\Auth;

use Auth;
use Hash;
use Illuminate\Http\Request;
use Nucleons\Http\Controllers\Controller;

class ChangePassword extends Controller
{
    public function changePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|max:255|min:8',
            'password' => 'required|max:255|min:8|confirmed',

        ]);

        $user = Auth::user();


        if(Hash::check($request->old_password, $user->password)) {
            $user->password = bcrypt($request->password);
            $user->save();
            return redirect()->route('home');
        }
        else{
            return redirect()->back()->withErrors([
                'old_password' => 'password does not match'
            ]);
        }
    }
}
