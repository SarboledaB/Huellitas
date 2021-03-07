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
            $PetItem = PetItem::findOrFail($id);
            $data["title"] = $PetItem->getName();
            $data["product"] = $PetItem;
            return view('PetItem.show')->with("data", $data);
        } catch (\Throwable $th) {
            return back()->with('danger', 'Pet Item not found!');
        }
    }

    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        return view('PetItem.create')->with("data", $data);
    }

    public function save(Request $request)
    {
        try {
            $request->validate([
                "name" => "required",
                "details" => "required",
                "value" => "required|numeric|gt:0",
                "rating" => "required|numeric|gt:0"
            ]);
            PetItem::create($request->only(["name", "details", "value", "rating"]));

            return back()->with('success', 'Pet Item created successfully!');
        } catch (\Throwable $th) {
            return back()->with('danger', 'Pet Item was not create!');
        }
    }

    public function list(Request $request)
    {
        try {
            $data = []; //to be sent to the view
            $data["title"] = "List product";
            $data["products"] = PetItem::all()->sortBy('id');
            return view('PetItem.list')->with("data", $data);
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
