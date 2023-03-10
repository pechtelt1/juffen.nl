@props(['posts'])

@if ($posts->count())
    <div class="lg:grid lg:grid-cols-4">
        @foreach($posts as $post)
            <x-post-card :post="$post"/>
        @endforeach
    </div>
@endif
