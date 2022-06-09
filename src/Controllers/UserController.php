<?php

namespace ConfrariaWeb\RealEstate\Controllers;

use App\Http\Controllers\Controller;
use ConfrariaWeb\Acl\Services\RoleService;
use ConfrariaWeb\RealEstate\Requests\StoreUserRequest;
use ConfrariaWeb\User\Services\UserService;

class UserController extends Controller
{

    public $roleService;
    public $userService;

    public function __construct(
        RoleService $roleService, 
        UserService $userService
    )
    {
        $this->roleService = $roleService;
        $this->userService = $userService;
        $this->userService->scopeOfColumn('account_id', 1);
    }

    public function index()
    {
        $users = $this->userService->all();
        return view('real-estate::users.index', compact('users'));
    }

    public function create()
    {
        $roles = $this->roleService->pluck();
        return view('real-estate::users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $user = $this->userService->create($request->all());
        return redirect()->route('dashboard.users.edit', [$user]);
    }

    public function show($id)
    {
        $user = $this->userService->find($id);
        abort_unless($user, 404);
        return view('real-estate::users.show', compact('user'));
    }

    public function edit($id)
    {
        $roles = $this->roleService->pluck();
        $user = $this->userService->find($id);
        abort_unless($user, 404);
        return view('real-estate::users.edit', compact('user', 'roles'));
    }
}
