<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
    <h1>Submit Your Information</h1>
    <form action="{{ route('generate.pdf') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="file">Upload File:</label>
        <input type="file" id="file" name="file"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
