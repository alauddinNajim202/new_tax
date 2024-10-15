<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxPrepareCertification extends Model
{
    use HasFactory;
    use SoftDeletes;

    // fillable fields
    protected $fillable = [
        'certification_file',
        'tax_prepare_id',
    ];






    // one to many relation with tax_prepare
    public function taxPrepare()
    {
        return $this->belongsTo(TaxPrepare::class);
    }





}
