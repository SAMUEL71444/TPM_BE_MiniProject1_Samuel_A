<form action="{{ route('deleteGuest', ['guest_id' => $guest->id]) }}" method="POST">
    @csrf
    <button type="submit">Delete Guest</button>
</form>