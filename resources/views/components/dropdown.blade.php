@props(['groups', 'subjects'])

<div class="mt-4 relative lg:inline-flex space-x-6">

    {{-- Groepen --}}
    <div x-data="{ show: false }" @click.away="show = false">
        <button
            @click="show = !show"
            class="py-2 px-3 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex bg-gray-100 rounded-xl"
        >Groep
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

        <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-32 z-50" style="display: none">
            @foreach($groups as $group)
                <a href="/groups/{{ $group->slug }}"
                   class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300"
                >{{ ucwords($group->name) }}</a>
            @endforeach
        </div>
    </div>

    {{-- Vakken --}}
    <div x-data="{ show: false }" @click.away="show = false">
        <button
            @click="show = !show"
            class="py-2 px-4 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex bg-gray-100 rounded-xl"
        >Vak
            <svg class="transform -rotate-90 relative pointer-events-none" style="right: 2px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </button>

        <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-32 z-50" style="display: none">
            @foreach($subjects as $subject)
                <a href="/subjects/{{ $subject->slug }}"
                   class="block text-left px-3 text-sm leading-6 hover:bg-gray-300 focus:bg-gray-300"
                >{{ ucwords($subject->name) }}</a>
            @endforeach
        </div>
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

    <div x-data="{show: true}"  class="relative flex lg:inline-flex items-center">
        <a href="/"><h3 x-show="show" class="underline hover:text-blue-600" style="display: none">Remove filters</h3></a>
    </div>

</div>
