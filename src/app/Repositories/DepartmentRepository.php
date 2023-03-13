<?php

namespace App\Repositories;

use App\Models\Department;
use Illuminate\Support\Collection;

/**
 * DBへアクセスする処理
 */
class DepartmentRepository implements DepartmentRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function department():Collection
    {
        return Department::all();
    }
}
