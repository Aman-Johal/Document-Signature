<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>
    <h1>Form Submission Result</h1>
    <p><strong>First Name:</strong> {{ $first_name }}</p>
    <p><strong>Last Name:</strong> {{ $last_name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>

    <p><strong>Uploaded File:</strong></p>
    @if ($file_path)
        <a href="{{ Storage::url($file_path) }}" target="_blank">View Uploaded File</a>
    @else
        <p>No file uploaded.</p>
    @endif
</body>
</html>
