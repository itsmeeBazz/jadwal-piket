<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah siswa']);
        Permission::create(['name' => 'edit siswa']);
        Permission::create(['name' => 'hapus siswa']);
        Permission::create(['name' => 'lihat siswa']);

        Permission::create(['name' => 'tambah piket']);
        Permission::create(['name' => 'edit piket']);
        Permission::create(['name' => 'hapus piket']);
        Permission::create(['name' => 'lihat piket']);

        Permission::create(['name' => 'tambah jadwal']);
        Permission::create(['name' => 'edit jadwal']);
        Permission::create(['name' => 'hapus jadwal']);
        Permission::create(['name' => 'lihat jadwal']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo(Permission::all());

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('lihat siswa');
        $roleUser->givePermissionTo('lihat jadwal');
        $roleUser->givePermissionTo('lihat piket');
        $roleUser->givePermissionTo('tambah piket');
        $roleUser->givePermissionTo('edit piket');
    }
}
