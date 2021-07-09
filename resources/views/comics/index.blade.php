

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <a href="{{route('comics.create')}}">Inserisci un nuovo fumetto</a>


    <form action="{{route('comics.filter')}}" method="POST">
        @csrf
        <label for="inputTitle">Title</label>
        <input type="text" name="inputTitle" id="title">
        <br>
        <label for="inputDescription">Description</label>
        <input type="text" name="inputDescription" id="description">
        <br>
        <label for="inputType">Type</label>
        <input type="text" name="inputType" id="type">

        <br>
        <input type="submit" name="" id="">
    </form>

@foreach ($viewData as $singleComic)
    <h1>{{$singleComic->id}}</h1>
    <p>{{$singleComic->title}}</p>
    <p>{{$singleComic->description}}</p>
    <p>{{$singleComic->price}}</p>
    <p>{{$singleComic->text}}</p>
    <p>{{$singleComic->series}}</p>
    <p>{{$singleComic->sale_date}}</p>
    <p>{{$singleComic->type}}</p>
    <p><a href="{{route('comics.show', $singleComic->id)}}">Mostra dettaglio</a></p>
    @include('components.delete', ["singleComic" => $singleComic])
@endforeach

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

