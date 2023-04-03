<div>
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- <div class="mb-3"> --}}
        {{-- <input type="text" class="form-control" wire:model="name"> --}}
        {{-- <textarea type="text" class="form-control" wire:model="name"></textarea> --}}
        {{-- <input type="radio" name="gender" value="Male" wire:model="name"> Male
        <input type="radio" name="gender" value="Famale" wire:model="name"> Famale --}}
        {{-- <select class="form-select" wire:model="name">
            <option hidden>Pilih Jenis Kelamin</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select> --}}
        {{-- <input 
        @if ($show_password == "show")
            type="text"
        @else
            type="password"
        @endif
        class="form-control" wire:model="name"> --}}
        
        {{-- <label for="">Show Password</label>
        <input type="checkbox" wire:model="show_password" value="show"> --}}
        
    {{-- </div> --}}
    {{-- <h1>Halo {{ $name }}</h1> --}}



    <div class="mb-3">
        <input type="number" class="form-control" wire:model="keranjang">
    </div>
    <button class="btn btn-primary" wire:click="plus">+ Plus</button>
    @if ($keranjang >=1)
    <button class="btn btn-danger" wire:click="minus">- Minus</button>
        
    @endif
</div>
