<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>

<body>
    <h3>Edit User</h3>

    <form action="{{ url('/pos/user/'.$userlist[0]->USER_ID.'/update') }}" method="post">
        @csrf
        <label>First Name</label>
        <input type="text" name="FIRST_NAME" value="{{ $userlist[0]->FIRST_NAME}}">
        <br>
        <label>Last Name</label>
        <input type="text" name="LAST_NAME" value="{{ $userlist[0]->LAST_NAME}}">
        <br>
        <label>Username</label>
        <input type="text" name="USERNAME" value="{{ $userlist[0]->USERNAME }}">
        <br>
        <label>Password</label>
        <input type="text" name="PASSWORD_HASH" value="{{ $userlist[0]->PASSWORD_HASH }}">
        <br>
        <label>Role</label>
        <select name="ROLE_ID">
            @foreach($roles as $role)
            <option
                value="{{ $role->ROLE_ID }}"
                {{ $role->ROLE_ID == $userlist[0]->ROLE_ID ? 'selected' : '' }}>
                {{ $role->ROLE_NAME }}
            </option>
            @endforeach
        </select>
        <br>
        <label>Address</label>
        <input type="text" name="ADDRESS" value="{{ $userlist[0]->ADDRESS }}">
        <br>
        <label>Contact Number</label>
        <input type="text" name="CONTACT_NUMBER" value="{{ $userlist[0]->CONTACT_NUMBER }}">
        <br>
        <label>Admin</label>
        <select name="ADMIN_ID" id="adminSelect">
            <option value="">-- Select Admin --</option>
            @foreach($admins as $admin)
            <option value="{{ $admin->USER_ID }}">{{ $admin->USERNAME }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Edit User</button>
    </form>
    <a href="{{ url('/pos/user') }}">Go Back</a>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const roleSelect = document.querySelector('select[name="ROLE_ID"]');
            const adminSelect = document.querySelector('select[name="ADMIN_ID"]');
            const userId = "{{ $userlist[0]->USER_ID }}"; // current user’s ID

            if (!roleSelect || !adminSelect) return;

            const restrictedRoles = ['2', '3', '4'];

            function checkAdminRequirement() {
                // Prevent user from selecting themselves
                for (let option of adminSelect.options) {
                    if (option.value === userId) {
                        option.disabled = true;
                        option.textContent += " (You)";
                    }
                }

                // Apply required rule based on role
                if (restrictedRoles.includes(roleSelect.value)) {
                    adminSelect.required = true;
                } else {
                    adminSelect.required = false;
                }
            }

            // Run once on load
            checkAdminRequirement();

            // Run whenever the role changes
            roleSelect.addEventListener('change', checkAdminRequirement);
        });
    </script>
</body>

</html>