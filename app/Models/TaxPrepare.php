<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaxPrepare extends Model
{
    use HasFactory;
    use SoftDeletes;



    // one to many relation with tax_prepare_service
    public function services()
    {
        return $this->hasMany(TaxPrepareService::class);
    }


    // one to many relation with tax_prepare_price
    public function prices()
    {
        return $this->hasMany(TaxPreparePrice::class);
    }

    // one to many relation with tax_prepare_price
    public function availibilities()
    {
        return $this->hasMany(TaxPrepareAvailability::class);
    }


    public function certifications()
    {
        return $this->hasMany(TaxPrepareCertification::class);
    }
}
