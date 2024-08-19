@extends('layouts.layout')
@section('content')
    <div class="w-1/2 mx-auto">
        <h1 class="text-3xl font-semibold text-primary mb-3">Login</h1>
        <div class="rounded-lg border border-gray-100 p-10 shadow-lgF">
            <form action="{{route('authenticate')}}" method="post" class="flex flex-col gap-y-5" autocomplete="off">
                @csrf
                <div class="flex flex-col">
                    <label class="text-lg font-semibold" for="emailF">Email</label>
                    <input type="text" class="border border-gray-300 rounded-lg py-1.5 px-4" id="email" name="email"/>
                </div>
                <div class="flex flex-col">
                    <label class="text-lg font-semibold" for="password">Password</label>
                    <input type="password" class="border border-gray-300 rounded-lg py-1.5 px-4" id="password"
                           name="password"/>
                </div>
                <div class="flex flex-col">
                    <button type="submit" class="bg-primary text-white py-2 rounded-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
