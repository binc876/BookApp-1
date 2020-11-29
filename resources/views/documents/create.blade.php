<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create Books
    </h2>
</x-slot>

@extends('documents.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Document</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('documents.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('documents.store') }}" method="POST">
    @csrf
    <input class="form-control hidden" name="user_id" value="{{ Auth::User->id }}" type="text" >
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price per Day:</strong>
                <input type="number" name="price_per_day" class="form-control" placeholder="Rental Price per Day">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price per Week:</strong>
                <input type="number" name="price_per_week" class="form-control" placeholder="Rental Price per Week">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price per Month:</strong>
                <input type="number" name="price_per_month" class="form-control" placeholder="Rental Price per Month">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Genre:</strong>
                <select name="Instructorid" id="Instructorid" class="form-control" style="width:350px;margin-left:50px;">
                    <option value="">--- Select Instuctor ---</option>
                    @foreach ($instructors as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->FirstName }} {{ $instructor->LastName }}"</option>">
                    @endforeach
                </select>
            </div>                                
        </div>
        
        <div class="col-md-12">
                  <div class="form-group">
                      <input type="file" name="file" placeholder="Choose file" id="file">
                        @error('file')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                  </div>
              </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection