<h1>create item</h1>

<br><br>
<form action="{{ route('items.store') }}" method="post">
    @csrf
    <input type="text" name="title" placeholder="title"><br>
    <input type="text" name="body" placeholder="body"><br>
    <button type="submit">Create</button>
</form>
