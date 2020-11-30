
@extends('layouts.reader')
 
 @section('content')
 <section class="w-full mx-auto bg-nordic-gray-light flex pt-12 md:pt-0 md:items-center bg-cover bg-right" style="max-width:1600px; height: 32rem; background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url('https://images.unsplash.com/photo-1532543307581-8b01a7ff954f?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1500&q=80');">
 
     <div class="container mx-auto">
 
         <div class="flex flex-col w-full lg:w-1/2 justify-center items-start  px-6 tracking-wide">
             <h1 class="text-white text-2xl my-4">Get your documents at the cheapest prices</h1>
             <a class="text-xl text-white inline-block no-underline border-b border-gray-300 leading-relaxed hover:text-yellow-200 hover:border-yellow-500" href="#">Docs</a>
 
         </div>
 
       </div>
 
 </section>
 
     <section class="bg-gray-50 py-8">
 
         <div class="container mx-auto items-center pt-4 pb-12">
 
             <nav id="store" class="w-full z-30 top-0 px-6 py-1">
                 <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-2 py-3">
 
                     <p class="uppercase tracking-wide no-underline hover:no-underline font-bold text-gray-900 text-xl " href="#">
                         Available books
                     </p>
               </div>
             </nav>
 
             <div class="grid gap-4 grid-cols-1">
             @foreach($documents as $document)
                 <div class="bg-white p-6 shadow-md rounded flex justify-between items-center mx-12 my-4  hover:shadow-lg">
                     <div class="flex">
                         <div>
                         <h1 class="text-xl font-medium text-black">{{ $document->name }}</h1>
                         <p class="text-gray-800">{{ $document->description }}</p>
                         <p class="text-gray-600">K{{ $document->price_per_day }} per day</p>
                         </div>
                     </div>
                     <a href="{{ route('documents.show',$document->id) }}">
                     <button class="bg-yellow-800 hover:opacity-75 text-white px-8 py-2">
                         Rent
                     </button>
                     </a>
                 </div>
             @endforeach
             </div>
 
         </div>
 
     </section>
 
     <footer class="container mx-auto bg-gray-50 py-8 border-t border-gray-400">
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
