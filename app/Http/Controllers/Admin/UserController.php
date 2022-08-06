<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Notifications\AccountCreateNotification;
use App\Rules\MatchOldPassword;
use App\Scopes\Globals\ActiveScope;
use App\Services\UserService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var User
     */
    private $user;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService, User $user)
    {
        $this->userService = $userService;
        $this->user = $user->withoutGlobalScope(ActiveScope::class);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $data = [];
        $data['users'] = $this->userService->getUsers(10, 10, $request, true);
        $data ['i'] = ($request->input('page', 1) - 1) * 10;
        return view('admin.users.index', compact('data'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);
        try {
            $response=$this->userService->createUser($request, Auth::user());
            $role = $this->userService->getRole('name',config('app.customer'));
            $response['result']['user']->assignRole($role);
            $response['result']['user']->notify(new AccountCreateNotification(
                $response['result']['user'],
                $response['result']['password'])
            );
            $request->session()->flash('success', config('app.user_created_account_message'));
            return redirect()->route('admin.users.index');
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back()->withInput($request->input());
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id, Request $request)
    {
        try {
            $data = [];
            $data['user'] = $this->user->findOrfail($id);
            return view('admin.users.show', compact('data'));
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        try {
            $user = $this->user->findOrfail($id);
            $user->delete();
            \request()->session()->flash('success', 'User has been deleted successfully!');
            return back();
        } catch (\Exception $exception) {
            error_logs($exception);
            \request()->session()->flash('error', $exception->getMessage());
            return back();
        }

    }

    /**
     * @param $id
     * @param Request $request
     * @return array|string[]
     */
    public function updateStatus($id, Request $request)
    {
        try {
            $user = $this->user->findOrFail($id);
            $user->update([
                'is_active' => $request->is_active
            ]);
            return ['status' => 'success', 'message' => 'Status updated successfully!'];
        } catch (\Exception $exception) {
            error_logs($exception);
            return ['status' => 'fail', 'message' => $exception->getMessage()];
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile(Request $request)
    {
        return view('admin.profile');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        try {
            $response = $this->userService->editProfile($request, Auth::user());
            if ($response['status'] == 'fail') {
                $request->session()->flash('error', 'Image file extension should be jpg,png or jiff');
                return back();
            }
            $request->session()->flash('success', 'Profile update successfully!');
            return back();
        } catch (\Exception $exception) {
            error_logs($exception);
            $request->session()->flash('error', $exception->getMessage());
            return back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        $request->validate([
            "current_pass" => ["required", new MatchOldPassword],
            "password" => "required",
            "confirmation_password" => "required|same:password"
        ]);
        try {
            $response=$this->userService->editPassword($request,Auth::user());
            $request->session()->flash('success','Password updated successfully!');
            return back();
        }catch (\Exception $exception){
            error_logs($exception);
            $request->session()->flash('error',$exception->getMessage());
            return back();
        }
    }
}
