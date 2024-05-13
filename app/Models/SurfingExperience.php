<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurfingExperience extends Model
{
    use HasFactory;

    protected $primaryKey = 'experience_id';

    protected $fillable = [
        'surfer_id',
        'visit_date',
        'desired_board',
        'experience'
    ];

    public function surfer()
    {
        return $this->belongsTo(Surfer::class, 'surfer_id');
    }
}
