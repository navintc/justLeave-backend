<?php

namespace App\Http\Controllers;

use App\Models\WebUser;
use App\Http\Requests\StoreWebUserRequest;
use App\Http\Requests\UpdateWebUserRequest;

class WebUserController extends Controller
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
     * @param  \App\Http\Requests\StoreWebUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function show(WebUser $webUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function edit(WebUser $webUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebUserRequest  $request
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebUserRequest $request, WebUser $webUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebUser $webUser)
    {
        //
    }
}
