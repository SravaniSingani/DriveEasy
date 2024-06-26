<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
 
    protected $fillable = [
        'brandName',
        'brandImg'
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
