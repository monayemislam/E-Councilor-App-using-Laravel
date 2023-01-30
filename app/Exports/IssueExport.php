<?php

namespace App\Exports;

use App\Models\Issue;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IssueExport implements FromCollection,WithHeadings
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

    public function headings():array{
        return [
            'ISSUE ID',
            'Name',
            'Issue Title',
            'Issue Description',
            'Created At',
            'Updated At'
        ];
    }
    
}
