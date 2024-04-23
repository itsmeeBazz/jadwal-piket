<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abas = User::createOrUpdate([
            'name' => 'abas',
            'email' => 'abas@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $abas->assignRole('siswa');

        $aflah = User::create([
            'name' => 'aflah',
            'email' => 'aflah@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $aflah->assignRole('siswa');

        $wahyu = User::create([
            'name' => 'wahyu',
            'email' => 'wahyu@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $wahyu->assignRole('siswa');

        $akhdan = User::create([
            'name' => 'akhdan',
            'email' => 'akhdan@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $akhdan->assignRole('siswa');

        $asya = User::create([
            'name' => 'asya',
            'email' => 'asya@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $asya->assignRole('siswa');

        $ania = User::create([
            'name' => 'ania',
            'email' => 'ania@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $ania->assignRole('siswa');

        $derren = User::create([
            'name' => 'derren',
            'email' => 'derren@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $derren->assignRole('siswa');

        $rully = User::create([
            'name' => 'rully',
            'email' => 'rully@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $rully->assignRole('siswa');

        $dimasaditya = User::create([
            'name' => 'dimasaditya',
            'email' => 'dimasaditya@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $dimasaditya->assignRole('siswa');

        $dimasfeb = User::create([
            'name' => 'dimasfeb',
            'email' => 'dimasfeb@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $dimasfeb->assignRole('siswa');

        $eka = User::create([
            'name' => 'eka',
            'email' => 'eka@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $eka->assignRole('siswa');

        $erni = User::create([
            'name' => 'erni',
            'email' => 'erni@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $erni->assignRole('siswa');


        $faiq = User::create([
            'name' => 'faiq',
            'email' => 'faiq@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $faiq->assignRole('siswa');

        $arifin = User::create([
            'name' => 'arifin',
            'email' => 'arifin@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $arifin->assignRole('siswa');


        $fiqi = User::create([
            'name' => 'fiqi',
            'email' => 'fiqi@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $fiqi->assignRole('siswa');

        $rifal = User::create([
            'name' => 'rifal',
            'email' => 'rifal@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $rifal->assignRole('siswa');

        $taufiq = User::create([
            'name' => 'taufiq',
            'email' => 'taufiq@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $taufiq->assignRole('siswa');

        $nay = User::create([
            'name' => 'nay',
            'email' => 'nay@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $nay->assignRole('siswa');

        $rafly = User::create([
            'name' => 'rafly',
            'email' => 'rafly@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $rafly->assignRole('siswa');

        $rizka = User::create([
            'name' => 'rizka',
            'email' => 'rizka@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $rizka->assignRole('siswa');

        $shofi = User::create([
            'name' => 'shofi',
            'email' => 'shofi@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $shofi->assignRole('siswa');

        $wafa = User::create([
            'name' => 'wafa',
            'email' => 'wafa@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $wafa->assignRole('siswa');

        $zunaldo = User::create([
            'name' => 'zunaldo',
            'email' => 'zunaldo@gmail.com',
            'password' => bcrypt(12345678),
        ]);
        $zunaldo->assignRole('siswa');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('entahlah'),
        ]);
        $admin->assignRole('admin');
    }
}
