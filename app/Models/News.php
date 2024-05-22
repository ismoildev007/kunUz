<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
      'category_id',
      'title',
      'photo',
      'content',
      'short_content',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
