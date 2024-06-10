<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         table{
            width:80%;
            margin:20px auto;
            text-align:center;
        }
        form{
            width: 100%;
            display:flex;
            justify-content:center;
            align-items:center;
        }
        </style>
</head>
<body>
    <h2 style="text-align:center">Product List</h2>
    <table border=1px >
        <tr>
            <th>Product Image</th>
            <th>Product Title</th>
            <th>Product Description</th>
            <th>Product Original Price</th>
            <th>Product Discounted Price</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $product)
        <tr>
            <td><img src="{{$product->image}}" style="width:120px; height:100px"/></td>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->orig_price}}</td>
            <td>{{$product->disc_price}}</td>
            <td><a href="{{route('editproduct',['id'=>$product->id])}}">Edit</a>|
            <a href="{{route('deleteproduct',['id'=>$product->id])}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    <form action="{{route('admin')}}" method="get">
    <button type="submit">Add New Product</button>
    </form>
</body>
</html>