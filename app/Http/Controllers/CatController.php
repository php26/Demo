<?php

namespace Pratice\Http\Controllers;

use Illuminate\Http\Request;
use Pratice\Cat;

class CatController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats= Cat::all();
        return view('cats.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name= $request->get('name');
        // $breedId= $request->get('breed_id');
        // $data= 
        // [
        //     'name' => $name,
        //     'breed_id' => $breedId
        // ];

        $data= $request->all();

        Cat::create($data);
        return redirect()->route('cats.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "cat".$id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cat= Cat::find($id);
        return view('cats.edit', compact('cat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cat= Cat::find($id);
        // $dataEdit= $request->all();
        $data= [
            'name' => $request->get('name'),
            'breed_id' => $request->get('breed_id')
        ];
        $cat->update($data);
        return redirect()->route('cats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat= Cat::find($id);
        $cat->delete();
        return redirect()->route('cats.index');

    }
}
