<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'bloguer']);
        $role3 = Role::create(['name' => 'studio']);
        $role4 = Role::create(['name' => 'artista']);
        $role5 = Role::create(['name' => 'enterprise']);
        $role6 = Role::create(['name' => 'afiliate']);
        $role7 = Role::create(['name' => 'moderator']);
        $role8 = Role::create(['name' => 'editor']);
        $role9 = Role::create(['name' => 'root']);
        $role10 = Role::create(['name' => 'developer']);
        $role11 = Role::create(['name' => 'fancy']);
        $role12 = Role::create(['name' => 'report']);
        $role13 = Role::create(['name' => 'guest']);

        Permission::create(['name' => 'cpanel.dashboard'])->syncRoles([$role1,$role2,$role3,$role4,$role5,$role6,$role7,$role8,$role9,$role10,$role11,$role12,$role13]);
        Permission::create(['name' => 'cpanel.contacts'])->syncRoles([$role1,$role9,$role4,$role11]);
        Permission::create(['name' => 'cpanel.contacts.index'])->syncRoles([$role1,$role9,$role4,$role11]);
        

    }
}
