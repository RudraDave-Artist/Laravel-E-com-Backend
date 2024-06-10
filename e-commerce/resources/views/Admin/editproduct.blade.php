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
    <form  action="{{route('updateproduct')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <h1>Edit Product Details</h1>
        <label>Product Title:
            <input type="text" placeholder="Enter Product Title" value="{{$data->title}}" name="title"/>
            <input type="hidden"  value="{{$data->id}}" name="id"/>
        </label>
        <label>Product Image:
            <input type="file" name="image" value="{{$data->image}}"/>
        </label>
        <label>Product Description:
            <input type="text" placeholder="Enter Product Description" value="{{$data->description}}" name="description"/>
        </label>
        <label>Product Original Price:
            <input type="number" placeholder="Enter Product Price" value="{{$data->orig_price}}" name="original"/>
        </label>
        <label>Product Discounted Price:
            <input type="number" placeholder="Enter Discounted Price" value="{{$data->disc_price}}" name="discount"/>
        </label>
        <button type="submit">Update</button>
    </form>
</body>
</html>