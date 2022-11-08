<?php

namespace App\Http\Controllers;

use App\Http\Requests\NationalityFormRequest;
use App\Models\Nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationalities = Nationality::all();
        echo json_encode($nationalities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NationalityFormRequest $request)
    {
        Nationality::create($request->all());
        return to_route('nationalities.index');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Nationality $nationality, NationalityFormRequest $request)
    {
        $nationality->fill($request->all());
        $nationality->save();
        return to_route('nationalities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();
        return to_route('nationalities.index');
    }
}
