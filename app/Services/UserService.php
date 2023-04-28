<?php

namespace App\Services;

use App\Interfaces\Users\UserInterface;
use App\Interfaces\Users\UserRepositoryInterface;

class UserService implements UserInterface
{
    protected $userRepo;
    public function __construct(UserRepositoryInterface $userRepo)
    {
        $this->userRepo = $userRepo;

    }
    public function register(array $data)
    {
        $this->userRepo->create($data);
    }
    public function search()
    {

    }

    public function update()
    {

    }

    public function modify()
    {

    }

    public function deleteUser()
    {

    }

    public function getMyProfile()
    {

    }
}
?>