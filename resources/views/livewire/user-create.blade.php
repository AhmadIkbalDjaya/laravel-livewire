<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">
        <div class="card-header">Form</div>
        <div class="card-body">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" wire:model="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email" wire:model="email" class="form-control" id="email" placeholder="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" wire:model="password" class="form-control" id="password" placeholder="password">
            </div>
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
