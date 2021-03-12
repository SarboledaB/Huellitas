<?php
/*
|--------------------------------------------------------------------------
| Author: Sebastian Arboleda Botero
| Email:  sarboledab@eafit.edu.co
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PetItem;

class PetItemController extends Controller
{

    public function show($id)
    {
        try {
            $data = []; //to be sent to the view
            $petItem = PetItem::findOrFail($id);
            $data["title"] = $petItem->getName();
            $data["petItem"] = $petItem;
            return view('petItem.show')->with("data", $data);
        } catch (\Throwable $th) {
            return back()->with('danger', 'Pet Item not found!');
        }
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        return view('petItem.create')->with("data", $data);
    }

    public function save(Request $request)
    {
        try {
            PetItem::validate($request);
            PetItem::create($request->only(["name", "details", "value", "rating"]));

            return back()->with('success', 'Pet Item created successfully!');
        } catch (\Throwable $th) {
            return back()->with('danger', 'Pet Item was not create!');
        }
    }

    public function list()
    {
        try {
            $data = []; //to be sent to the view
            $data["title"] = "List product";
            $data["petItems"] = PetItem::all()->sortBy('id');
            return view('petItem.list')->with("data", $data);
        } catch (\Throwable $th) {
            return back()->with('danger', 'the list was not found!');
        }
    }

    public function delete($id)
    {
        try {
            PetItem::destroy($id);
            return redirect()->route('petItem.list')->with('success', 'PetItem deleted succesfully!');
        } catch (\Throwable $th) {
            return back()->with('danger', 'Pet Item was not delete!');
        }
    }
}
