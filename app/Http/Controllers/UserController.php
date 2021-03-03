<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id)
    {
        try {
            $data = []; //to be sent to the view
            $user = User::findOrFail($id);

            $data["title"] = $user->getUsername();
            $data["user"] = $user;
            return view('user.show')->with("data", $data);
        } catch (\Throwable $th) {
            return redirect()->route('user.list')->with('danger', 'User Id not found!');
        }
    }

    public function list()
    {
        try {

            $data = []; //to be sent to the view
            $data["title"] = "List users";
            $data["users"] = User::all()->sortBy('id');

            return view('user.list')->with("data", $data);
        } catch (\Throwable $th) {
            return view('user.list')->with('danger', "Couldn't get the list!");
        }
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create user";

        return view('user.create')->with("data", $data);
    }

    public function save(Request $request)
    {
        try {
            $request->validate([
                "username" => "required",
                "firstName" => "required",
                "lastName" => "required",
                "email" => "required|email",
                "password" => "required"
            ]);

            User::create($request->only(["username", "firstName", "lastName", "email", "password"]));
            return back()->with('success', 'User created successfully!');
        } catch (\Throwable $th) {
            return back()->with('danger', 'User was not created!');
        }
    }

    public function delete($id)
    {
        try {
            User::destroy($id);
            return redirect()->route('user.list')->with('success', 'User deleted succesfully!');
        } catch (\Throwable $th) {
            return back()->with('danger', 'User Id not found!');
        }
    }
}
