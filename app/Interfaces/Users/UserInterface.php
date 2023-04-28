<?php
namespace App\Interfaces\Users;

interface UserInterface
{
    public function register();

    public function search();

    public function update();

    public function modify();

    public function deleteUser();

    public function getMyProfile();
}
?>