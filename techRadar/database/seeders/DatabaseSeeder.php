<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Uid\Ulid;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Role::create([
        //     'id' => Ulid::generate(),
        //     'name' => 'OWNER',
        //     'description' => 'Company Owner'
        // ]);

        

        DB::table('permissions')->insert([
            ['id' => Ulid::generate(),'name' => 'Manage User Permission', 'description' => 'Manage User Permission'],
            ['id' => Ulid::generate(),'name' => 'Edit Company', 'description' => 'Edit Company'],
            ['id' => Ulid::generate(),'name' => 'Delete Company', 'description' => 'Delete Company'],
            ['id' => Ulid::generate(),'name' => 'Add Company User', 'description' => 'Add Company User'],
            ['id' => Ulid::generate(),'name' => 'Read Company User', 'description' => 'Read Company User'],
            ['id' => Ulid::generate(),'name' => 'Edit Company User', 'description' => 'Edit Company User'],
            ['id' => Ulid::generate(),'name' => 'Delete Company User', 'description' => 'Delete Company User'],
            ['id' => Ulid::generate(),'name' => 'Add Category Technology', 'description' => 'Add Category Technology'],
            ['id' => Ulid::generate(),'name' => 'Read Category Technology', 'description' => 'Read Category Technology'],
            ['id' => Ulid::generate(),'name' => 'Edit Category Technology', 'description' => 'Edit Category Technology'],
            ['id' => Ulid::generate(),'name' => 'Delete Category Technology', 'description' => 'Delete Category Technology'],
            ['id' => Ulid::generate(),'name' => 'Add Technology', 'description' => 'Add Technology'],
            ['id' => Ulid::generate(),'name' => 'Read Technology', 'description' => 'Read Technology'],
            ['id' => Ulid::generate(),'name' => 'Edit Technology', 'description' => 'Edit Technology'],
            ['id' => Ulid::generate(),'name' => 'Delete Technology', 'description' => 'Delete Technology'],
            ['id' => Ulid::generate(),'name' => 'Read Change Log', 'description' => 'Add Change Log'],
        ]);


    }
}
