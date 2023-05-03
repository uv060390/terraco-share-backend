<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
  //
  public function viewlogin()
  {
    return view('admin.login');
  }

  public function login(Request $request)
  {
    $rules = [
      'email'   => 'required|email',
      'password' => 'required'
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
    }
    $remember_me = $request->has('remember') ? true : false;
    //--- Validation Section Ends

    // Attempt to log the user in
    // dd(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember));
    if (!$request->isJson() && Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $remember_me)) {
      // if successful, then redirect to their intended location
      return redirect()->route('admin.list');
    } else if ($request->isJson()) {
      $token = auth()->guard('api')->attempt(['email' => $request->email, 'password' => $request->password]);
      if (!$token) {
        return response()->json(['error' => 'credentials not matched']);
      }
      return response()->json([
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' =>  auth('api')->factory()->getTTL() * 60, //auth()->factory()->getTTL() * 60,
        'status' => 200,
        "user" => auth()->guard('api')->user(),
        "response" => "Successfully login",
      ]);
    }

    // if unsuccessful, then redirect back to the login with the form data
    return response()->json(array('errors' => [0 => 'Credentials Doesn\'t Match !']));
  }
}
