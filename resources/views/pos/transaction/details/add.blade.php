<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Transaction Detail</title>
</head>
<body>
    <h3>Add Sale Transaction Detail</h3>

<form action="{{ url('/pos/transaction/' . $SALE_TRANSACTION_ID . '/details/create') }}" method="post">
    @csrf
    <label>Product</label>
    <select name="PRODUCT_ID" required>
        @foreach ($productlist as $product)
            <option value="{{ $product->PRODUCT_ID }}">{{ $product->PRODUCT_NAME }}</option>
        @endforeach
    </select>
    <br>

    <label>Quantity</label>
    <input type="number" name="QUANTITY" required min="1">
    <br>
    <button type="submit">Add Detail</button>
</form>

</body>
</html>