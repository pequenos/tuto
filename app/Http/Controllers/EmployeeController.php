<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{User, Employee};
use App\Http\Request\EmployeeFormRequest as EntityRequest;

class EmployeeController extends Controller
{
     public function index( Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');
        $search = $request->input('search');
        //Init query
        $user = User::query();

        if ($start_date) {
            $user->whereDate('created_at', '>=', $start_date);
        }
        if ($end_date) {
            $query->whereDate('created_at', '<=', $end_date);
        }
        if ($search) {
            $query->where("name", "LIKE", "%".$search."%")->hasRole('employees');
        }

        return view('employees/index', compact('query', $query));
    }//index()

    public function create()
    {
        return view('employees/store');
    }

    public function store(EntityRequest $request)
    {
        $userData = $request->only(['name', 'password', 'email']);
        $userData['password'] = bcrypt($request->password);
        $user_data['remember_token'] = Str::random(100);
        $user = User::create( $userData );
        $employeeData = $request->except(['name', 'password', 'email']);
        $employee = Employee::create($employeeData);

        return view('employees/index');
    }//

    public function show($id)
    {
        $employee = Employee::where('id' , $id)->first();
       return view('employees/show', compact('employee', $employee));
    }//show()

    public function edit($id)
    {
        $employee = Employee::where('id', $id);
        return view('employees/update', compact('employee', $employee));
    }

    public function update($id, EntityRequest $request)
    {
        $userData = $request->only(['name', 'password']);
        $userData['password'] = bcrypt($request->password);
        $user_data['remember_token'] = Str::random(100);
        $user = User::update( $userData );
        $employeeData = $request->except(['name', 'password']);
        $employee = Employee::update($employeeData);

        return view('employees/show', compact($user, 'user', $employee, 'employee'));
    }//update()

    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->user()->delete();

        return redirect(view('employees/index'));
    }//destroy()
}
