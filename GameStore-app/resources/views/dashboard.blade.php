@extends('games.layout')
@section('content')
<div class="alert alert-success" id="UploadSuccess">
    <a class="close" data-dismiss="alert">×</a>
    <strong>Congrats!</strong> You have successfully signed in! Welcome  <strong>{{ Auth::user()->name }}!</strong>
</div>

@endsection
{{-- 
<x-app-layout>

   
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-jet-welcome />
</x-app-layout> --}}