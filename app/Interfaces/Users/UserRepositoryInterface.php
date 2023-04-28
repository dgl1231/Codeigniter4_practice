<?php
namespace App\Interfaces\Users;

interface UserRepositoryInterface
{
    public function findAll();

    public function findById(string $email);

    public function findByEmail(string $email);

    public function create(array $data);

    public function update(int $id, array $data);

    public function delete(int $id);

}

?>