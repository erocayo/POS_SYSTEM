<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <h3>Edit Product</h3>

    <form action="{{ url('/pos/products/'.$productlist->PRODUCT_ID.'/update') }}" method="post">
        @csrf

        <label>Product Name</label>
        <input type="text" name="PRODUCT_NAME" value="{{ $productlist->PRODUCT_NAME }}">
        <br>

        <label>Description</label>
        <input type="text" name="DESCRIPTION" value="{{ $productlist->DESCRIPTION }}">
        <br>

        <label>Price</label>
        <input type="text" name="PRICE" value="{{ $productlist->PRICE }}">
        <br>

        <label>Stock Level</label>
        <input type="text" name="STOCK_LEVEL" value="{{ $productlist->STOCK_LEVEL }}">
        <br>

        <label>Category</label>
        <select name="PRODUCT_CATEGORY_ID">
            @foreach($categorylist as $category)
                <option 
                    value="{{ $category->PRODUCT_CATEGORY_ID }}" 
                    {{ $category->PRODUCT_CATEGORY_ID == $productlist->PRODUCT_CATEGORY_ID ? 'selected' : '' }}>
                    {{ $category->CATEGORY_NAME }}
                </option>
            @endforeach
        </select>
        <br>

        <button type="submit">Update Product</button>
    </form>

    <a href="{{ url('/pos/products') }}">Go Back</a>
</body>
</html>
