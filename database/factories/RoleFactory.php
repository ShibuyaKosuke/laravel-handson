<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        ];
    }

    public function admin()
    {
        return $this->state(function (array $attributes) {
            return [
                'id' => 1,
                'name' => 'Admin',
            ];
        });
    }

    public function manager()
    {
        return $this->state(function (array $attributes) {
            return [
                'id' => 2,
                'name' => 'Manager',
            ];
        });
    }

    public function staff()
    {
        return $this->state(function (array $attributes) {
            return [
                'id' => 3,
                'name' => 'Staff',
            ];
        });
    }
}
