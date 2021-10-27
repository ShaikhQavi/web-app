<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    

    public function topics()
    {
        return $this->hasMany(Topic::class, 'category_id');
    }
    
    use HasFactory;
}
