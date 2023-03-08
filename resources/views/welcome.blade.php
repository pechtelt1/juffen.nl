<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<x-layout>
    @include('_posts-header')

    <x-category-filters/>








    <section class="h-[640px] bg-white">

        <div class="max-w-7xl px-5 py-20 flex space-x-5 w-full h-full items-center justify-center mx-auto">


            <div class="flex flex-col space-y-5 w-full h-full">
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
            </div>
            <div class="flex flex-col space-y-5 w-full h-full">
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
            </div>
            <div class="flex flex-col space-y-5 w-full h-full">
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
            </div>
            <div class="flex flex-col space-y-5 w-full h-full">
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
                <div class="flex h-1/2 w-full bg-gray-300 rounded-md"></div>
            </div>
        </div>
    </section>
</x-layout>


