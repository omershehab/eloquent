<h1>edit items</h1>
<br><br>
<form action="{{ route('items.update', $item->id) }}" method="post">
    @csrf
    @method('patch')
    <input type="text" name="title" value="{{ $item->title }}"><br>
    <input type="text" name="body" value="{{ $item->body }}"><br>
    <button type="submit">update</button>
</form>
