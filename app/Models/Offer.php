<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'title',
        'enterprise',
        'description',
        'status',
    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}