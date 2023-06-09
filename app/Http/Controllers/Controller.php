<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Invoice;
use App\Models\Recipient;
use App\Models\Sender;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function customLogin(Request $request)
    {
        if (Auth::check()){
            return redirect('/invoices');
        }

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/invoices')
                ->with('success','Signed in');
        }

        return redirect("/login")->with('trouble','Login details are not valid');
    }

    public function customRegistration(Request $request)
    {
        if (Auth::check()){
            return redirect('/invoices');
        }

        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("/login")->with('success','Регистрация прошла успешно');
    }

    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect('/login');
    }

    public function invoices(){
        if (Auth::check()) {
            return view('invoices');
        }
        return redirect('/login');
    }

    public function tracks(Request $request){
            $trackId = $request->input('trackingNumber');
            $track = Invoice::find($trackId);
            return view('track', ['track' => $track]);
    }

    public function generate(){
        if (Auth::check()){
            $invoice = new Invoice();
            $invoice->user_id = Auth::id();
            $invoice->sender_id = Sender::get()->random()->id;
            $invoice->recipient_id = Recipient::get()->random()->id;
            $invoice->departure_id = City::get()->random()->id;
            $invoice->current_id = City::get()->random()->id;
            $invoice->arrival_id = City::get()->random()->id;
            $invoice->save();
        }
        return back();
    }
}
