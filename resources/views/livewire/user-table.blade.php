<div>
    {{-- Stop trying to control. --}}
    @include('partials.alert-success')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route("user.show", $user->id) }}" class="badge bg-primary">Detail</a>
                    <a href="{{ route("user.edit", $user->id) }}" class="badge bg-warning">Edit</a>
                    <button wire:click="delete({{ $user->id }})" class="btn badge bg-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
