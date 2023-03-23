<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon; 
use App\Models\User;
use App\Models\Penduduk;
use App\Models\ProfilDesa;
use App\Models\Dusun;
use App\Models\Rw;
use App\Models\Rt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin Pertama',
            'username' => 'Admin1',
            'email' => 'admin1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'User Pertama',
            'username' => 'User1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('password'),
            'role' => 'kepala_desa'
        ]);

        User::factory(10)->create();

        ProfilDesa::create([
            'nama_desa' => 'Semanten',
            'email_desa' => 'semanten@gmail.com',
            'alamat_kantor' => 'Semanten, Kec Pacitan',
            'nomor_surat' => '1241',
            'nama_kepala_desa' => 'Syariffudin Hidayat',
            'telp' => '089696764576',
            'website_desa' => 'semanten.pacitankab.go.id',
        ]);

        Dusun::factory(5)->create();

        Rw::factory(3)->create()->each(function($rw) {
            $dsn = Dusun::inRandomOrder()->first();

            $rw->update([
                'dusun_id' => $dsn->id
            ]);
        });

        Rt::factory(3)->create()->each(function($rt) {
            $rw = Rw::inRandomOrder()->first();

            $rt->update([
                'rw_id' => $rw->id
            ]);
        });

        Penduduk::factory(50)->create()->each(function($penduduk) {

            $dsn = Dusun::inRandomOrder()->first();
            $rw = Rw::inRandomOrder()->first();
            $rt = Rt::inRandomOrder()->first();
            $penduduk->update([
                'umur' => Carbon::parse($penduduk->tanggal_lahir)->diffInYears(),
                'dusun_id' => $dsn->id,
                'rw_id' => $rw->id,
                'rt_id' => $rt->id,
            ]);
        });


        // Dusun::factory(5)->create()->each(function($dusun) {
        //     Rw::factory(1)->create(['dusun_id' => $dusun->id])->each(function($rw) {
        //         Rt::factory(1)->create(['rw_id' => $rw->id ]);
        //     });
        // });
    }
}
