<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
    $user = User::all();
    return view('index',compact('user'));
   }

   public function create()
   {
    return view('create');
   }

   public function store(Request $request)
   {
   
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|digits:10',
            'DOB' => 'required|date',
            'adhar' => 'required|digits:14',
            'gender' => 'required|in:male,female',
            'profile_photo' => 'required|image',
        ]);
        
        $path = $request->file('profile_photo')->store('/public/images');

        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->DOB = $request->DOB;
        $data->adhar = $request->adhar;
        $data->gender = $request->gender;
        $data->profile_photo = $path;
        $data->save();

        return redirect('/');

   }

   public function show(User $user)
   {
    return view('show',compact('user'));
   }

   public function edit(User $user)
   {
    return view('edit',compact('user'));
   }

   public function update(Request $request, $id)
   {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'number' => 'required|digits:10',
            'DOB' => 'required|date',
            'adhar' => 'required|digits:14',
            'gender' => 'required|in:male,female',
            'profile_photo' => '',
        ]);

        dd($request->all());
        $user = User::find($id);

        if($request->hasFile('profile_photo')){
            $request->validate([
                'profile_photo' => 'required|image',
            ]);
            $path = $request->file('profile_photo')->store('public/images');
            $user->profile_photo = $path;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/');
   }

   public function destroy(User $user)
   {
       $user->delete();

       return redirect('/');

   }
}
