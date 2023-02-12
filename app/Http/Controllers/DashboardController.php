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

        // $issuesType =  DB::table('issues')
        // ->select('status', DB::raw('status, count(*) as total'))
        // ->groupBy('status')
        // ->get()
        // ->pluck('status','total');

        $monthWiseIssues = Issue::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("month_name"))
                    ->orderBy('id','ASC')
                    ->pluck('count', 'month_name');

        for ($i=0; $i<=count($monthWiseIssues); $i++) {
            $colours[] = '#' . substr(str_shuffle('ABCDEF0123456789'), 0, 6);
        }

        $monthWiseIssuesColours = $colours;
        $monthWiseIssuesLabels = $monthWiseIssues->keys();
        $monthWiseIssuesData = $monthWiseIssues->values();

        return view('overview',compact('totalUser','totalNewIssue','totalSolvedIssue','totalRejectedIssue','recentRegisteredUser','monthWiseIssuesLabels','monthWiseIssuesData','monthWiseIssuesColours'));
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
