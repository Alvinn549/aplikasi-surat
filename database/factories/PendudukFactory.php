<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->nik(),
            'nama' => $this->faker->name(),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            // 'dusun' => rand(1, 5),
            // 'rw' => rand(1, 3),
            // 'rt' => rand(1, 3),
            'alamat_lengkap' => $this->faker->address(),
            'kebangsaan' => $this->faker->state(),
            'agama' => $this->faker->randomElement(['Islam', 'Hindu', 'Budha', 'Kristen', 'Khatolik', 'Konghuchu']),
            'pekerjaan' => $this->faker->randomElement(['Pegawai', 'Buruh', 'Petani']),
            'status_perkawinan' => $this->faker->randomElement(['Menikah', 'Lajang']),
            'pendidikan_dalam_kk' => $this->faker->randomElement(['SD', 'SMP Sederajat', 'SMA Sederajat', 'S1 Sederajat']),
        ];
    }
}
