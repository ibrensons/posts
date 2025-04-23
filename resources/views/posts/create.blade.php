<h1>Title</h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post forma</title>
</head>

<body>

    <h1>Create post</h1>
    <form action="/posts" method="post">
        @csrf
        <div>
            <input name="title" placeholder="Enter title ...">
        </div>
        <div>
            <textarea name="description" placeholder="Enter description ..."></textarea>
        </div>
        <div>
            <input type="submit" value="Izveidot">
        </div>
    </form>
</body>

</html>