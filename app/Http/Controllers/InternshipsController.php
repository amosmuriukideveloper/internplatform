<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInternshipsRequest;

use App\Http\Requests\UpdateInternshipsRequest;
use App\Models\Internships;
use Illuminate\Http\Request;

class InternshipsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internships = Internships::all();

        return view('internships.index', ['internships' => $internships]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('internships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInternshipsRequest $request)
    {
        $internships = Internships::create($request->validated());

        return redirect()->route('internships.index')->with('success', 'Internship created successfully');
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
        $internship = Internships::findOrFail($id);
        return view('internships.edit', compact('internship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInternshipsRequest $request, $id)
    {
        $internship = Internships::findOrFail($id);
        $internship->update($request->all());
        return redirect()->route('internships.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $internship = Internships::findOrFail($id);
    $internship->delete();

    return response()->json(['message' => 'Internship deleted successfully.'], 200);
    }
}
