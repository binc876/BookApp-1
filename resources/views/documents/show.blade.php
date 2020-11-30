
@extends('layouts.reader')
 
@section('content')

    <section class="bg-gray-50 py-8">

        <div class="container mx-auto items-center pt-4 pb-12">
        <section class="bg-white py-8">

        <div class="container py-8 px-6 mx-auto">

            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-900 text-xl mb-8" >
             {{ $document->name }}
		    </a>
            <p class="uppercase tracking-wide font-bold text-gray-800 text-l mb-8">
            {{ $document->author["name"] }} | {{ $document->genre["name"] }}
            </p>
            <p class="mt-8 mb-8"><a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-900 text-xl mb-8" >
             description
            </a><br>
            {{ $document->description }}
                <br>
            </p>
            <div class="mb-8">
            <a class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-900 text-xl mb-8" >
             pricing
		    </a>
                <p>K{{ $document->price_per_day }} per day | K{{ $document->price_per_day }} per week | K{{ $document->price_per_day }} per month
                <br>
                </p>
            </div>
            <a href="">
                     <button class="bg-yellow-800 hover:opacity-75 text-white px-8 py-2">
                         Rent Now
                     </button>
            </a>
            
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
