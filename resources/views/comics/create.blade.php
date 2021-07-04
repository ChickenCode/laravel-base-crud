<form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Name:</label>
    <input type="text" name="title" id="title">

    <label for="description">Description:</label>
    <input type="text" name="description" id="description">

    <label for="thumb">Thumbnail url:</label>
    <input type="text" name="thumb" id="thumb">

    <label for="price">Price:</label>
    <input type="number" name="price" id="price" step="0.01" min="0">

    <label for="series">Series:</label>
    <input type="text" name="series" id="series">

    <label for="sale_date">Sale date:</label>
    <input type="date" name="sale_date" id="series">

    <label for="type">Type:</label>
    <input type="text" name="type" id="type">

    <input type="submit" value="invia">
</form>