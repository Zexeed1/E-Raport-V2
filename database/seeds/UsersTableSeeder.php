<?php

use App\Admin;
use App\User;
use App\Sekolah;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'kurikulum',
            'password' => bcrypt('admin123456'),
            'role' => '1',
            'status' => true,
        ]);

        Admin::create([
            'user_id' => '1',
            'nama_lengkap' => 'BAGIAN KURIKULUM',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '1998-05-30',
            'email' => 'admin@mail.com',
            'nomor_hp' => '085232077932',
            'avatar' => 'default.png',
        ]);
        
        sekolah::create([
            'nama_sekolah'=>'SMPIT FUTURE ISLAMIC SCHOOL',
            'npsn' => '10495152',
            'nss' => '420/PP.4/X/2008/7637',
            'kode_pos' => '28292',
            'nomor_telpon' => '081371929161',
            'alamat' => 'Jl. Tuanku Tambusai Jl. Nangka No.Ujung, Labuh Baru Bar., Kec. Payung Sekaki, Kota Pekanbaru, Riau',
            'website' => 'https://www.facebook.com/p/Future-Islamic-School-100063484513335/',
            'email' => 'fis@school.ac.id',
            'logo' => 'logo.png',
            'kepala_sekolah' => 'Rahmansyah, M.Pd',
            'nip_kepala_sekolah' => '198203301990031007',
        ]);
    }
}
