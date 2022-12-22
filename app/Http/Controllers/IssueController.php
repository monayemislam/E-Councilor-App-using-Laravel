<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;

class IssueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userInfo = Auth::user();
        $areaNumber = $userInfo['area_number'];
        // $issueList = Issue::with('raiser')->where('area_number',$areaNumber)->get();
        $issueList = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->select('users.*', 'issues.*')
            ->where('users.area_number',$areaNumber)
            ->get();
        // dd($issueList);
        return view('issue-list',['data'=>$issueList]);
        
    }

    public function myIssue(){
        $userId = auth()->id();
        $issueList = Issue::where('user_id',$userId)->get();
       return view('my-issue-list',['data'=>$issueList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create-issue');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|required'
        ]);

        $newIssue = new Issue;
        $newIssue->user_id = auth()->id();
        $newIssue->title = $request->title;
        $newIssue->description = $request->description;
        $newIssue->save();
        return Redirect::to('submitted-issue');
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
