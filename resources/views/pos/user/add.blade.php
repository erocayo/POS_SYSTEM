<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>
    <h3>Add User</h3>

    <form action="{{ url('/pos/user/create') }}" method="post">
        @csrf
        <label>First Name</label>
        <input type="text" name="FIRST_NAME" required>
        <br>

        <label>Last Name</label>
        <input type="text" name="LAST_NAME" required>
        <br>

        <label>Username</label>
        <input type="text" name="USERNAME" required>
        <br>

        <label>Password</label>
        <input type="password" name="PASSWORD_HASH" required>
        <br>

        <label>Role</label>
        <select name="ROLE_ID" required>
            <option value="">-- Select Role --</option>
            @foreach($roles as $role)
                <option value="{{ $role->ROLE_ID }}">{{ $role->ROLE_NAME }}</option>
            @endforeach
        </select>
        <br>

        <label>Address</label>
        <input type="text" name="ADDRESS">
        <br>

        <label>Contact Number</label>
        <input type="text" name="CONTACT_NUMBER">
        <br>

        <label>Admin</label>
        <select name="ADMIN_ID">
            <option value="">None</option>
            @foreach($admins as $admin)
                <option value="{{ $admin->USER_ID }}">{{ $admin->USERNAME }}</option>
            @endforeach
        </select>
        <br>

        <button type="submit">Add User</button>
    </form>

    <a href="{{ url('/pos/user') }}">Go Back</a>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const roleSelect = document.querySelector('select[name="ROLE_ID"]');
        const adminSelect = document.querySelector('select[name="ADMIN_ID"]');
        const restrictedRoles = ['2', '3', '4']; // cashier, manager, inventory, etc.

        function updateAdminRequired() {
            if (restrictedRoles.includes(roleSelect.value)) {
                adminSelect.required = true;
            } else {
                adminSelect.required = false;
                adminSelect.style.border = "";
            }
        }

        // Run once when the page loads
        updateAdminRequired();

        // Run whenever the user changes the role
        roleSelect.addEventListener('change', updateAdminRequired);
    });
    </script>
</body>
</html>
