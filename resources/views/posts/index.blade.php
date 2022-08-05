<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Add posts</a>

    @if ($posts->count())
    <p>there are {{$posts->count()}} posts</p>
    <table border="1">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>{{ $post->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{ route('posts.edit', $post) }}">edit</a>
                    <button onclick="
                    if(confirm('Are you sure?')){
                        const form = document.getElementById('form-{{ $post->id }}')
                        form.submit()
                    }

                    ">delete</button>

                    <form id="form-{{ $post->id }}" action="{{ route('posts.destroy', $post) }}" method="post">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>no posts found click above to add posts</p>
    @endif

    <script>



    </script>
</body>
</html>
