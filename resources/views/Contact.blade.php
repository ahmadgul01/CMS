@extends('layouts.main')

@section('main-section')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @push('bb')
    <title>Contact</title>
   
    @endpush
</head>
<body>
@if(Session::has('msg'))
    <div class="alert alert-success">{{ Session::get('msg') }}</div>
@endif

    <div class="container mt-5">
       <form action="{{route('submit')}}" method="post">
        @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" >
                <span class="text-danger">
@error('name')
{{ $message }}
@enderror
</span>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{old('email')}}">
                <span class="text-danger">
@error('email')
{{ $message }}
@enderror
</span>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number:</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{old('phone')}}" >
                <span class="text-danger">
@error('phone')
{{ $message }}
@enderror
</span>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password" value="{{old('password')}}">
                <span class="text-danger">
@error('password')
{{ $message }}
@enderror
</span>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" id="message" name="message" rows="4" >{{old('message')}}</textarea>
                <span class="text-danger">
@error('message')
{{ $message }}
@enderror
</span>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
   
</body>
</html>

@endsection
