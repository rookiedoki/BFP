<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blotter extends Model
{
  use HasFactory, SoftDeletes;
  protected $fillable = [
    'complainant',
    'respondent',
    'resCA',
    'comCA',
    'victim',
    'location',
    'date',
    'time',
    'details',
    'proof',
    'phone_number1',
    'phone_number2',
    'action',
    'status',
    'for_reason',
    'datesum',
    'timesum',
    'delsum',
    'delsum2'
  ];

}
