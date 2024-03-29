<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $table = 'registrations';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function package()
    {
    	return $this->belongsTo(Package::class, 'package_id');
    }
}
