<?php

namespace App\Http\Controllers\Home\User;

use App\Http\Controllers\Controller;
use App\Http\Service\Notification;
use App\Models\Meta\User\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        if (Auth::check())
            return new JsonResponse([
                "notification" => (new Notification('Пользователь уже залогинен!'))->toArray()
            ]);

        if (!Auth::attempt(['login' => $request->get('login'), 'password' => $request->get('password')])) {
            $notification = new Notification('Неверный логин или пароль!', '', '');
            return new JsonResponse([
                "notification" => $notification->toArray()
            ]);
        }

        $request->session()->regenerate();

        return new JsonResponse([
            'result' => Auth::user(),
        ]);

    }

    public function logout(): JsonResponse
    {
        try {
            Auth::guard('web')->logout();
            return new JsonResponse([
                'result' => true,
            ]);
        } catch (\Exception $e) {
            $notification = new Notification('Что-то пошло не так!', '', '');
            return new JsonResponse([
                'notification' => $notification->toArray(),
            ]);
        }
    }

    public function getUser(): JsonResponse
    {
        return new JsonResponse([
            'result' => Auth::user(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function users(): JsonResponse
    {
        return new JsonResponse([
            'result' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
