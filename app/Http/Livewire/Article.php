<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Article extends Component
{
    public $nama_lengkap;
    public function mount($nama)
    {
        $this->nama_lengkap = $nama;
    }
    public function render()
    {
        return view('livewire.article')->layout('layouts.app2')->slot('main');
    }
}
