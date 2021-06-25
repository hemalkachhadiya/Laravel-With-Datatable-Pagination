@extends('layouts.app')
@section('content')
    <div class="md:grid md:grid-cols-4">
        <div class="md:col-span-1"></div>
        <div class="md:col-span-2 shadow sm:rounded-md sm:overflow-hidden">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="px-4 py-3 bg-gray-100 sm:px-6">
                    <h1 class="font-bold text-xl">Create User</h1>
                </div>
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2 block w-full sm:text-sm border border-gray-300 rounded-md ">
                        </div>
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Email
                        </label>
                        <div class="mt-1">
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2 block w-full sm:text-sm border border-gray-300 rounded-md ">
                        </div>
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Phone
                        </label>
                        <div class="mt-1">
                            <input type="number" name="phone" value="{{ old('phone') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2 block w-full sm:text-sm border border-gray-300 rounded-md ">
                        </div>
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <div class="mt-1">
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2 block w-full sm:text-sm border border-gray-300 rounded-md ">
                        </div>
                    </div>
                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-700">
                            Confirm Password
                        </label>
                        <div class="mt-1">
                            <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 p-2 block w-full sm:text-sm border border-gray-300 rounded-md ">
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-100 sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                    <a href="{{ route('user.index') }}"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-500 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Back
                    </a>
                </div>
            </form>
        </div>
        <div class="md:col-span-1"></div>
    </div>
@endsection
