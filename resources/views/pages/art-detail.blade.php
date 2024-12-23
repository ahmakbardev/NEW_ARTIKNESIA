@extends('layouts.layout')
@section('content')
    <livewire:detail-art :art="$art" :batch="$batch"></livewire:detail-art>
    <div class="mt-10">
        @if($batch && count($batch->negotiations) > 0)
            <h2 class="text-2xl font-bold ">Nego Periode {{ $batch->batch }}</h2>
            <table class="table-auto border-collapse border border-gray-300 w-full">
                <tbody>
                @foreach($batch->negotiations as $item)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $item->customer->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            {{ \App\Helpers\Universal::idr($item->price) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
