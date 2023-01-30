<?php

namespace App\Exports;

use App\Models\Issue;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class IssueExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $userInfo = Auth::user();
        return Issue::join('users','users.id','=','issues.user_id')->where('users.area_number','=',$userInfo->area_number)
                                                                   ->get([
                                                                   'issues.id',
                                                                   'users.name',
                                                                   'issues.title',
                                                                   'issues.description',
                                                                   'issues.created_at',
                                                                   'issues.updated_at'
                                                                ]);
    }
    
}
