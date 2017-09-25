<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Users;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    /**
     * 加载视图Login
     */
    public function index(){

        //检查模板是否存在
        //var_dump(View::exists('login'));die;

        //数据渲染模板的5中方法;compact(a,b,c);包含他们的变量名和值的数组;
        //var_dump(compact('id','name'));die;
        //return view('login')->with('id','123')->with('name','women');
        //return view('login')->with(['id'=>123,'name'=>'women']);
        //return view('login',['id'=>234,'name'=>'234234']);
        //return view('login',compact('id','name'));
        return view('login')->with(compact('id','name'));
    }
    /**
     * checkLoin
     * Session::put(key,value);
     * Session::push(key,value); 创建数组Session
     * session([key=>value]); 创建session
     * Session::keep(key);  一条session永久生效;
     * Session::get(key);
     * session(key);          获取session
     * Session::flash(key,value); 闪存：只在下一次的请求内有效 _flash.new
     * Session::now(key,value);  闪存：只在下一次的请求内有效 _flash.old
     * Session::forget(key); 删除指定的一条数据
     * Session::remove(key); 删除指定的一条数据,并返回该数据的值;
     * Session::flush();    清楚所有的session
     * Session::has(key);    session,键存在并且不为null，值为null ,返回false；
     * Session::exists(key); session,键是否存在,即返回true;  可以为null;
     */
    public function checkLogin(){
        $name = Input::get('name','');
        $password = Input::get('password','');
        $result = Users::where('name',$name)->where('password',$password)->first();
        if($result){
            Session::put('managerName',$name);
            Session::put('managerPassword' ,$password);
            Session::put('null',null);
            Session::put(['test1'=>'test1','test2'=>'test2']);
            //Session::put('num',0);
            //Session::increment('num');
            //Session::flash('flash','2323');
            //Session::now('now','dsfad');
            //echo  Session::get('flash');

            //dd(Session::all());
            return Redirect::to('/');  //页面跳转
        }else{
            Session::flash('managerError','账号密码不正确！');
            return view('login');
        }
    }
    /**
     * LoginOut
     */
    public function LoginOut(Request $request){
        Session::forget('managerName');
        Session::forget('managerPassword');
        Session::forget('null');
        return Redirect::to('/');
    }

    public function getName(){
        dd([1,2,3,4,5,5]);
    }
}
