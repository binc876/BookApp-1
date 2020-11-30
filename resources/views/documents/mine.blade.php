@extends('documents.layout')
 
@section('content')

    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-full mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Your Docs
            </h2>
        </div>
    </header>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <a href="{{ route('documents.create') }}">
                <button  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Document</button>
            </a>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2 w-60">Description</th>
                        <th class="px-4 py-2">Price/Day</th>
                        <th class="px-4 py-2">Price/Week</th>
                        <th class="px-4 py-2">Price/Month</th>
                        <th class="px-4 py-2">Genre</th>
                        <th class="px-4 py-2">Path</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($documents as $document)
                    <tr>
                        <td class="border px-4 py-2">{{ $document->id }}</td>
                        <td class="border px-4 py-2">{{ $document->name }}</td>
                        <td class="border px-4 py-2">{{ $document->description }}</td>
                        <td class="border px-4 py-2">{{ $document->price_per_day }}</td>
                        <td class="border px-4 py-2">{{ $document->price_per_week }}</td>
                        <td class="border px-4 py-2">{{ $document->price_per_month }}</td>
                        <td class="border px-4 py-2">{{ $document->genre['name'] }}</td>
                        <td class="border px-4 py-2">{{ $document->path }}</td>
                        <td class="border px-4 py-2">
                            <form action="{{ route('documents.destroy',$document->id) }}" method="POST">
   
                            <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('documents.edit',$document->id) }}"> Edit </a>
                            
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button></a>
                            
                            </form>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
      
@endsection
