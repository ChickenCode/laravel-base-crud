<script src="{{asset('js/app.js')}}"></script>

<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf

    @method('PUT')

    @include('components.errors')

    <label for="title">Name:</label>
    <input type="text" name="title" id="title" value="{{$comic->title}}">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description" value="{{$comic->description}}">

    <label for="thumb">Thumbnail url:</label>
    <input type="text" name="thumb" id="thumb" value="{{$comic->thumb}}">

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" min="0" value="{{$comic->price}}">

    <label for="series">Series:</label>
    <input type="text" name="series" id="series" value="{{$comic->series}}">

    <label for="sale_date">Sale date:</label>
    <input type="date" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">

    <label for="type">Type:</label>
    <input type="text" name="type" id="type" value="{{$comic->type}}">

    <input type="submit" value="invia">
</form>

<a href="{{route('comics.index')}}">Back to index</a>
