<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function prompts()
    {
        return $this->belongsToMany(Prompt::class);
    }
}
