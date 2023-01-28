<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Http;
use Session;

use Livewire\Component;

use Livewire\WithPagination;

class Logs extends Component
{
    public $token;
    // public $id;
    public $tag;
    public $class;
    public $savedSuccess = false;

    public $error = false;
    public $message;
    public $notes =[];
    // public $logs;

    use WithPagination;
    public function render()
    {
        $this->token = Session::get('token');
        $response = Http::withToken($this->token)->get('https://'.env('API_URL').'/api/logs/getall');
        $logs = $response->json();
        // $this->logs = $this->logs->paginate(10);
        // dd($logs);


        foreach($logs as $log) {
            $this->notes[$log['id']] = $log['notes'];
            $this->class[$log['id']] = $log['class'];
            $this->tag[$log['id']] = $log['tags'];
        }


        // dd($this->notes);
        
        return view('livewire.logs', [
            'logs' => collect($logs)->paginate(10)
        ]);
    }
    public function classes($value) {

        $this->class = $value;
        dd($this->class);


    }
    public function clear()
    {
        //beynun neh ehcheh
        $this->tag = null;
        $this->class = null;
        $this->note = null;
    }

    public function logUpdate($id)
    {
        $note = $this->notes[$id];
        $class = $this->class[$id];
        $tag = $this->tag[$id];
        // dd($this->note);
        $this->token = Session::get('token');
        // dd($this->tag);
        $response = Http::withToken($this->token)->post('https://'.env('API_URL').'/api/logs/update/'.$id, [
            'tags' => $tag,
            'class' => $class,
            'notes' => $note
        ]);
        // dd($response->status());
        if($response->status() == 201){
            $this->dispatchBrowserEvent('notify', 'Successfully updated');
        } elseif
        ($response->status() == 401){
            $this->error = true;
            $this->message = "Unauthorized";
        }
        else{
            $this->error = true;
            $this->message = "Something went wrong";
        }

        // dd($this->savedSuccess);
        // dd($response->json());
        // $logs = $response->json()["calls"];
        $tag = null;
        $class = null;
        $note = null;
    }

    public function savedMessage(){

    }

}
