@extends('layouts.control')

@section('title')
    Website Settings
@endsection

@section('content')
<div class="w-full bg-white relative p-3 rounded shadow-lg">
    <h3 class="font-semibold text-lg text-gray-700 mb-6 pl-4">
        Website Settings
    </h3>
    <div class="grid grid-flow-row grid-cols-1 gap-4 pb-12 xl:grid-cols-4 lg:grid-cols-2">
        <a href="add-page">
            <div class="p-3 py-6 rounded  cursor-pointer hover:bg-gray-100 shadow-lg">
                <div class="flex items-center">
                    <div class="w-14 h-14 bg-green-600 flex justify-center items-center text-xl rounded-full text-white md:w-12 md:h-12 shadow-sm">
                        <i class="fas fa-plus"></i>
                    </div>
                    <p class="text-lg ml-4">
                       Add New Page
                    </p>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
