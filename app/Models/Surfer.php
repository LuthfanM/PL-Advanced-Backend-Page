<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surfer extends Model
{
    use HasFactory;

    protected $primaryKey = 'surfer_id';

    protected $fillable = [
        'name',
        'country',
        'email',
        'phone_number',
        'id_card'
    ];

    // One Surfer has many Surfing Experiences
    public function surfingExperiences()
    {
        return $this->hasMany(SurfingExperience::class, 'surfer_id');
    }
}
