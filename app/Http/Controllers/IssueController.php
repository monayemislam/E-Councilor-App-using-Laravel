<?php

namespace App\Http\Controllers;

use App\Models\Issue;
use App\Exports\IssueExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use SweetAlert;

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
            ->where('issues.status',0)
            ->get();
        return view('issue-list',['data'=>$issueList]);
        
    }

    public function solvedIssues(){
        $userInfo = Auth::user();
        $areaNumber = $userInfo['area_number'];
        $issueList = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->select('users.*', 'issues.*')
            ->where('users.area_number',$areaNumber)
            ->where('issues.status',1)
            ->get();

           return view('issue-solved',['data'=>$issueList]);
    }

    public function rejectedIssues(){
        $userInfo = Auth::user();
        $areaNumber = $userInfo['area_number'];
        $issueList = DB::table('issues')
            ->join('users', 'issues.user_id', '=', 'users.id')
            ->select('users.*', 'issues.*')
            ->where('users.area_number',$areaNumber)
            ->where('issues.status',2)
            ->get();
           return view('issue-rejected',['data'=>$issueList]);
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
            'description'=>'required|required',
            'document'=>'required|mimes:csv,txt,xlx,xls,pdf|max:2048'
        ]);

        $newIssue = new Issue;
        $userId = auth()->id();
        $fileName = $userId.'_'.time().'_'.$request->document->getClientOriginalName();
        $filePath = $request->file('document')->storeAs('issue_attachments', $fileName, 'public');
        
        
        $newIssue->user_id = auth()->id();
        $newIssue->title = $request->title;
        $newIssue->description = $request->description;
        // $newIssue->document = $fileName;
        $newIssue->file_path = '/storage/' . $filePath;
        $newIssue->save();
        alert()->success('আপনার অভিযোগটি লিপিবদ্ধ হয়েছে', 'ধন্যবাদ!')->persistent("ঠিক আছে")->autoclose(5000);
        return Redirect::to('submitted-issue');
    }

    //display issue details with user information

    public function issueDetails($id){
        $issueId = $id;
        $userId = Issue::where('id',$issueId)->value('user_id');

        $pendingIssue_count = Issue::where('user_id', $userId)
                    ->where('status', 0)
                    ->count();
        
        $solvedIssue_count = Issue::where('user_id', $userId)
                    ->where('status', 1)
                    ->count();

        $rejectedIssue_count = Issue::where('user_id', $userId)
                    ->where('status', 2)
                    ->count();

        $totalIssue_count = Issue::where('user_id', $userId)
                    ->count();
        
        $issueCount = [
            'pending'=>$pendingIssue_count,
            'solved'=>$solvedIssue_count,
            'rejected'=>$rejectedIssue_count,
            'total'=>$totalIssue_count
        ];
 
        $issueDetails = Issue::with('raiser')->where('id',$issueId)->get()->first();
        return view('issue-details',['issueDetails'=>$issueDetails, 'issueCount'=>$issueCount]);
    }

    //Approve Issue
    public function approveIssue(Request $request){
        $request->validate([
            'issueID'=>'required|integer'
        ]);
        $issueId= $request->issueID;
        $issueComment = $request->comment;
        $updateIssue = DB::table('issues')
              ->where('id', $issueId)
              ->update(['status' => 1, 'comment'=>$issueComment]);
        alert()->success('অভিযোগটি সমাধান হয়েছে', 'ধন্যবাদ!')->persistent("ঠিক আছে")->autoclose(5000);
        return Redirect::to('issue-solved');
    }

      //Reject Issue
      public function rejectIssue(Request $request){
        $request->validate([
            'issueID'=>'required|integer'
        ]);
        $issueId= $request->issueID;
        $issueComment = $request->comment;
        $updateIssue = DB::table('issues')
              ->where('id', $issueId)
              ->update(['status' => 2, 'comment'=>$issueComment]);
        return Redirect::to('issue-rejected');
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

    public function exportAllIssues() 
    {
        return Excel::download(new IssueExport, date('Y-m-d').'-issues.xlsx');
    }
}
