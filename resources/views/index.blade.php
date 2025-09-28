@extends('layout')

@section('content')
    <h1>หลักสูตร</h1>
    <hr>
    <a href="{{ route('course') }}" class="btn btn-primary mb-3">++++เพิ่มหลักสูตร</a>
    <h1>iuu</h1>
    @if(section('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
@endsection