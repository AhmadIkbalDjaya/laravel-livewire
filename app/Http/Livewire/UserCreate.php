<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{

    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.user-create');
    }

    public function store()
    {
        $validated = $this->validate([
            "name" => "required|string|min:3",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:8",
        ]);
        $validated["password"] = Hash::make($validated["password"]);
        User::create($validated);
        $this->name = null;
        $this->email = null;
        $this->password = null;
        session()->flash("success", "User Berhasil Ditambahkan");

    }
}
