<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInfo = Auth::user();
        $userArea = $userInfo['area_number'];

        $totalNewIssue = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->where('users.area_number',$userArea)
            ->where('issues.status',0)
            ->count();

        $totalSolvedIssue = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->where('users.area_number',$userArea)
            ->where('issues.status',1)
            ->count(); 
        
        $totalRejectedIssue = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->where('users.area_number',$userArea)
            ->where('issues.status',2)
            ->count();

        $recentRegisteredUser = User::orderBy('id','desc')->take(10)->get();
        
        $totalUser = User::count();
        return view('overview',compact('totalUser','totalNewIssue','totalSolvedIssue','totalRejectedIssue','recentRegisteredUser'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
