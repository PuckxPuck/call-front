<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Session;

use Livewire\Component;

class Logs extends Component
{
    public $token;
    // public $id;
    public $tag;
    public $class;
    public $note;
    public $tags =[];
    public $logs;
    public function render()
    {
        $this->token = Session::get('token');
        $response = Http::withToken($this->token)->get('http://'.env('API_URL').'/api/logs/getall');
        $this->logs = $response->json()["calls"];

        // foreach($this->logs as $log)
        // {
        //     $this->tags[] = $log["tags"];
        // }
        
        return view('livewire.logs');
    }
    public function clear()
    {
        $this->tag = null;
        $this->class = null;
        $this->note = null;
    }

    public function logUpdate($id)
    {
        $this->token = Session::get('token');
        // dd($this->tag);
        $response = Http::withToken($this->token)->post('http://' . env('API_URL') . '/api/logs/update/' . $id, [
            'tag' => $this->tag,
            'class' => $this->class,
            'note' => $this->note
        ]);
        // $this->logs = $response->json()["calls"];
        $this->tag = null;
        $this->class = null;
        $this->note = null;
    }

}
