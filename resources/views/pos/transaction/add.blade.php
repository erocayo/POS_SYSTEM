<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Sale Transaction</title>
</head>
<body>
    <h3>Add Sale Transaction</h3>

    <form action="{{ url('/pos/transaction/create') }}" method="post">
        @csrf
        <label>Cashier</label>
        <select name="USER_ID" required>
            <option value="">-- Select Cashier --</option>
            @foreach($cashiers as $cashier)
                <option value="{{ $cashier->USER_ID }}">{{ $cashier->USERNAME }}</option>
            @endforeach
        </select>
        <br>
        <button type="submit">Add Sale Transaction</button>
    </form>

    <a href="{{ url('/pos/transaction') }}">Go Back</a>
</body>
</html>
