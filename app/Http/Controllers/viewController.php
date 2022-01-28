<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class viewController extends Controller
{
    function index()
    {
        $users = profile::all();
        return view('views', compact('users'));
    }

    public function edit($id)
    {
        $user = profile::where('id',$id)->first();
        return view('edit', compact('user'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' =>'required|email',
            'number' =>'required|numeric',
            'talktitle' =>'required',
            'photo' =>'required',
        ]);

        $user = Profile::find($request->id);
        $user->fname = $request->input('fname');
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
        if($user->update())
        {
            return redirect('/view')->with('message','Profile has been Updated Successfully!');
        }else{
            session()->flash('emessage','Something went wrong');
        }
    }

    public function delete($id)
    {
        $product = profile::find($id);
        $product->delete();
        return redirect('/view')->with('message','User has been delete successfully!');
    }

}
