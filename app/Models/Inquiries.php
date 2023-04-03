<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'subject',
        'message',
    ];

    public function scopeFilter($query, array $filters){

        if($filters['search'] ?? false){
            $query->where('name', 'like', '%' . request('search') . '%');
            //    ->orwhere('age', 'like', '%' . request('search') . '%');
            //    ->orWhere('work_status', 'like', '%' . request('search') . '%');
               
        }

    }
}
