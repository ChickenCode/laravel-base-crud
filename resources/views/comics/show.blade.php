<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>ID: {{$comic->id}}</h2>
    <h1>Title: {{$comic->title}}</h1>
    <p>Description: {{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
    <p>Series: {{$comic->series}}</p>
    <p>Sale date: {{$comic->sale_date}}</p>
    <p>Type: {{$comic->type}}</p>
    
</body>
</html>

