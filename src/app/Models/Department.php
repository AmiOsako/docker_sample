<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Departmentモデル
 */
class Department extends Model
{
    use HasFactory;

    /**
     * Contactとのリレーション
     * @return HasMany
     */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
}
