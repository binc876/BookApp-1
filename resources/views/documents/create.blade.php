@extends('documents.layout')
 
@section('content')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add a Doc
            </h2>
        </div>
    </header>
    <div class="py-12">
    <div class="max-w-7xl mx-auto align-bottom justify-center  text-left sm:align-middle sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4"> 
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500">{{ $error }}</li>
                        <span class="text-red-500">{{ $message }}</span>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('documents.store') }}" method="POST"  >
            @csrf
            <div class="bg-white px-20 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                    <div class="mb-4">
                        <label for="FormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput1" placeholder="Enter Name of Document" name="name">
                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                        <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput2"  placeholder="Enter a Brief Description" name="description"></textarea>
                        @error('description') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput3" class="block text-gray-700 text-sm font-bold mb-2">Price Per Day:</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput3" placeholder="Enter a Rental Price per Day" name="price_per_day">
                        @error('price_per_day') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput4" class="block text-gray-700 text-sm font-bold mb-2">Price Per Week:</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput4" placeholder="Enter a Rental Price per Week" name="price_per_week">
                        @error('price_per_week') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput5" class="block text-gray-700 text-sm font-bold mb-2">Price Per Month:</label>
                        <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="FormControlInput5" placeholder="Enter a Rental Price per Month" name="price_per_month">
                        @error('price_per_month') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    
                    <div class="mb-4">
                        <label for="FormControlInput6" class="block text-gray-700 text-sm font-bold mb-2">Genre:</label>
                        <select name="genre_id" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            @foreach ($genres as $genre)
                                <option class=" text-gray-900 cursor-default select-none relative py-2 pl-3 pr-9 ml-3 block font-normal truncate" value="{{ $genre->id }}">{{ $genre->name }}</option>>
                            @endforeach
                        </select>
                        @error('genre') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="mb-4">
                        <label for="FormControlInput7" class="block text-gray-700 text-sm font-bold mb-2">Select File:</label>
                        <input type="file" enctype="multipart/form-data" name="path" placeholder="Choose file" id="FormControlInput7" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        
                        @error('file') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
            </div>
            </div>

            <div class=" px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                Save
                </button>
            </span>
            </div>
            
            </form>
            
            
        </div>
    </div>
</div>
@endsection