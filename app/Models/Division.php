<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'country_id'
    ];

    public function country() {
        return $this->belongsTo(Country::class);
    }

    public function districts() {
        return $this->hasMany(District::class);
    }
}
