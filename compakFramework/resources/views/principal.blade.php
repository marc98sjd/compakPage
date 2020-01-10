@extends('layout.master')

@section('title', 'Compak')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('COSAS')
    @parent
    <p>This is my body content.</p>
@endsection
