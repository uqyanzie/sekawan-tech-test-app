<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $uuidForManager1 = Str::uuid();
        $uuidForManager2 = Str::uuid();

        User::factory()->createMany([
            [
                'id' => Str::uuid(),
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => ('admin123'),
                'role' => 'admin'
            ],
            [
                'id' => $uuidForManager1,
                'name' => 'Bambang Aji Putra',
                'email' => 'bambangaji@mail.com',
                'password' => ('bambang123'),
                'position' => 'Kepala Departemen',
                'role' => 'user'
            ],
            [
                'id' => $uuidForManager2,
                'name' => 'Ilham Surya Putra',
                'email' => 'ilhamsuryap@mail.com',
                'password' => ('ilhamsurya123'),
                'position' => 'Kepala Cabang',
                'role' => 'user'
            ],
        ]);

        User::factory()->createMany([
            [
                'id' => Str::uuid(),
                'name' => 'Kurnaedi Ahmad Wijaya',
                'email' => 'kurnaediahmad@mail.com',
                'password' => ('kurnaedi123'),
                'position' => 'Kepala Divisi',
                'role' => 'user',
                'direct_supervisor_id' => $uuidForManager1
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Muhammad Harun Al Rasyid',
                'email' => 'harunmuhammad@mail.com',
                'password' => ('harun12345'),
                'position' => 'Manajer Operasional',
                'role' => 'user',
                'direct_supervisor_id' => $uuidForManager2
            ],
            [
                'id' => Str::uuid(),
                'name' => 'Rizky Fadhillah ',
                'email' => 'rizkyfadh@mail.com',
                'password' => ('rizky12345'),
                'position' => 'Manajer Proyek',
                'role' => 'user',
                'direct_supervisor_id' => $uuidForManager1
            ],
        ]);
    }
}
