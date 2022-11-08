<?php

namespace App\Http\Controllers;

use App\Http\Requests\HealthUnityFormRequest;
use App\Models\HealthUnity;
use Illuminate\Http\Request;

class HealthUnityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $healthUnities = HealthUnity::all();
        echo json_encode($healthUnities);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HealthUnityFormRequest $request)
    {
        HealthUnity::create($request->all());
        return to_route('healthUnities.index');
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
    public function update(HealthUnity $healthUnity, HealthUnityFormRequest $request)
    {
        $healthUnity->fill($request->all());
        $healthUnity->save();
        return to_route('healthUnities.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(HealthUnity $healthUnity)
    {
        $healthUnity->delete();
        return to_route('healthUnities.index');
    }
}
