
@extends('Pages.layout1')

@section('content')
<div class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-semibold mb-6">Welcome {{ $user->first_name }}/h1>

        
        <p>{{ $welcome_message }}</p>

    </div>
</div>
@endsection
