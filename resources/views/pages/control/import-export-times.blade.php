@extends('layouts.control')

@section('title')
    Import/Export Time Slots
@endsection

@section('content')
<div class="w-full bg-white relative p-3 rounded shadow-lg">
    <h3 class="font-semibold text-lg text-gray-700 mb-6 pl-4">
        Import
    </h3>
    <div class="table shadow rounded py-3 px-8 text-sm text-white bg-green-500 hover:bg-green-600 active:bg-green-700">
       <i class="fas fa-file-import"></i> Import
    </div>
</div>
<div class="w-full bg-white relative p-3 rounded shadow-lg mt-4">
    <h3 class="font-semibold text-lg text-gray-700 mb-6 pl-4">
        Export
    </h3>
    <a href="{{ route('export-times') }}"><div class="table shadow rounded py-3 px-8 text-sm text-white bg-blue-500 hover:bg-blue-600 active:bg-blue-700">
       <i class="fas fa-file-export"></i> Export
    </div></a>
</div>
@endsection
