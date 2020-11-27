@auth
<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="mt-8 text-2xl">
        Welcome {{ Auth::user()->name }}!
    </div>

    <div class="mt-6 text-gray-500">
        Stumped about where to start? Maybe <a href="#" class="font-semibold text-indigo-700">Create a Doc</a>.
    
    </div>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2">
    <div class="p-6">
        <a href="#">
            <div class="flex items-center">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                <div class="ml-4 text-lg text-gray-700 leading-7 font-semibold"><a href="#">Your Docs</a></div>
            </div>
        </a>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Take a look at some of the Docs you've published.
            </div>

        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
        <a href="#">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z"/>
                <path d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
            </svg>
            <div class="ml-4 text-lg text-gray-700 leading-7 font-semibold"><a href="#">All Docs</a></div>
        </div>
        </a>
        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                Wanna see some Docs by other authors? 
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200">
        <a href="#">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400">
                <path d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <div class="ml-4 text-lg text-gray-700 leading-7 font-semibold"><a href="#">My Stats</a></div>
        </div>
        </a>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
                People look at your Docs! Wanna see how many?
            </div>
        </div>
    </div>

    <div class="p-6 border-t border-gray-200 md:border-l">
        <a href="{{ route('profile.show') }}">
        <div class="flex items-center">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
            <div class="ml-4 text-lg text-gray-700 leading-7 font-semibold">My Profile</div>
        </div>
        </a>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500">
               Check out what other people know about you.
            </div>
        </div>
    </div>

</div>
@endauth