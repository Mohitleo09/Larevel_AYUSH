<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile</h1>

    <form action="{{ route('admin_update_profile') }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

        <!-- Add more input fields for other profile details -->

        <button type="submit">Update Profile</button>
    </form>
</body>
</html>
