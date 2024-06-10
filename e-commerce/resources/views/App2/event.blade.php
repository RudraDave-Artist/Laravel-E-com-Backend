<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin:auto;
            width:300px;
        }
    </style>
</head>
<body>
    <div>Select 
        <form action="{{route('event')}}" method="post">
        <select name="options">
            <option>A</option>
            <option>B</option>
            <option>C</option>
            <option>D</option>
        </select>
    </form>
</div>
</body>
</html>