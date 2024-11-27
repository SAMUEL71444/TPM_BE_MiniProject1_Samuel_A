<!DOCTYPE html>
<html>

<head>
    <title>Item List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 50%;
            margin: 0 auto;
        }

        .item {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Items List</h1>
        <a href="{{ route('showAddItemForm') }}">Add New Item</a>
        <ul>
            @foreach ($items as $item)
            <li class="item">
                <h3>{{ $item->name }}</h3>
                <p>{{ $item->description }}</p>
                <small>Created at: {{ $item->created_at }}</small>
            </li>
            @endforeach
        </ul>
    </div>
</body>

</html>