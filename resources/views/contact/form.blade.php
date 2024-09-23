@extends('layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Create Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Contact Name</label>
            <input type="text" name="contact_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
            @error('contact_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Lead ID</label>
            <input type="text" name="lead_id" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
            @error('lead_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="converted_status" class="block text-sm font-medium text-gray-700">Converted Status:</label>
            <select name="converted_status" id="converted_status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500">
                <option value="New Lead">New Lead</option>
                <option value="NR 1">NR 1</option>
                <option value="NR 2">NR 2</option>
                <option value="NR 3">NR 3</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="stage" class="block text-sm font-medium text-gray-700">Stage:</label>
            <select name="stage" id="stage" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500">
                <option value="Will Send Ticket">Will Send Ticket</option>
                <option value="Closed Won">Closed Won</option>
                <option value="Closed Lost">Closed Lost</option>
            </select>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Create Contact</button>
        </div>
    </form>
</div>
@endsection
