<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Item</title>
</head>

<body>
    <h1>Delete Item</h1>
    <form action="{{ route('items.destroy', $item->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <p>Are you sure you want to delete this item?</p>
        <button type="submit">Delete</button>
        <a href="{{ route('items.index') }}">Cancel</a>
    </form>
</body>

</html>