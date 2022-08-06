<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Services\ProjectService;
use App\Services\UserService;
use App\User;
use App\Utils\AppConst;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var User
     */
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserService $userService)
    {
        $this->middleware('guest')->except('logout');
        $this->userService = $userService;
        $this->user = new User;
        $this->projectService = new ProjectService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        try {
            $user = $this->user->with('roles')->email($request->email)->first();
            if (!$user){
                $request->session()->flash('error', 'User not found against email');
                return back()->withInput($request->input());
            }
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                if ($user->roles->first()->name == config('app.admin')){
                    return redirect()->route('admin.users.index');
                }
                $projects = $this->projectService->getUserProjects(Auth::user()->id);
                cache()->forget('projects');
                cache()->forever('projects',$projects);
                return redirect()->to('user/dashboard');
            }
            $request->session()->flash('error', config('app.credentials_not_matched'));
            return back()->withInput($request->input());
        }catch (\Exception $exception){
            error_logs($exception);
            $request->session()->flash('error',$exception->getMessage());
            return back()->withInput($request->input());
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function loginForm()
    {
        return view('admin.auth.login');
    }
}
