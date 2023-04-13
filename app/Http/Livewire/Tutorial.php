<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Tutorial extends Component
{
    public $hobi = "Bermain rubik";
    public $warna_kesukaan = "Hijau";

    public $proses = [];

    public function mount()
    {
        $this->hobi = "Bermain game";
        $this->warna_kesukaan = "Biru";    
        $this->proses[] = 'sedang di mount';
    }
    public function hydrate()
    {
        $this->proses[] = 'sedang di hydrate';
    }
    public function updating($name, $value)
    {
        $this->proses[] = "sedang di updating => $name & $value";
    }
    public function updated($name, $value)
    {
        $this->proses[] = "sedang di updated => $name & $value";
    }
    public function updatingHobi($value)
    {
        $this->proses[] = "sedang di updatingHobi => $value";
    }
    public function updatedHobi($value)
    {
        $this->proses[] = "sedang di updatedHobi => $value";
    }
    public function updatingWarnaKesukaan($value)
    {
        $this->proses[] = "sedang di updatingWarnaKesukaan => $value";
    }
    public function updatedWarnaKesukaan($value)
    {
        $this->proses[] = "sedang di updatedWarnaKesukaan => $value";
    }
    public function render()
    {
        $this->proses[] = 'sedang di render';
        $this->proses[] = '---------------';
        return view('livewire.tutorial');
    }
}
