<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AiModel extends Model
{
    public function prompts() {
        return $this->belongsToMany(Prompt::class);
    }
}
