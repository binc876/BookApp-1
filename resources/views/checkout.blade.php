@extends('layouts.reader')
 
@section('content')

    <section class="bg-gray-50 py-8">

        <div class="container mx-auto items-center pt-4 pb-12">
        <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">
        <form action="{{ Docs_RentedController::rent($document->id) }}" method="POST" >
            @csrf
            <div class="bg-white px-20 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-900 text-xl mb-8" >
                {{ $document->name }}
                </a>
                    <div class="mb-4">
                        <label for="FormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Duration:</label>
                        <input type="Number" min=1 max=10 class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput1" placeholder="For how long do you wish to rent this document" name="duration">
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Period:</label>
                        <select name="price" class="shadow appearance-none border w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            <option class=" text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 ml-3 block font-normal truncate" value="{{ $document->price_per_day }}">day(s)</option>
                            <option class=" text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 ml-3 block font-normal truncate" value="{{ $document->price_per_week }}">week(s)</option>
                            <option class=" text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 ml-3 block font-normal truncate" value="{{ $document->price_per_month }}">month(s)</option>
                        </select>
                        @error('genre') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div> 
            </div>
            </div>

            <div class=" px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full shadow-sm sm:ml-3 sm:w-auto">
                
                <button type="submit" class="bg-yellow-800 hover:opacity-75 text-white px-8 py-2">
                Rent Now
                </button>
            </span>
            </div>
            
            </form>
            
        </div>

    </section>

        </div>

    </section>

    <footer class="container mx-auto bg-white py-8 border-t border-gray-400">
        <div class="container flex px-3 py-8 ">
            <div class="w-full mx-auto flex flex-wrap">
                <div class="flex w-full lg:w-1/2 ">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">About</h3>
                        <p class="py-4">
                            Final year project.
                        </p>
                    </div>
                </div>
                <div class="flex w-full lg:w-1/2 lg:justify-end lg:text-right">
                    <div class="px-3 md:px-0">
                        <h3 class="font-bold text-gray-900">Social</h3>
                        <ul class="list-reset items-center pt-3">
                            <li>
                                <p class="inline-block no-underline hover:text-black hover:underline py-1">Please pass me</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
