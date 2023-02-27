<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class UserProfileController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();

        if (count($data) > 0 && isset($data['user_id'])){

            $user = User::query()->find($data['user_id']);

            if ($user !== null)
            {
                return view('user-profile.index', [
                    'user' => $user,
                    'projects' => $user->projects
                ]);
            }
        }

        $user = Auth::user();
        if ($user !== null) {
            return view('user-profile.index', [
                'user'     => $user,
                'projects' => $user->projects
            ]);
        }
        return redirect()->route('login');
    }
}
