<?php

namespace App\Http\Controllers;

use App\Http\Resources\HRdata;
use App\Models\Leaves;

use App\Http\Requests\StoreLeavesRequest;
use App\Http\Requests\UpdateLeavesRequest;
use App\Models\product;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeavesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Leaves::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        dd($request);
        $query= Leaves::insert(['userID' => $request['userID'], 'leaveType' => $request['leaveType'], 'leaveDate' => $request['leaveDate'],'status' => 0]);
        return response()->json(['success'=>'updated!']);

//        $query= Leaves::insert(['userID' => 2, 'leaveType' => 2, 'leaveDate' => 2022-05-1,'status' => 0]);
//        return response()->json(['success'=>'updated!']);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeavesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeavesRequest $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function show(Leaves $leaves)
    {
        //
        return new HRdata($leaves);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function edit(Leaves $leaves)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeavesRequest  $request
     * @param  \App\Models\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeavesRequest $request, Leaves $leaves)
    {

    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function updateLeaveStatus(Request $request): JsonResponse
    {
        $query= Leaves::where('id', $request['leaveID'])
            ->update(['status' => $request['statusUpdate']]);
        return response()->json(['success'=>'updated!']);
    }

    public function addLeave(Request $request)
    {
        //dd($request);
        $query= Leaves::insert(['userID' => $request['userID'], 'leaveType' => $request['leaveType'], 'leaveDate' => $request['leaveDate'],'status' => 0]);
        return response()->json(['success'=>'updated!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leaves  $leaves
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leaves $leaves)
    {
        //
    }
}
