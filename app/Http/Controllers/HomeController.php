<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::find(5);
        // dd($user->hasRole('organizer'));
        // dd($user->giveRolsTo('admin'));
        // dd($user->hasRole('project-manager'));
        // dd($user->givePermissionsTo('manage-users'));
        // dd($user->can('create-anons'));
        // dd($user->hasPermission('create-anons'));
        // dd($user->deletePermissions('manage-users'));
        return view('home.index', compact('user'));
    }
}
