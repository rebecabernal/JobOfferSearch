<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model

{
    use HasFactory;

    protected $fillable =
    [
        'offers_id',
        'news'
    ];

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }

}
