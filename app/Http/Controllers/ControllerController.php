<?php

namespace App\Http\Controllers;

use App\Models\Controller;
use App\Http\Requests\StoreControllerRequest;
use App\Http\Requests\UpdateControllerRequest;

class ControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function show(Controller $controller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function edit(Controller $controller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateControllerRequest  $request
     * @param  \App\Models\Controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateControllerRequest $request, Controller $controller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Controller  $controller
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controller $controller)
    {
        //
    }
}
