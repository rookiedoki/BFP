<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestCertificate extends Model
{
  use HasFactory;
  protected $fillable = [
    'admin_resident_id',
    'fullname',
    'docType',
    'paymentMethod',
    'contact_number',
    'referenceNumber',
    'purpose',
    'otherPurpose',
    'screenshot',
    'status',
    'status2',
    'notified',
    'remarks',
    'orNum',
    'cnNum',
    'resident_image',
  ];

  public function admin_resident()
  {
    return $this->belongsTo(AdminResidents::class);
  }
}
