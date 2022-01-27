<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class regController extends Controller
{
    function index()
    {
        return view('register');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            // 'email' =>'required|email',
            'number' =>'required|numeric',
            'talktitle' =>'required',
            'photo' =>'required ',
        ]);

        $messages = [
            'email.required' => 'We need to know your email address!',
        ];

        $user = new profile();
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->talktitle = $request->talktitle;
        if($request->hasFile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file ->move('img', $filename);
            $user->photo = $filename;
        }
        if($user->save())
        {
            session()->flash('message','Profile has been saved successfully!');
        }else{
            session()->flash('emessage','Something went wrong');
        }

        return redirect('/');
    }

}
