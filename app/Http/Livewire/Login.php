<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;

use Livewire\Component;

use Session;
use Log;

class Login extends Component
{
    public $email;
    public $password;
    public function render()
    {
        Session::forget('token');
        Session::forget('authenticated');
        Session::forget('user');

        return view('livewire.login');
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd($this->email, $this->password);

    try
    {
        $response = Http::post('http://'.env('API_URL').'/api/login', [
            'email' => $this->email,
            'password' => $this->password
        ]);

    } catch (\Throwable $e) {
            dd($e->getMessage());
        }
    
        // dd($response->json()["data"]["user"]["name"]);
        if($response->status() == 200)
        {
            $data = $response->json()["data"];

            Session::put('token', $data["token"]);
            Session::put('authenticated', true);
            Session::put('user', $data["user"]["name"]);

            return redirect()->route('logs');
        }

    }

   
}
