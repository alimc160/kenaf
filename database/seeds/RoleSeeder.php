<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [config('app.admin'),config('app.customer')];
        foreach ($roles as $role){
            DB::table('roles')->insert([
                    'name'=>$role,
                    'guard_name'=>'web',
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]
            );
        }
    }
}
