<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prompt extends Model
{
    public function ai_models() {
        return $this->belongsToMany(AiModel::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}
