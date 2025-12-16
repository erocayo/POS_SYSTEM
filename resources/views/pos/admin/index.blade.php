<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark" 
     style="background: linear-gradient(to right, #FF3F3F, #FF4500 , #FF7F50, #FFA500, #FFD700);">
    <div class="container-fluid">
        <span class="navbar-brand">POS SYSTEM</span>

        <div class="d-flex">
            <form action="{{ url('/pos/logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-light text-primary">
                    Logout
                </button>
            </form>
        </div>
    </div>
</nav>

    <!-- PAGE CONTENT -->
    <div class="container mt-4">

        <div class="p-4 shadow rounded bg-light border">

            <h3 class="mb-3">Welcome, <strong>{{ $username }}</strong></h3>

            <div class="list-group mb-3">

                <a href="{{ url('pos/user') }}" class="list-group-item list-group-item-action">
                    👥 View Users
                </a>

                <a href="{{ url('pos/user/add') }}" class="list-group-item list-group-item-action">
                    ➕ Create User
                </a>

                <a href="{{ url('pos/products/category') }}" class="list-group-item list-group-item-action">
                    🗂️ View Product Categories
                </a>

                <a href="{{ url('/pos/transaction/log') }}" class="list-group-item list-group-item-action">
                    📄 View Transaction Logs
                </a>

            </div>

        </div>
    </div>

</body>

</html>
