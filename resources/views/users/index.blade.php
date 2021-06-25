@extends('layouts.app')
@section('css')
    <link href="{{ asset('public/dist/DataTables/DataTables-1.10.25/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    <div class="grid md:grid-cols-2">
        <div>
            <a href="{{ route('user.create') }}"
                class="float-left px-4 py-2 rounded mb-2 text-gray-50 bg-indigo-500 border border-indigo-700 hover:bg-indigo-700">Add</a>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 scrollBar">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200" id="table">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Email
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Phone
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Create Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('public/dist/DataTables/DataTables-1.10.25/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/js/user.js') }}"></script>
@endsection
