<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
</head>
<body>
    Are you sure you want to delete the product "{{$productlist[0]->PRODUCT_NAME}}"?
    <a href="{{ url('/pos/products/'.$productlist[0]->PRODUCT_ID.'/destroy') }}">Yes</a>
    <a href="{{ url('/pos/products')}}">No</a>
</body>
</html>