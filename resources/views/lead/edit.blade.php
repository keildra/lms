@extends('layout')

@section('content')
<div class="max-w-lg mx-auto mt-10 p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-6 text-center">Edit Lead: {{ $lead->lead_name }}</h1>

    <form action="{{ route('leads.update', $lead) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700">Lead Name</label>
            <input type="text" name="lead_name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" value="{{ $lead->lead_name }}" />
            @error('lead_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Status:</label>
            <select name="status" id="status" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500">
                <option value="New Lead" @if($lead->status === 'New Lead') selected @endif>New Lead</option>
                <option value="NR 1" @if($lead->status === 'NR 1') selected @endif>NR 1</option>
                <option value="NR 2" @if($lead->status === 'NR 2') selected @endif>NR 2</option>
                <option value="NR 3" @if($lead->status === 'NR 3') selected @endif>NR 3</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" value="{{ $lead->mobile }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
            <input type="email" id="email" name="email" value="{{ $lead->email }}" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-500" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font py-2 px-4 rounded">Update</button>
        </div>
    </form>
</div>
@endsection
