<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="container">
        <h1 class="fs-1 text-uppercase hit-border m-0 p-0 mb-1" style="line-height: 30px; font-family: poppins-bold; color: #2252AB" >
            ADD <br>
            Page
        </h1>
        <p class="ms-1" style="font-size: 10px; width: 15%" >
            Yorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p>
        <form action="/add/post" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="title">Title</label>
            <input id="title" name="title" type="text">
            <br>
            <label for="author">author</label>
            <input id="author" name="author" type="text">
            <br>
            <label for="image">image</label>
            <input id="image" name="image" type="file">
            <br>
            <label for="content">content</label>
            <input id="content" name="content" type="text">
            <br>
            {{-- <label for="visibility">visibility</label>
            <select name="status" id="visibility">
                <option value="Public">Public</option>
                <option value="Private">Private</option>

            </select> --}}
            <br>
            <button class="btn btn-primary" type="submit" name="submitType" value="submit">Submit</button>
            <button class="btn btn-primary" type="submit" name="submitType" value="draft">Send To Draft</button>

            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>