<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\UploadUserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function __construct(
        protected UserService $userService,
    ) {
    }

    public function upload(UploadUserRequest $request, string $id)
    {
        $data = [
            'photo_url' => $request->photo->store('users')
        ];

        $this->userService->update($id, $data);
        return redirect()->back();
    }

    public function update(UpdateUserRequest $request, string $id)
    {
        $this->userService->update($id, $request->validated());
        return redirect()->back();
    }
}
