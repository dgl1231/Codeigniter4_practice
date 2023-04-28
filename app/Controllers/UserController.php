<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Services\UserService;

class UserController extends ResourceController
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        $model = new \App\Models\UserModel();
        $users = $model->findAll();

        return $this->respond($users);
    }

    public function show()
    {

    }

    // Method   : POST
    // Url      : /register
    public function create()
    {
        $model = new \App\Models\UserModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password')
        ];

        try {
            $this->userService->register($data);
            $response = [
                'status' => 201,
                'error' => null,
                'messages' => [
                    'success' => 'User created successfully'
                ]
            ];

            return $this->respondCreated($response);
        } catch (\Exception $e) {
            return $this->respond($e->getMessage(), 500);
        }
    }

    // Method   : PUT
    // Url      : /user/{id} 
    public function update()
    {

    }

    // Method   : DELETE
    // Url      : /user/{id} 
    public function delete()
    {

    }

    // Method   : GET
    // Url      : /user/me
    public function getProfile()
    {

    }
}
?>