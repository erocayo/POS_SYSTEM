<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Reports</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: linear-gradient(to right, #FF3F3F, #FF4500 , #FF7F50, #FFA500, #FFD700);">
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
        <!-- Go Back Button -->
        <div class="text-left mt-4">
            <a href="{{ url('pos/manager/dashboard') }}" class="btn btn-secondary">Go Back</a>
        </div>

        <!-- Monthly Sales Summary -->
        <h2 class="mb-3">Monthly Sales Summary</h2>
        <div class="table-responsive mb-5">
            <table class="table table-bordered table-striped table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Month</th>
                        <th>Transactions</th>
                        <th>Subtotal</th>
                        <th>Tax</th>
                        <th>Line Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monthlySummary as $s)
                    <tr>
                        <td>{{ $s->month }}</td>
                        <td>{{ $s->transaction_count }}</td>
                        <td>{{ number_format($s->subtotal, 2) }}</td>
                        <td>{{ number_format($s->tax_amount, 2) }}</td>
                        <td>{{ number_format($s->line_total, 2) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Product Stock Summary -->
        <h2 class="mb-3">Product Stock Summary - {{ \Carbon\Carbon::now()->format('F Y') }}</h2>
        <div class="table-responsive mb-4">
            <table class="table table-bordered table-striped table-hover align-middle text-center">
                <thead class="table-primary">
                    <tr>
                        <th>Product</th>
                        <th>Beginning Stock</th>
                        <th>Stock Out</th>
                        <th>Ending Stock</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productSummary as $p)
                    <tr>
                        <td>{{ $p['product_name'] }}</td>
                        <td>{{ $p['beginning_stock'] }}</td>
                        <td>{{ $p['stock_out'] }}</td>
                        <td>{{ $p['ending_stock'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>
