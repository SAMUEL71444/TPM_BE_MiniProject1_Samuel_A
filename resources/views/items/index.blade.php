<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Items</title>
</head>

<body>
    <h1>Daftar Items</h1>
    <a href="{{ route('items.create') }}">
        <button type="button">Add Item</button>
    </a>
    @if($items->count())
    <ul>
        @foreach($items as $item)
        <li>
            {{ $item->name }} - {{ $item->description }}
            <a href="{{ route('items.edit', $item->id) }}">
                <button type="button">Edit</button>
            </a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada items yang ditemukan.</p>
    @endif
</body>

</html>