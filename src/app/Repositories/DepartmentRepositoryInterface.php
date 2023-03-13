<?php

namespace App\Repositories;

use App\Models\Department;
use Illuminate\Support\Collection;

interface DepartmentRepositoryInterface
{
    /**
     * 部署のデータを取得
     * @return Collection
     */
    public function department():Collection;
}
