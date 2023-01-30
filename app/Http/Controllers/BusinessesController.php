<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinessesRequest;
use App\Http\Requests\UpdateBusinessesRequest;
use App\Models\Businesses;
use Illuminate\Http\Request;

class BusinessesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Businesses::all();
        return view('businesses.index', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('businesses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBusinessesRequest $request)
    {
        $business = new Businesses();
        $business->name = $request->name;
        $business->email = $request->email;
        $business->password = bcrypt($request->password);
        $business->location = $request->location;
        $business->industry = $request->industry;
        $business->website = $request->website;
        $business->is_active = $request->is_active;
        $business->save();

        return redirect()->route('businesses.index')->with('success', 'Business created successfully.');
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Businesses::findOrFail($id);
        return view('businesses.edit', compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBusinessesRequest $request, $id)
    {
    
        $business = Businesses::findOrFail($id);
        $business->name = $request->name;
        $business->email = $request->email;
        $business->password = bcrypt($request->password);
        $business->location = $request->location;
        $business->industry = $request->industry;
        $business->website = $request->website;
        $business->is_active = $request->is_active;
        $business->save();

        

        return redirect()->route('businesses.index')->with('success', 'Business updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Businesses::findOrFail($id);
        $business->delete();
        return response()->json(['message' => 'Business successfully deleted'], 200);
    }
}
