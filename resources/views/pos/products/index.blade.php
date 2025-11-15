<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Index</title>
</head>
<body>
    @if (empty($productlist))
        No product in the database

    @else
    <table>        
        <thead>
            <Th>Product Id</Th>
            <th>Product Category Id</th>
            <Th>Product Name</Th>
            <Th>Description</Th>
            <Th>Price</Th>
            <Th>Stock Level</Th>
            <Th>Action</th>
        </thead>
        <tbody>
            @foreach ($productlist as $product)
                <tr>
                    <td>{{$product->PRODUCT_ID}}</td>
                    <td>{{$product->PRODUCT_CATEGORY_ID}}</td>
                    <td>{{$product->PRODUCT_NAME}}</td>
                    <td>{{$product->DESCRIPTION}}</td>
                    <td>{{$product->PRICE}}</td>
                    <td>{{$product->STOCK_LEVEL}}</td>
                    <td><a href="{{url('/pos/products/' . $product->PRODUCT_ID . '/edit')}}">Edit</a> |
                    <a href="{{url('/pos/products/' . $product->PRODUCT_ID . '/delete')}}">Delele</a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
            @endif
</body>
</html>