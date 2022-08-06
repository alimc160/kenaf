<?php

namespace App\Repository;

use Illuminate\Support\Collection;

interface UserRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all() : Collection;

    /**
     * @param string $email
     * @return mixed
     */
    public function getUserByEmail(string $email);

    /**
     * @param int $limit
     * @return mixed
     */
    public function getUsers(int $limit);
}
