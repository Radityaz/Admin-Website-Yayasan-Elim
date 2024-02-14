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
    <div class="container-fluid vh-100 p-0 m-0" style="overflow-y: auto ">
        <nav class="navbar navbar-light bg-light w-100 pe-2" style="position: fixed">
            <div class="container d-flex justify-content-start align-items-center " style="padding: 0px 200px" >
                <a class="navbar-brand" href="/trash">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
                    </svg>
                </a>
                <span class="h5 p-0 m-0" style="font-family: poppins-bold" > {{ $article->title }}</span>
            </div>
        </nav>
        <div class="container" style="margin-top: 5%; padding: 0px 200px" >
            {{-- <img height="350px" style="object-fit: cover; border-radius: 12px;" class="w-100 mb-3 shadow-sm " src="{{ asset('storage/' . $article->ArticleImage->image) }}" alt=""> --}}
            <div class="w-100" style=" height: 350px; background: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); background-position: {{ $article->ArticleImage->x_offset * 2 }}px {{ $article->ArticleImage->y_offset * 2 }}px; background-size:{{ $article->ArticleImage->size }}%;">

            </div>
            <p class="mb-0 mt-2" style="font-family: poppins-bold" >Ditulis oleh {{ $article->author }}</p>
            <div class="mb-5" style="min-height: 50vh; font-size: 12px" >
                {{ $article->content }}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>