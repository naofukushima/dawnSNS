<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/added';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|between:4,12',
            'mail' => 'required|string|email|between:4,12|unique:users',
            'password' => 'required|string|alpha_num|between:4,12|confirmed',
            'password_confirmation' => 'required|string|alpha_num|between:4,12' //「〇〇_confirmation」:〇〇の確認

        ],[
            'username.required' => '必須項目です',
            'username.between' => '4文字以上12文字以内で入力してください',
            'mail.required' => '必須項目です',
            'mail.email' => 'メールアドレスではありません',
            'mail.between' => '4文字以上12文字以内で入力してください',
            'mail.unique' => 'このメールアドレスは既に使用されています',
            'password.required' => '必須項目です',
            'password.alpha_num' => '半角英数字のみ使用可能です',
            'password.between' => '4文字以上12文字以内で入力してください',
            'password.unique' => 'このパスワードは既に使用されています',
            'password_confirmation.required' => '必須項目です',
            'password_confirmation.alpha_num' => '半角英数字のみ使用可能です',
            'password_confirmation.between' => '4文字以上12文字以内で入力してください',
        ])->validate(); //バリデーションに失敗すると自動的に例外が投げられユーザーへ適切なエラーメッセージが返されるメソッド
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'mail' => $data['mail'],
            'password' => bcrypt($data['password']),
        ]);
    }


    // public function registerForm(){
    //     return view("auth.register");
    // }

    public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->input();
            $this->validator($data); //↑で作ったvalidator関数を実行する　どこの行で実行するかがポイント
            $this->create($data);
            return redirect('added');
        }
        return view('auth.register');
    }

    public function added(Request $request){
        $username = $request->input('username');
        return view('auth.added',compact('username'));
    }
}
