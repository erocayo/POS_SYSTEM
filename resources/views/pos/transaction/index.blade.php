<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Transaction Index</title>
</head>

<body>
    @if (empty($transactionlist))
    No Sale Transaction in the database
    @else
    <table>
        <thead>
            <tr>
                <th>Sale Transaction ID</th>
                <th>User ID</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactionlist as $transaction)
            <tr>
                <td>{{ $transaction->SALE_TRANSACTION_ID }}</td>
                <td>{{ $transaction->USER_ID }}</td>
                <td>{{ $transaction->TOTAL_PRICE }}</td>
                <td>{{ $transaction->STATUS }}</td>
                <td>
                    <a href="{{ url('/pos/transaction/'.$transaction->SALE_TRANSACTION_ID.'/details') }}">Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <br>
    <a href="{{ url('/pos/transaction/add') }}">Add Transaction</a>
    <br>
    <a href="{{url('/pos/transaction/log')}}">Log</a>
</body>

</html>