<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact Form</title>
</head>
<body>
    <h1>Edit Contact {{ $contact->contact_name }}</h1>

    <form action="{{ route('contacts.update', $contact) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Contact Name</label>
            <input type="text" name="contact_name" class="form-control" value="{{ $contact->contact_name }}" />
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label>Lead Id</label>
            <input type="text" name="lead_id" class="form-control" value="{{ $contact->lead_id }}" />
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="converted_status">Converted Status:</label>
            <select name="converted_status" id="status" class="form-select" >
                <option value="New Lead" @if($contact->converted_status === 'New Lead') selected @endif>New Lead</option>
                <option value="NR 1" @if($contact->converted_status === 'NR 1') selected @endif>NR 1</option>
                <option value="NR 2" @if($contact->converted_status === 'NR 2') selected @endif>NR 2</option>
                <option value="NR 3" @if($contact->converted_status === 'NR 3') selected @endif>NR 3</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="status">Stage:</label>
            <select name="stage" id="status" class="form-select" >
                <option value="Will Send Ticket" @if($contact->stage === 'Will Send Ticket') selected @endif>Will Send Ticket</option>
                <option value="Closed Won" @if($contact->stage === 'Closed Won') selected @endif>Closed Won</option>
                <option value="Closed Lost" @if($contact->stage === 'Closed Lost') selected @endif>Closed Lost</option>
            </select>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</body>
</html>