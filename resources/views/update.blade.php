<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Item</title>
</head>

<body>
    <h1>Update Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $item->name }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $item->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>

</html>