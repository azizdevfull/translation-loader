<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @error('title')
        <div>{{ $message }}</div>
    @enderror
    <input type="text" name="title" placeholder="Title"> <br>
    @error('content')
        <div>{{ $message }}</div>
    @enderror
    <br>
    <textarea name="content" placeholder="Content"></textarea>
    @error('category_id')
        <div>{{ $message }}</div>
    @enderror
    <input type="text" name="category_id" placeholder="Category ID"> <br>
    <button type="submit">Save</button>
</form>
