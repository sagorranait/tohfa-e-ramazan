<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'division_id'
    ];

    public function division() {
        return $this->belongsTo(Division::class);
    }

    public function districtWiseScheduleSetting() {
        return $this->hasMany(DistrictWiseScheduleSetting::class);
    }
}
