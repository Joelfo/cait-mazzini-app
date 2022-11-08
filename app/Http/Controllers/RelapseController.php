<?php

namespace App\Http\Controllers;

use App\Http\Requests\RelapseFormRequest;
use App\Models\Relapse;
use Illuminate\Http\Request;

class RelapseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relapses = Relapse::all();
        echo json_encode($relapses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RelapseFormRequest $request)
    {
        Relapse::create($request->all());
        return to_route('relapses.index');
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
    public function update(Relapse $relapse, RelapseFormRequest $request)
    {
        $relapse->fill($request->all());
        $relapse->save();
        return to_route('relapses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Relapse $relapse)
    {
        $relapse->delete();
        return to_route('relapses.index');
    }
}
