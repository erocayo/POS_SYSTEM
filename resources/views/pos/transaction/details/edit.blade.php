<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sale Transaction Detail</title>
</head>
<body>
    <h3>Edit Sale Transaction Detail</h3>

<form action="{{ url('/pos/transaction/' . $SALE_TRANSACTION_ID . '/details/' . $detail->SALE_TRANSACTION_DETAILS_ID . '/update') }}" method="post">
    @csrf
    <label>Product</label>
    <select name="PRODUCT_ID" required>
        @foreach ($productlist as $product)
            <option value="{{ $product->PRODUCT_ID }}" 
                @if($product->PRODUCT_ID == $detail->PRODUCT_ID) selected @endif>
                {{ $product->PRODUCT_NAME }}
            </option>
        @endforeach
    </select>
    <br>

    <label>Quantity</label>
    <input type="number" name="QUANTITY" required min="1" value="{{ $detail->QUANTITY }}">
    <br>

    <button type="submit">Update Detail</button>
</form>

</body>
</html>
