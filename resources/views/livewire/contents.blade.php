<div class="container py-5">
    {{-- Success is as dangerous as failure. --}}
    @foreach ($articles as $article)
        <h5>{{ $article->title }}</h5>
        <p>{{ $article->body }}</p>
    @endforeach
    @if ($count <= $total_article)
        <button class="btn btn-primary" wire:click="loadmore">Load More</button>        
    @endif
    <span wire:loading>Loading...</span>
</div>
