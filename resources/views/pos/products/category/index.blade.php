<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Category Index</title>
</head>
<body>
    @if (empty($categorylist))
        No Product Category in the database

    @else
    <table>        
        <thead>
            <Th>Product Category Id</Th>
            <th>Category Name</th>
            <Th>Description</Th>
            <Th>Tax Rate</Th>
            <Th>Pricing Rule</Th>
            <Th>Action</th>
        </thead>
        <tbody>
            @foreach ($categorylist as $category)
                <tr>
                    <td>{{$category->PRODUCT_CATEGORY_ID}}</td>
                    <td>{{$category->CATEGORY_NAME}}</td>
                    <td>{{$category->DESCRIPTION}}</td>
                    <td>{{$category->TAX_RATE}}</td>
                    <td>{{$category->PRICING_RULE}}</td>
                    <td><a href="{{url('/pos/products/category/' . $category->PRODUCT_CATEGORY_ID . '/edit')}}">Edit</a></td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
            @endif
</body>
</html>