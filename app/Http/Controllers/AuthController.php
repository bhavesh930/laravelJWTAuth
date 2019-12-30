<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Check User is logged in or not
     *
     * @return \Illuminate\Http\Response
     */
    public function sso()
    {
        $response['message'] = 'User Logged In';
        $response['data']['user_id'] = Auth::user()->id;
        $response['data']['account_id'] = ''; /*Need to retrieve the account_id via QueryBuilder/Relationships*/
        $status = 200;
        return response()->json($response, $status);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
