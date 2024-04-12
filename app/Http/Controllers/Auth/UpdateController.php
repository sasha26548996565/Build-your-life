<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Http\Requests\Auth\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function renderPage(): View
    {
        return view('auth.update');
    }

    public function update(UpdateRequest $request): RedirectResponse
    {
        $params = $request->validated();

        $user = User::findOrFail(auth()->user()->id);
        // null поля не учитывать
        if ($params['password'] == null) {
            unset($params['password']);
        }

        $params['avatar'] = Storage::disk('public')->put('/avatars', $params['avatar']);

        $user->update($params);

        return to_route('home');
    }
}
