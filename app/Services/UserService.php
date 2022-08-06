<?php

namespace App\Services;

use App\Notifications\AccountCreateNotification;
use App\Repository\UserRepositoryInterface;
use App\Scopes\Globals\ActiveScope;
use App\User;
use App\Utils\AppConst;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\This;
use Spatie\Permission\Models\Role;

class UserService
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepository;
    /**
     * @var Role
     */
    private $role;
    /**
     * @var User
     */
    private $user;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository, Role $role,User $user)
    {
        $this->userRepository = $userRepository;
        $this->role = $role;
        $this->user = $user->withoutGlobalScope(ActiveScope::class);
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getUsers($perPage=10,$page, $request, $paginate=false)
    {
        $user = $this->user->whereHas('roles',function ($q){
            $q->where('name',AppConst::CUSTOMER);
        });
        $total = 0;
        if($paginate == false){
            $user =$user->orderBy('id','desc')->get();
            $total = $user->count();
        }else{
            $user =$user->orderBy('id','desc');
            $total = $user->get()->count();
            $user =$user->paginate($page);
        }
        return ['result'=>$user,'total'=>$total];
    }

    /**
     * @param $request
     * @param $user
     * @return array
     */
    public function createUser($request,$user)
    {
        $password = Str::random(8);
        $user = $this->userRepository->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($password),
            'email_verified_at' => Carbon::now(),
            'created_by'=>$user->id
        ]);
        return ['status'=>'success','result'=>['user'=>$user,'password'=>$password]];
    }

    /**
     * @param $request
     * @param $user
     * @return array
     */
    public function editProfile($request,$user)
    {
        if ($request->has('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destination = public_path('/assets/users/profile');
            $allowedExtensions = config('app.allowed_extensions');
            $fileExtension=$file->getClientOriginalExtension();
            $checkFileExtension = in_array($fileExtension,$allowedExtensions);
            if (!$checkFileExtension){
                return ['status'=>'fail','result'=>$user];
            }
            if ($user->image != null){
                $imagePtah=public_path().'/'.$user->image;
                if (file_exists($imagePtah)){
                    unlink($imagePtah);
                }
            }
            $file->move($destination,$fileName);
            $user->update([
               'name'=>$request->name,
               'image'=>'assets/users/profile/'.$fileName
            ]);
        }else{
            $user->update([
                'name'=>$request->name
            ]);
        }
        return ['status'=>'success','result'=>$user];
    }

    /**
     * @param $request
     * @param $user
     * @return array
     */
    public function editPassword($request,$user){
        $user->update([
            'password'=>Hash::make($request->password)
        ]);
        return ['status'=>'success','result'=>$user];
    }

    /**
     * @param $name
     * @return mixed
     */
    public function getRoleName($name)
    {
        return $this->role->where('name',$name)->first()->name;
    }

    /**
     * @param $attribute
     * @param $value
     * @return mixed
     */
    public function getRole($attribute,$value)
    {
        return $this->role->where($attribute,$value)->first();
    }

    /**
     * @param $attributes
     * @return bool
     */
    public function addOrUpdateUserSeeder(array $attributes)
    {
        return DB::table('users')->updateOrInsert(
            [
                'email'=>$attributes['email']
            ],
            [
                'name'=>$attributes['name'],
                'email'=>$attributes['email'],
                'password'=>Hash::make($attributes['password']),
                'email_verified_at'=>Carbon::now(),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
                'image'=>'assets/users/profile/default.png'
            ]
        );
    }
}
