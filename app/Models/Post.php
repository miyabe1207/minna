<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'disease_name',
        'symptoms_id',
        'therapeutic_method',
        'hospital_name',
        'doctor_name',
    ];
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
        return $this::with('symptoms')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function symptoms()
    {
        return $this->belongsTo(Symptom::class);
    }
}