<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Contactモデル
 */
class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'department_id', 'name', 'email', 'content'
    ];

    /**
     * Departmentとのリレーション
     * @return BelongsTo
     */
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
