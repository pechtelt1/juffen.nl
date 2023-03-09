<x-layout>
    <header class=" mx-auto mt-28 text-center">
        <h1 class="mb-6 text-5xl font-extrabold leading-none max-w-5xl mx-auto tracking-normal text-gray-900 sm:text-6xl md:text-6xl lg:text-7xl md:tracking-tight">
            Upload hier&nbsp;<span
                class="w-full text-transparent bg-clip-text bg-gradient-to-r from-green-400 via-blue-500 to-purple-500 lg:inline">eigen bestanden</span>
        </h1>

        <p> Je kunt hieronder jouw eigen bestanden uploaden, na het uploaden zullen wij deze controleren, <br>
            als alles goed is zullen wij deze zo snel mogelijk op de website plaatsen. Bedankt!
        </p>
        {{--    <h2 class="inline-flex mt-2">By Patrick <img src="/images/lary-head.svg"--}}
        {{--                                                 alt="Head of Lary the mascot"></h2>--}}
    </header>

    <form action="/upload" method="POST" enctype="multipart/form-data" class="mx-auto mt-12 max-w-xl sm:mt-12">
        @csrf
        <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-2">
            <div class="sm:col-span-2">
                <label for="title" class="block text-sm font-semibold leading-6 text-gray-900">Naam</label>
                <div class="mt-2.5">
                    <input type="text" name="title" id="title" autocomplete="organization"
                           class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>
            <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Slug</label>
                <div class="mt-2.5">
                    <input type="text" name="slug" id="slug"
                           class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div class="sm:col-span-2">
                <label for="filepath_docx" class="block text-sm font-semibold leading-6 text-gray-900"> Upload Word
                    document </label>
                <input type="file" name="filepath_docx" id="filepath_docx" class="mt-4">
            </div>

            <div class="sm:col-span-2">
                <label for="filepath_pdf" class="block text-sm font-semibold leading-6 text-gray-900"> Upload PDF
                    document </label>
                <input type="file" name="filepath_pdf" id="filepath_pdf" class="mt-4">
            </div>


            <div class="sm:col-span-2">
                <label for="description" class="block text-sm font-semibold leading-6 text-gray-900">Bericht</label>
                <div class="mt-2.5">
                    <textarea name="description" id="description" rows="3"
                              class="block w-full rounded-md border-0 py-2 px-3.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
            </div>
            <div class="flex gap-x-4 sm:col-span-2">
                <div class="flex h-6 items-center">
                    <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                    <input type="checkbox" required />
                </div>
                <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                    Ik ga akkoord met de <a href="#" class="font-semibold text-indigo-600">algemene&nbsp;voorwaarden</a> en
                    <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                </label>
            </div>
        </div>
        <div class="mt-10">
            <button type="submit"
                    class="block w-full rounded-md bg-gradient-to-r from-green-500 via-blue-500 to-purple-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                Upload mijn bestanden
            </button>
            <a href="/"><h1 class="mt-4 text-center text-sm font text-black">Of ga terug naar alle bestanden</h1></a>
        </div>
    </form>



</x-layout>

