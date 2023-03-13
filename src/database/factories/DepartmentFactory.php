<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    private static $sequence = 1;

    /**
     * Departmentのデータ
     * @return array
     */
    public function definition()
    {
        return [
            'name' =>sprintf('部署 %d', self::$sequence++),
            'manager_name' => $this->faker->name(),
        ];
    }
}
