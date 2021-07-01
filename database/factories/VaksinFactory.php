<?php

namespace Database\Factories;

use App\Models\Vaksin;
use Illuminate\Database\Eloquent\Factories\Factory;

class VaksinFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vaksin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'jenis_pasien'  => $gender,
            'nama_lengkap'  => $this->faker->name($gender),
            'tanggal_lahir' => $this->faker->date(),
            'no_handphone' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),
            'lokasi_pemeriksaan' => $this->faker->randomElement(['RS Siloam', 'RS Lavayette', 'RS Basuki Rahmat'])
        ];
    }
}
