<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Session;
use Illuminate\Support\Facades\Http;
class Register extends Component
{
    public $fullName;
    public $email;
    public $password;
    public $password_confirmation;
    public function render()
    {
        Session::forget('token');
        Session::put('authenticated', false);
        Session::forget('user');
        return view('livewire.register');
    }

    public function register()
    {
        $this->validate([
            'fullName' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        try
        {
            $response = Http::post('https://'.env('API_URL').'/api/register', [
                'name' => $this->fullName,
                'email' => $this->email,
                'password' => $this->password
            ]);

        } catch (\Throwable $e) {
                dd($e->getMessage());
            }
        
            if($response->status() == 201)
            {
                $data = $response->json()["data"];
    
                Session::put('token', $data["token"]);
                Session::put('authenticated', true);
                Session::put('user', $data["user"]["name"]);
    
                return redirect()->route('logs');
            }


    }
}
