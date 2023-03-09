@props(['post'])

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <a href="/post/{{ $post->slug }}">
        <div class="py-6 px-5">
            <div>
                <img src="images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="mt-2.5 flex flex-col justify-between">
                <header>
                    <div class="space-x-2">
                        <x-category-buttons/>
                    </div>

                    <div class="mt-5">
                        <h1 class="text-xl">
                            <a href="/post/{{ $post->slug }}">
                                {{ $post->title }}
                            </a>
                        </h1>

                        <span class="mt-2 block text-gray-400 text-xs">
                        Published <time>{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                    </div>
                </header>
            </div>
        </div>
    </a>
</article>

