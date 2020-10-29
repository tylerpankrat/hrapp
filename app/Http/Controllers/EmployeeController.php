<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = auth()->user()->employee();
        return view('dashboard', compact('employees'));
    }
    public function add()
    {
    	return view('add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'middle_name' => 'required',
            'position' => 'required',
            'address_unit' => 'required',
            'address_street' => 'required',
            'address_city' => 'required',
            'address_province' => 'required',
            'address_postal_code' => 'required',
            'phone_number_main' => 'required',
            'phone_number_cell' => 'required',
            'phone_number_text' => 'required',
            'phone_number_preferred' => 'required',
            'email_addresses' => 'required',
            'emergency_contacts_name' => 'required',
            'emergency_contacts_phone_number_main' => 'required',
            'emergency_contacts_phone_number_cell' => 'required',
            'emergency_contacts_email' => 'required',
            'emergency_contacts_text' => 'required',
            'emergency_contacts_preferred' => 'required'
        ]);
    	$employee = new Employee();
        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->middle_name = $request->middle_name;
        $employee->position = $request->position;
        $employee->address_unit = $request->address_unit;
        $employee->address_street = $request->address_street;
        $employee->address_city = $request->address_city;
        $employee->address_province = $request->address_province;
        $employee->address_postal_code = $request->address_postal_code;
        $employee->phone_number_main = $request->phone_number_main;
        $employee->phone_number_cell = $request->phone_number_cell;
        $employee->phone_number_text = $request->phone_number_text;
        $employee->phone_number_preferred = $request->phone_number_preferred;
        $employee->email_addresses = $request->email_addresses;
        $employee->emergency_contacts_name = $request->emergency_contacts_name;
        $employee->emergency_contacts_phone_number_main = $request->emergency_contacts_phone_number_main;
        $employee->emergency_contacts_phone_number_cell = $request->emergency_contacts_phone_number_cell;
        $employee->emergency_contacts_email = $request->emergency_contacts_email;
        $employee->emergency_contacts_text = $request->emergency_contacts_text;
        $employee->emergency_contacts_preferred = $request->emergency_contacts_preferred;
    	$employee->user_id = auth()->user()->id;
    	$employee->save();
    	return redirect('/dashboard'); 
    }

    public function edit(Employee $employee)
    {

    	if (auth()->user()->id == $employee->user_id)
        {            
                return view('edit', compact('employee'));
        }           
        else {
             return redirect('/dashboard');
         }            	
    }

    public function update(Request $request, Employee $employee)
    {
    	if(isset($_POST['delete'])) {
    		$employee->delete();
    		return redirect('/dashboard');
    	}
    	else
    	{
            $this->validate($request, [
                'first_name' => 'required',
                'last_name' => 'required',
                'middle_name' => 'required',
                'position' => 'required',
                'address_unit' => 'required',
                'address_street' => 'required',
                'address_city' => 'required',
                'address_province' => 'required',
                'address_postal_code' => 'required',
                'phone_number_main' => 'required',
                'phone_number_cell' => 'required',
                'phone_number_text' => 'required',
                'phone_number_preferred' => 'required',
                'email_addresses' => 'required',
                'emergency_contacts_name' => 'required',
                'emergency_contacts_phone_number_main' => 'required',
                'emergency_contacts_phone_number_cell' => 'required',
                'emergency_contacts_email' => 'required',
                'emergency_contacts_text' => 'required',
                'emergency_contacts_preferred' => 'required'
            ]);
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->middle_name = $request->middle_name;
            $employee->position = $request->position;
            $employee->address_unit = $request->address_unit;
            $employee->address_street = $request->address_street;
            $employee->address_city = $request->address_city;
            $employee->address_province = $request->address_province;
            $employee->address_postal_code = $request->address_postal_code;
            $employee->phone_number_main = $request->phone_number_main;
            $employee->phone_number_cell = $request->phone_number_cell;
            $employee->phone_number_text = $request->phone_number_text;
            $employee->phone_number_preferred = $request->phone_number_preferred;
            $employee->email_addresses = $request->email_addresses;
            $employee->emergency_contacts_name = $request->emergency_contacts_name;
            $employee->emergency_contacts_phone_number_main = $request->emergency_contacts_phone_number_main;
            $employee->emergency_contacts_phone_number_cell = $request->emergency_contacts_phone_number_cell;
            $employee->emergency_contacts_email = $request->emergency_contacts_email;
            $employee->emergency_contacts_text = $request->emergency_contacts_text;
            $employee->emergency_contacts_preferred = $request->emergency_contacts_preferred;
	    	$employee->save();
	    	return redirect('/dashboard'); 
    	}    	
    }
}