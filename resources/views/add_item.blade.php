<!DOCTYPE html>
<html>

<head>
    <title>Add Item</title>
</head>

<body>
    <h1>Add New Item</h1>
    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif
    <form action="{{ route('storeItem') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <br><br>
        <button type="submit">Add Item</button>
    </form>
</body>

</html>