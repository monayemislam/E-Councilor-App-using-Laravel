<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Issue extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title','description'];

    public function raiser(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
