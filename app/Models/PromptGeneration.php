<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromptGeneration extends Model
{
    use HasFactory;
    
     protected $fillable = [
        'user_id',
        'model_name',
        'positive_prompt',
        'negative_prompt',
        'samples',
        'steps',
    ];

    public function generatedImages()
    {
        return $this->hasMany(GeneratedImage::class);
    }
}
