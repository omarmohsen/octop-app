<form action="{{ route('blog-posts.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required>
    </div>
    <div>
        <label for="content">Content:</label>
        <textarea name="content" id="content" rows="5" required></textarea>
    </div>
    <div>
        <button type="submit">Create Post</button>
    </div>
</form>
