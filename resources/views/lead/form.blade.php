<!DOCTYPE html>
<html>
<head>
    <title>Lead Create Form</title>
</head>
<body>
    <h1>Create Lead</h1>

    <form method="POST" action="{{ route('leads.store') }}">
    @csrf
    <div class="mb-3">
        <label>Lead Name</label>
        <input type="text" name="lead_name" class="form-control" required>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
        <label for="status">Status:</label>
        <select name="status" id="status" class="form-select">
            <option value="New Lead">New Lead</option>
            <option value="NR 1">NR 1</option>
            <option value="NR 2">NR 2</option>
            <option value="NR 3">NR 3</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="mobile" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Mobile Number:</label>
        <input type="text" id="mobile" name="mobile" class="block w-full px-3 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400   
 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-3">
        <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-400">Email:</label>
        <input type="email" id="email" name="email" class="block   
 w-full px-3 py-2 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-400   
 dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create Lead</button>
    </div>
</form>

</body>
</html>