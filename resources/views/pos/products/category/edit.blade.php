<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product Category</title>
</head>
<body>
    <h3> Edit Product Category</h3>

    <form action="{{ url('/pos/products/category/'.$categorylist->PRODUCT_CATEGORY_ID.'/update') }}" method="post">
        @csrf
        <label>Category Name</label>
        <input type="text" name="CATEGORY_NAME" value="{{ $categorylist->CATEGORY_NAME}}">      
        <br>
        <label>Description</label>
        <input type="text" name="DESCRIPTION" value="{{ $categorylist->DESCRIPTION}}">       
        <br>
        <label>Tax Rate</label>
        <input type="text" name="TAX_RATE" value="{{ $categorylist->TAX_RATE }}">
        <br>
        <label>Pricing Rule</label>
<select name="PRICING_RULE">
    @foreach($rulelist as $rule)
        <option value="{{ $rule }}" {{ $categorylist->PRICING_RULE == $rule ? 'selected' : '' }}>
            {{ $rule }}
        </option>
    @endforeach
</select>
<br>
        <button type="submit">Edit Product Category</button>
    </form>
    
    <a href="{{ url('/pos/products/category') }}">Go Back</a>
</body>
</html>