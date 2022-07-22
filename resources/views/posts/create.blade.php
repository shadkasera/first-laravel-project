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
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Title</label> <br>
        <input type="text" id="title" name="title"><br>
        <br><br>
        <label for="description">Description</label> <br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
