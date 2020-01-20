@extends('layouts.app')

@section('content')
    <h1 class="block text-center text-gray-600 font-bold text-2xl uppercase mb-2">Todo list</h1>

    <div class="bg-white shadow-lg rounded p-5">
        @livewire('create-task')

        @livewire('tasks')
    </div>
@endsection
