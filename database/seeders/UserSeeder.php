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
        $abas = User::create([
            'name' => 'abas',
            'email' => 'abas@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $abas->assignRole('siswa');

        $aflah = User::create([
            'name' => 'aflah',
            'email' => 'aflah@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $aflah->assignRole('siswa');

        $wahyu = User::create([
            'name' => 'wahyu',
            'email' => 'wahyu@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $wahyu->assignRole('siswa');

        $akhdan = User::create([
            'name' => 'akhdan',
            'email' => 'akhdan@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $akhdan->assignRole('siswa');

        $asya = User::create([
            'name' => 'asya',
            'email' => 'asya@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $asya->assignRole('siswa');

        $ania = User::create([
            'name' => 'ania',
            'email' => 'ania@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $ania->assignRole('siswa');

        $derren = User::create([
            'name' => 'derren',
            'email' => 'derren@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $derren->assignRole('siswa');

        $rully = User::create([
            'name' => 'rully',
            'email' => 'rully@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $rully->assignRole('siswa');

        $dimasaditya = User::create([
            'name' => 'dimasaditya',
            'email' => 'dimasaditya@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $dimasaditya->assignRole('siswa');

        $dimasfeb = User::create([
            'name' => 'dimasfeb',
            'email' => 'dimasfeb@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $dimasfeb->assignRole('siswa');

        $eka = User::create([
            'name' => 'eka',
            'email' => 'eka@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $eka->assignRole('siswa');

        $erni = User::create([
            'name' => 'erni',
            'email' => 'erni@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $erni->assignRole('siswa');


        $faiq = User::create([
            'name' => 'faiq',
            'email' => 'faiq@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $faiq->assignRole('siswa');

        $arifin = User::create([
            'name' => 'arifin',
            'email' => 'arifin@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $arifin->assignRole('siswa');


        $fiqi = User::create([
            'name' => 'fiqi',
            'email' => 'fiqi@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $fiqi->assignRole('siswa');

        $rifal = User::create([
            'name' => 'rifal',
            'email' => 'rifal@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $rifal->assignRole('siswa');

        $taufiq = User::create([
            'name' => 'taufiq',
            'email' => 'taufiq@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $taufiq->assignRole('siswa');

        $nay = User::create([
            'name' => 'nay',
            'email' => 'nay@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $nay->assignRole('siswa');

        $rafly = User::create([
            'name' => 'rafly',
            'email' => 'rafly@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $rafly->assignRole('siswa');

        $rizka = User::create([
            'name' => 'rizka',
            'email' => 'rizka@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $rizka->assignRole('siswa');

        $shofi = User::create([
            'name' => 'shofi',
            'email' => 'shofi@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $shofi->assignRole('siswa');

        $wafa = User::create([
            'name' => 'wafa',
            'email' => 'wafa@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $wafa->assignRole('siswa');

        $zunaldo = User::create([
            'name' => 'zunaldo',
            'email' => 'zunaldo@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'siswa'
        ]);
        $zunaldo->assignRole('siswa');

        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('entahlah'),
            'role' => 'admin'
        ]);
        $admin->assignRole('admin');
    }
}
