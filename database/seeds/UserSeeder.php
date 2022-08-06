<?php

use App\Services\UserService;
use App\Utils\AppConst;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * @var UserService
     */
    private $userService;

    public function __construct(User $user)
    {
//        $this->userService = $userService;
        $this->user = $user;
        $this->role = new Role;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = config('app.users');
        $role=$this->role->where('name',config('app.admin'))->first();
        $adminAttributes = config('app.admin_attr');
        DB::table('users')->updateOrInsert(
            [
                'email'=>$adminAttributes['email']
            ],
            [
                'name'=>$adminAttributes['name'],
                'email'=>$adminAttributes['email'],
                'password'=>Hash::make($adminAttributes['password']),
                'email_verified_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'image'=>'assets/users/profile/default.png'
            ]
        );
        $adminUser = $this->user->email($adminAttributes['email'])->first();
        $adminUser->assignRole($role);
        foreach ($users as $user){
            $role=$this->role->where('name',config('app.customer'))->first();
            DB::table('users')->updateOrInsert(
                [
                    'email'=>$user['email']
                ],
                [
                    'name'=>$user['name'],
                    'email'=>$user['email'],
                    'password'=>Hash::make($user['password']),
                    'email_verified_at'=>Carbon::now(),
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                    'image'=>'assets/users/profile/default.png'
                ]
            );
            $getUser = $this->user->email($user['email'])->first();
            $getUser->assignRole($role);
        }

    }
}
