<?php

namespace App\Repository\Eloquent;

use App\Repository\EntityRepositoryInterface;
use App\User;

class EntityRepository extends BaseRepository implements EntityRepositoryInterface
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
}
