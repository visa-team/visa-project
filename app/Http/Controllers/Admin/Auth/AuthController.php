<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;


class AuthController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/admin';
    protected $guard = 'admin';

  

    public function getLogin(){
    	return $this->showLoginForm();
    }
    
    public function showLoginForm(){
    	if (\Auth::guard($this->guard)->check())
		{
			return redirect()->route('admin.index');
		}
	    return view('admin.auth.login');
    }

    public function postLogin(Request $request){
        return $this->login($request);
    }

    public function login(Request $request){
        $validator = $this->validateLogin($request->all());
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials =[
            'email' => $request->email,
            'password' => $request->password
        ];


        if( \Auth::guard($this->guard)->attempt($credentials) ) {
            $url = $request->_url;
            return redirect($url);
        } else {
            return redirect()->back()->withErrors(['email' => 'Tài khoản không chính xác!'])->withInput();
        }
    }

    protected function validateLogin(array $data){
        return Validator::make($data,[
            'email' => 'required|email|max:255',
            'password' => 'required',
        ],[
            'email.required' => 'bạn chưa nhập email',
            'email.email' => 'email không chính xác',
            'email.max' => 'email nhỏ hơn 225 ký tự',
            'password.required' => 'bạn chưa nhập mật khẩu',
        ]);
    }
}
