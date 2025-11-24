<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPlans extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plants_pricings_id',

    ];

    public function plantsPricing()
    {
        return $this->belongsTo(PlantsPricing::class, 'plants_pricings_id');
    }
}
