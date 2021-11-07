<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index(Request $request)
    {
        $employees = User::where(function ($query) use ($request) {
            $query
                ->where('name', 'LIKE', '%' . $request->key . '%')
                ->OrWhere('email', 'LIKE', '%' . $request->key . '%');
        })->orderBy('id', 'ASC')->paginate();

        return view('employees.index', compact('employees'));
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        $request = request()->validate([
            'name' => ['string', 'min:3', 'max:255'],
            'email' => ['email', 'unique:users'],
            'password' => ['min:6', 'max:255'],
            'roles' => ['integer', 'between:0,2']
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'roles' => $request['roles']
        ]);

        return redirect()->route('employees.index')->with('message', 'أضيف الموظف بنجاح');
    }
}
