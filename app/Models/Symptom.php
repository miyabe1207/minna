<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;
    
    public function posts()   
    {
        return $this->hasMany(Post::class);  
    }
    
    public function getBysymptoms(int $limit_count = 5)
    {
        return $this->posts()->with('symptoms')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
