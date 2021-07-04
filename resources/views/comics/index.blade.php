@foreach ($comics as $singleComic)
    <p>{{$singleComic->title}}</p>
    <p>{{$singleComic->description}}</p>
@endforeach