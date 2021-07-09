<form class="delete_form" action="{{route('comics.destroy',  $singleComic->id)}}" method="POST">
    @csrf
    @method('DELETE')

    <input type="submit" value="DELETE">
</form>