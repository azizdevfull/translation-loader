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
    <button type="submit">Save</button>
</form>
