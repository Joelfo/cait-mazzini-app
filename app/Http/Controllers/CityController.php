<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityFormRequest;
use App\Models\City;
use App\Repositories\CityRepository;
use Illuminate\Http\Request;

class CityController extends Controller
{

    public function __construct(private CityRepository $repository)
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityFormRequest $request)
    {
        return $this->repository->create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->read($id);
       
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(City $city, CityFormRequest $request)
    {
        return $this->repository->update($city, $request->all());
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        return $this->repository->delete($city);
    }
}
