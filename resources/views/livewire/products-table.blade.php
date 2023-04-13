<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Cari">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
            <tr>
                <th scope="row">{{ $products->firstItem() + $index }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
