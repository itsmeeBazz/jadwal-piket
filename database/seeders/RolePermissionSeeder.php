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
        Permission::create(['name' => 'tambah-siswa']);
        Permission::create(['name' => 'edit-siswa']);
        Permission::create(['name' => 'hapus-siswa']);
        // Permission::create(['name' => 'lihat-siswa']);

        Permission::create(['name' => 'tambah-piket']);
        Permission::create(['name' => 'edit-piket']);
        Permission::create(['name' => 'hapus-piket']);
        Permission::create(['name' => 'lihat-piket']);

        Permission::create(['name' => 'tambah-jadwal']);
        Permission::create(['name' => 'edit-jadwal']);
        Permission::create(['name' => 'hapus-jadwal']);
        Permission::create(['name' => 'lihat-jadwal']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'siswa']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-siswa');
        $roleAdmin->givePermissionTo('edit-siswa');
        $roleAdmin->givePermissionTo('hapus-siswa');
        $roleAdmin->givePermissionTo('tambah-piket');
        $roleAdmin->givePermissionTo('edit-piket');
        $roleAdmin->givePermissionTo('hapus-piket');
        $roleAdmin->givePermissionTo('lihat-piket');
        $roleAdmin->givePermissionTo('tambah-jadwal');
        $roleAdmin->givePermissionTo('edit-jadwal');
        $roleAdmin->givePermissionTo('hapus-jadwal');
        $roleAdmin->givePermissionTo('lihat-jadwal');

        $roleSiswa = Role::findByName('siswa');
        // $roleSiswa->givePermissionTo('lihat-siswa');
        $roleSiswa->givePermissionTo('lihat-jadwal');
        $roleSiswa->givePermissionTo('lihat-piket');
        $roleSiswa->givePermissionTo('tambah-piket');
        $roleSiswa->givePermissionTo('edit-piket');
    }
}
