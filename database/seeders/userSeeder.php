<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
                'role' => 'wni',
                'tempat' => 'tempat',
                'ttl' => 'ttl',
                'role' => 'single',
                'role' => 'agama',
                'alamat' => 'alamat',
                'kota' => 'kota',
                'kecamatan' => 'kecamatan',
                'kelurahan' => 'kelurahan',
                'rtrw' => 'rtrw',
                'kodepos' => 'kodepos',
                'hp' => 'hp',
                'role' => 'single',
                'telp' => 'telp',
                'jmltanggungan' => 'jmltanggungan',
                'pendapatanperbulan' => 'pendapatanperbulan',
                'pengusahakenapajak' => 'pengusahakenapajak',
                'npwp' => 'npwp',
                'remember_token' => Str::random(10),
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
