<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'primer_nombre' => $this->faker->firstName,
            'segundo_nombre' => $this->faker->firstName,
            'primer_apellido' => $this->faker->lastName,
            'segundo_apellido' => $this->faker->lastName,
            'direccion' => $this->faker->address,
            'ciudad' => $this->faker->city,
            'estado' => $this->faker->state,
            'codigo_postal' => $this->faker->postcode,
            'telefono' => $this->faker->phoneNumber,
            'telefono2' => $this->faker->phoneNumber,
        ];
    }
}
