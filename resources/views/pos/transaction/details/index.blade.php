<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Details</title>
</head>

<body>
<h3>Sale Transaction Info</h3>
<table>
    <thead>
        <tr>
            <th>Sale Transaction ID</th>
            <th>User ID</th>
            <th>Total Price</th>
            <th>Status</th>
            @if($transaction->STATUS === 'pending')
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $transaction->SALE_TRANSACTION_ID }}</td>
            <td>{{ $transaction->USER_ID }}</td>
            <td>{{ $transaction->TOTAL_PRICE }}</td>
            <td>{{ $transaction->STATUS }}</td>
            <td>
                @if($transaction->STATUS === 'pending')
                    <a href="{{ url('/pos/transaction/'.$transaction->SALE_TRANSACTION_ID.'/confirm') }}">Confirm</a>
|
                    <a href="{{ url('/pos/transaction/'.$transaction->SALE_TRANSACTION_ID.'/cancel') }}">Cancel</a>
                @endif
            </td>
        </tr>
    </tbody>
</table>

<h3>Transaction Details</h3>
    @if(count($detailslist) === 0) 
        No Details in the Transaction
    @else
    <table>
    <thead>
        <tr>
            <th>Sale Transaction ID</th>
            <th>Detail ID</th>
            <th>Product</th>
            <th>Unit Price</th>
            <th>Quantity</th>
            <th>Total</th>
            @if($transaction->STATUS === 'pending')
            <th>Action</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @foreach ($detailslist as $detail)
        <tr>
            <td>{{ $detail->SALE_TRANSACTION_ID }}</td>
            <td>{{ $detail->SALE_TRANSACTION_DETAILS_ID }}</td>
            <td>{{ $detail->PRODUCT_NAME}}</td>
            <td>{{ $detail->UNIT_PRICE }}</td>
            <td>{{ $detail->QUANTITY }}</td>
            <td>{{ $detail->TOTAL }}</td>
            <td>@if($transaction->STATUS === 'pending')
                    <a href="{{ url('/pos/transaction/'.$transaction->SALE_TRANSACTION_ID.'/details/'.$detail->SALE_TRANSACTION_DETAILS_ID.'/edit') }}">Edit</a>
|
                    <a href="{{ url('/pos/transaction/'.$transaction->SALE_TRANSACTION_ID.'/details/'.$detail->SALE_TRANSACTION_DETAILS_ID.'/destroy') }}">Delete</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    @endif
    <br>
                @if($transaction->STATUS === 'pending')
                <a href="{{ url('/pos/transaction/'.$SALE_TRANSACTION_ID.'/details/add') }}">Add Detail</a>
                @endif
                <br>
                <a href="{{ url('/pos/transaction/') }}">Go back</a>

    
</body>

</html>