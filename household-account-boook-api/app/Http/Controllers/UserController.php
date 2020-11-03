<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    /**
     * 会員登録
     *
     * @param Request $request
     * @return json
     */
    public function register(Request $request)
    {
        // Log::info('===============');
        // バリデーション
        $this->validator($request->all())->validate();
        // パラメーターよりユーザー認証用のインスタンスを作成
        $user = $this->create($request->all());
        // ログイン処理
        $this->guard()->login($user);
        // Auth::login($user);
        return response()->json([
            'user' => $user,
            'message' => 'registration successful'
        ], 200);
    }

    /**
     * Auth::guard呼び出しメソッド
     * @return \Illuminate\Support\Facades\Auth
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * 会員登録パラメータのバリデーション
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4']
        ]);
    }

    /**
     * ユーザーインスタンス作成メソッド
     *
     * @param array $data
     * @return \App\User
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => 1
        ]);
    }

    /**
     * ログイン
     *
     * @param Request $request
     * @return json
     */
    public function login(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            // ログイン成功
            $authuser = auth()->user();
            unset($authuser['created_at']);
            unset($authuser['updated_at']);
            unset($authuser['delete_flg']);
            return response()->json($authuser, 200);
        } else {
            return response()->json(['message' => 'invalid email or password'], 401);
        }
    }

    /**
     * ログアウト
     *
     * @return json
     */
    public function logout()
    {
        // Log::info('ログアウト');
        Auth::logout();
        return response()->json(['message' => 'Logged Out'], 200);
    }


    /**
     * 認証ルーティング
     * @return json
     */
    public function auth()
    {
        Log::info('サンクタム');
        if (!Auth::check()) {
            Log::info('認証エラー');
            return response()->json(['message' => 'invalid email or password'], 401);
        } else {
            Log::info('認証OK!');
            $authuser = auth()->user();
            unset($authuser['created_at']);
            unset($authuser['updated_at']);
            unset($authuser['delete_flg']);
            return response()->json($authuser, 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
