<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserInfo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $info = UserInfo::all();

        return view('info.index')->with(['info' => $info]);
    }
    public function store(Request $request) {
        if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $validated = $request->validate([
                    'photo' => 'mimes:jpeg,png,jpg',
                ]);
                $file = $request->file('photo');
                $path = 'images';
                $file->move($path, $file->getClientOriginalName());
                $path = '/images/'.$file->getClientOriginalName();
                $userInfo = UserInfo::create([
                    'email' => $request->email,
                    'name' => $request->name,
                    'surname' => $request->surname,
                    'photo' => $path
                ]);
                return back();
            }
        }
        else {
            abort(501, 'Could not upload image :(');
        }
    }

}
