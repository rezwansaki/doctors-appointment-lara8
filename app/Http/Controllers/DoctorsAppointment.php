<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Artisan;

class DoctorsAppointment extends Controller
{
    public function index()
    {
        //
    }

    // about page 
    public function about()
    {
        return view('about');
    }

    // contact page 
    public function contact()
    {
        return view('contact');
    }

    // doctorarea page 
    public function doctorArea()
    {
        return view('doctorarea');
    }

    // assistantarea page 
    public function assistantArea()
    {
        return view('assistantarea');
    }

    // appointmentfail page 
    public function appointmentFail()
    {
        return view('appointmentfail');
    }

    // appointmentsuccess page 
    public function appointmentSuccess()
    {
        return view('appointmentsuccess');
    }

    // makeanappointment page 
    public function makeAnAppointment()
    {
        return view('makeanappointment');
    }

    // register form display 
    public function register()
    {
        return view('register');
    }

    // login form display
    public function login()
    {
        return view('login');
    }

    // forget password 
    public function forgotPassword()
    {
        return view('forgetpassword');
    }

    // Setup part: at the first time this function will be called for settings something 
    public function firstTimeSetup()
    {
        $usercheck = User::find(1);
        if ($usercheck) {
            return 'You are trying to install 2nd time when user Admin already exist. If you have any problem then contact the Admin.';
        } else {
            // Roles are: 'Admin', 'Doctor', 'Assistant', 'User' //these roles are needed for this project 

            // install the app

            // this will be delete all data from all tables 
            Artisan::call('migrate:refresh');

            // create a default user 
            $user = User::create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('12345678'),
            ]);

            // creating roles for this project 
            $totalRoles = ['Admin', 'Doctor', 'Assistant', 'User'];
            foreach ($totalRoles as $role) {
                $roleCreate = Role::create(['name' => $role]);
            }
            // SuperAdmin, Admin, Assistant, User
            $roleAssign = User::find(1)->assignRole(['Admin']);

            return 'Default email address is <b>' . $user->email . '</b> and password is <b>' . '12345678' . ' </b>. Please, use this information for <a href="/login">login.</a>';
        }
    } // end of firstTimeSetup 
}
