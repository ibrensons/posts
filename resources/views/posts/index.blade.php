<h1>Title</h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Posts</h1>
    <ul>
        @foreach ($posts as $post)
        <li>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
        </li>
        @endforeach
    </ul>
</body>

</html>