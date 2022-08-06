<?php

namespace App\Repository\Eloquent;

use App\User;
use App\Repository\UserRepositoryInterface;
use App\Utils\AppConst;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model->all();
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail(string $email)
    {
        return $this->model->where('email',$email)->first();
    }

    /**
     * @param int $limit
     * @return mixed
     */
    public function getUsers(int $limit)
    {
       return $this->model->whereHas('roles',function ($q){
           $q->where('name',AppConst::CUSTOMER);
       })->paginate($limit);
    }
}
