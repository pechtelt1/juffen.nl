<header class=" mx-auto mt-28 text-center">

    <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">
        De plek&nbsp;<span
            class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">voor leerkrachten</span>
        voor&nbsp;al hun bestanden</h1>
    <br>

    <div class="mt-4 relative lg:inline-flex space-x-6">

        {{-- Groepen Dropdown --}}
        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="py-2 px-3 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex bg-gray-100 rounded-xl">
                        {{ isset($currentGroup) ? ucwords($currentGroup->name) : 'Groepen' }}

                        <svg class="transform -rotate-90 abs pointer-events-none" style="right: 2px;" width="22"
                             height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>

                    </button>
                </x-slot>
                @foreach($groups as $group)
                    <x-dropdown-item
                        href="/groups/{{ $group->slug }}"
                        :active='request()->is("groups/{$group->slug}")'
                    > {{ ucwords($group->name) }}</x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>

        <div class="relative lg:inline-flex bg-gray-100 rounded-xl">
            <x-dropdown>
                <x-slot name="trigger">
                    <button
                        class="py-2 px-3 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex bg-gray-100 rounded-xl">
                        {{ isset($currentSubject) ? ucwords($currentSubject->name) : 'Vakken' }}

                        <svg class="transform -rotate-90 abs pointer-events-none" style="right: 2px;" width="22"
                             height="22" viewBox="0 0 22 22">
                            <g fill="none" fill-rule="evenodd">
                                <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                </path>
                                <path fill="#222"
                                      d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                            </g>
                        </svg>

                    </button>
                </x-slot>
                @foreach($subjects as $subject)
                    <x-dropdown-item
                        href="/subjects/{{ $subject->slug }}"
                        :active='request()->is("subjects/{$subject->slug}")'
                    > {{ $subject->name }} </x-dropdown-item>
                @endforeach
            </x-dropdown>
        </div>

        {{-- Zoeken --}}
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl py-2">
            <form method="GET" action="#">
                <input type="text" name="search" placeholder="Zoeken"
                       class="text-center bg-transparent placeholder-black font-semibold px-32 text-sm"
                       style="outline:none"
                >
            </form>
        </div>

        {{-- Verwijder filters --}}
        <div
            x-data="{ show : false }"
            x-init="if (window.location.href.includes('groups') || window.location.href.includes('subjects')) {
            show = true
        }"
            class="relative flex lg:inline-flex items-center">
            <a href="/">
                <h3 x-show="show" class="underline hover:text-blue-600" style="display: none">Verwijder filters</h3>
            </a>
        </div>
    </div>
</header>
