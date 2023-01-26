<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

use Session;

class Dashboard extends Component
{
    public $token;
    public $calls, $totalCalls, $todayCalls, $classCounts,$onlineClassCount, $physicalClassCount;
    public function render()
    {
        $this->token = Session::get('token');
        $response = Http::withToken($this->token)->get('https://' . env('API_URL') . '/api/logs/getall');
        $this->calls = $response->json()["calls"];

        $this->totalCalls = count($this->calls);

        $today = date("Y-m-d");
        $this->todayCalls = array_filter($this->calls, function ($call) use ($today) {
            return date("Y-m-d", strtotime($call['date'])) === $today;
        });
        $this->todayCalls = count($this->todayCalls);

        $this->classCounts = array_count_values(array_map('strval', array_column($this->calls, 'class')));
        $this->classCounts = array('online' => 0, 'physical' => 0);
        foreach ($this->calls as $call) {
            $class = $call['class'];
            if (isset($this->classCounts[$class])) {
                $this->classCounts[$class]++;
            }
        }
        $this->onlineClassCount = $this->classCounts['online'];
        $this->physicalClassCount = $this->classCounts['physical'];



        return view('livewire.dashboard');
    }
}