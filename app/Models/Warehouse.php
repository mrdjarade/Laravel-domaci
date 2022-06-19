<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    protected $fillable = ['city', 'address', 'capacity', 'manager', 'phone'];
    protected $with = ['items'];
    public function items()
    {
        return $this->hasMany(StorageUnit::class);
    }
}
