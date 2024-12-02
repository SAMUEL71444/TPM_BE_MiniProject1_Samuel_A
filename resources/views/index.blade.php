<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items List</title>
</head>

<body>
    <h1>Daftar Items</h1>
    @if($items->count())
    <ul>
        @foreach($items as $item)
        <li>{{ $item->name }} - {{ $item->description }}</li>
        @endforeach
    </ul>
    @else
    <p>Tidak ada items yang ditemukan.</p>
    @endif
</body>

</html>