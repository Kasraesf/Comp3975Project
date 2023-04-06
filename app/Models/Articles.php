<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $fillable = ['Title', 'Content', 'ImageURL', 'newsletter_id'];

    public function newsletter()
    {
        return $this->belongsTo(Newsletter::class);
    }
}