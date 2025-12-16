<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This Month's Transactions</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- NAVBAR (copied style) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(to right,  #FF3F3F, #FF4500 , #FF7F50, #FFA500, #FFD700);">
        <div class="container-fluid">
            <span class="navbar-brand">POS System</span>

            <div class="d-flex">
                <a href="{{ url('pos/manager/dashboard') }}" class="btn btn-light text-primary me-2">Dashboard</a>

                <form action="{{ url('/pos/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-light text-primary">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container mt-4">

        <h2 class="mb-4 text-center">This Month's Transactions</h2>

        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover align-middle text-center">
                <thead>
                    <tr>
                        <th>Transaction ID</th>
                        <th>User</th>
                        <th>Confirmed At</th>
                        <th>Status</th>
                        <th>Grand Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $t)
                    <tr>
                        <td>{{ $t->SALE_TRANSACTION_ID }}</td>
                        <td>{{ $t->USERNAME }}</td>
                        <td>{{ \Carbon\Carbon::parse($t->confirmed_at)->format('M d, Y h:i A') }}</td>
                        <td>{{ ucfirst($t->STATUS) }}</td>
                        <td>₱{{ number_format($t->grand_total, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        <div class="text-center mt-4">
            <a href="{{ url('pos/manager/dashboard') }}" class="btn btn-secondary">Go Back</a>
        </div>

    </div>

</body>

</html>