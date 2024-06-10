<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width:600px;
            height:300px;
            margin:auto;
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        label,button{
            margin-top:20px;
        }
        </style>

</head>
<body>
    <form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <h1>Add Product</h1>
        <label>Select Product Category:
            <Select name="category">
                @foreach ($data as $category)
                <option>{{$category->title}}</option>
                @endforeach
                </Select>
        </label>
        <label>Product Title:
            <input type="text" placeholder="Enter Product Title" name="title"/>
        </label>
        <label>Product Image:
            <input type="file" name="image"/>
        </label>
        <label>Product Description:
            <input type="text" placeholder="Enter Product Description" name="description"/>
        </label>
        <label>Product Original Price:
            <input type="number" placeholder="Enter Product Price" name="original"/>
        </label>
        <label>Product Discounted Price:
            <input type="number" placeholder="Enter Discounted Price" name="discount"/>
        </label>
        <button type="submit">Submit</button>
    </form>
</body>
</html>