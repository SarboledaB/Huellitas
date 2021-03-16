<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Foundations;

class FoundationsController extends Controller
{
    public function create()
    {
        $data["title"] = "Agregar fundación";
        return view('foundations.create')->with("data",$data);
    }
    
    public function list()
    {
        $data["foundations"] = Foundations::all();
        return view('foundations.list')->with("data",$data);
    }

    public function save(Request $request)
    {   
        Foundations::validate($request);
        Foundations::create($request->only(["name","email","description"]));        
        return back()->with('success','Foundation created successfully!');
    }

    public function show($id)
    {
        $data["foundation"] = Foundations::findOrFail($id);
        return view('foundations.show')->with("data",$data);
    }

    public function delete($id)
    {        
        $foundation = Foundations::find($id);                
        $foundation->delete();
        //return back()->with('success', 'Foundation deleted succesfully'); 
        return redirect()->route('foundations.list');
        
    }

}