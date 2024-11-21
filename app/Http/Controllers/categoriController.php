<?php

namespace App\Http\Controllers;

use App\Models\categori;
use Illuminate\Http\Request;

class categoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categori = categori::latest()->paginate(5);



        return view('categori.index',compact('categori'))

                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('categori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {

        $request->validate([

            'name' => 'required',


            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);



        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        categori::create($input);
        return redirect()->route('categori.index')
                        ->with('success','Product created successfully.');

    }
    /**
     * Display the specified resource.
     */
    public function show(categori $categori)
    {
        //
        return view('categori.show',compact('categori'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categori $categori)
    {
        //

        return view('categori.edit',compact('categori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categori $categori)
    {
        //




        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }
        $categori->update($input);
        return redirect()->route('categori.index')
                        ->with('success','Product updated successfully');

    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categori $categori)
    {
        //
        $categori->delete();
        return redirect()->route('categori.index')
                        ->with('success','Product deleted successfully');
    }
}
