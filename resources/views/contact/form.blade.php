<!DOCTYPE html>
<html>
<head>
    <title>Contact Create Form</title>
</head>
<body>
    <h1>Create Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
    @csrf
    <div class="mb-3">
        <label>Contact Name</label>
        <input type="text" name="contact_name" class="form-control" required>
        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
    </div>
    <div class="mb-3">
            <label>Lead Id</label>
            <input type="text" name="lead_id" class="form-control"/>
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    <div class="mb-3">
        <label for="converted_status">Converted Status:</label>
        <select name="converted_status" id="status" class="form-select">
            <option value="New Lead">New Lead</option>
            <option value="NR 1">NR 1</option>
            <option value="NR 2">NR 2</option>
            <option value="NR 3">NR 3</option>
        </select>
    </div>
    <div class="mb-3">
            <label for="status">Stage:</label>
            <select name="stage" id="status" class="form-select" >
                <option value="Will Send Ticket">Will Send Ticket</option>
                <option value="Closed Won">Closed Won</option>
                <option value="Closed Lost"f>Closed Lost</option>
            </select>
        </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Create Lead</button>
    </div>
</form>

</body>
</html>