<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale Transaction Log Index</title>
</head>

<body>
    @if (empty($loglist))
    No Sale Transaction Log in the database
    @else
    <table>
        <thead>
            <tr>
                <th>Sale Transaction Log ID</th>
                <th>Sale Transaction ID</th>
                <th>Action Type</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loglist as $log)
            <tr>
                <td>{{ $log->SALE_TRANSACTION_LOG_ID }}</td>
                <td>{{ $log->SALE_TRANSACTION_ID }}</td>
                <td>{{ $log->ACTION_TYPE }}</td>
                <td>{{ $log->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    <br>
    <a href="{{url ('/pos/transaction/')}}">Go Back</a>
</body>

</html>