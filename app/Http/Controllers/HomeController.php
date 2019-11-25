<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\User;
use App\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index(Request $request)
      {
        $request->user()->authorizeRoles(['user', 'administrator', 'spectator']);

        $user = $request->user();
        $nameUser = $user->name;

        if ($request->user()->hasRole('administrator'))
        {
            $user = $request->user();

            foreach ($user->roles as $role)
            {
              $nameRole = $role->name;
            }

        }
        elseif ($request->user()->hasRole('user'))
        {
          $user = $request->user();
          foreach ($user->roles as $role)
          {
            $nameRole = $role->name;
          }
        }
        elseif ($request->user()->hasRole('spectator'))
        {
          $user = $request->user();
          foreach ($user->roles as $role)
          {
            $nameRole = $role->name;
          }
        }
        else
        {
          $nameRole = 'Sin Rol';
        }

        View::share('nameRole', 'nameUser');

        return view('dashboard', compact('nameRole', 'nameUser'));
      }

}
