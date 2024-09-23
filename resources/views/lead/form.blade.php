@extends('layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Create Lead</h1>

    <form method="POST" action="{{ route('leads.store') }}">
        @csrf
        
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Lead Name</label>
            <input type="text" name="lead_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
            @error('lead_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
            <select name="status" id="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500">
                <option value="New Lead">New Lead</option>
                <option value="NR 1">NR 1</option>
                <option value="NR 2">NR 2</option>
                <option value="NR 3">NR 3</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Create Lead</button>
        </div>
    </form>
</div>
@endsection
