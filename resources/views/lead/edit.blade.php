<!DOCTYPE html>
<html>
<head>
    <title>Edit Lead Form</title>
</head>
<body>
    <h1>Edit Lead {{ $lead->lead_name }}</h1>

    <form action="{{ route('leads.update', $lead) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Lead Name</label>
            <input type="text" name="lead_name" class="form-control" value="{{ $lead->lead_name }}" />
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-select" >
                <option value="New Lead" @if($lead->status === 'New Lead') selected @endif>New Lead</option>
                <option value="NR 1" @if($lead->status === 'NR 1') selected @endif>NR 1</option>
                <option value="NR 2" @if($lead->status === 'NR 2') selected @endif>NR 2</option>
                <option value="NR 3" @if($lead->status === 'NR 3') selected @endif>NR 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="mobile" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile" value="{{ $lead->mobile }}" class="block w-full px-3 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-3">
    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Email:</label>
    <input type="email" id="email" name="email" value="{{ $lead->email }}" class="block w-full px-3 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400   
 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
</div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>
</html>