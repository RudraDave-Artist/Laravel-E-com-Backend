<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<style>
      form{
            width:600px;
            height:300px;
            margin:auto;
            display:flex;
            flex-direction:column;
            align-items:center;
        }
        label{
            margin-bottom:10px;
        }
    </style>
<body>
    <form action="{{route('addcat')}}" method="post">
    @csrf
    <h2>Add Category</h2>
    <label>
        Category Name:
        <input type="text" placeholder="Enter Category Name" name="name"/>
    </label>
    <label>
        Category Description:
        <input type="text" placeholder="Enter Category Description" name="description"/>
    </label>
    <button type="submit">Add Category</button>
    </form>
</body>
</html>