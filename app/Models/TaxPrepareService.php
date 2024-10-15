<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxPrepareService extends Model
{
    use HasFactory;
    use SoftDeletes;

     // fillable fields
     protected $fillable = [

        'tax_prepare_id',
        'category_id',




    ];
}
