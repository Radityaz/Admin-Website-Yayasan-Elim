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
<body style="overflow-y: auto" >
    <section class="container mt-4" style="padding: 0px 15%">
        <section class="row p-0 m-0" >
            <a class="col-1 p-0 m-0 " href="/draft">
                <button class="w-100 h-100 button-hover border-0" >
                    <img src="/image/back-white.png" height="50" alt="">
                </button>
            </a>
            <section class="col-11 p-2" style="border: 2px solid #2252AB;">
                <h1 class="fs-1 ms-1 text-uppercase hit-border m-0 p-0 mb-1" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                    EDIT <br>
                    Page
                </h1>
                <p class="p-0 m-0" style="font-size: 10px; width: 25%" >
                    Yorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </section>
        </section>

        <form action="/draftedit/update/{{ $article->id }}" method="post" enctype="multipart/form-data">
            @csrf
                <section class="row p-0 m-0 mt-3 pt-3 pb-4 px-3 gx-4 gy-3" style="border: 2px solid #2252AB;">
                    <section style="height: 30vh;" class="col-7 m-0">
                        <p class="mb-2" >Article View</p>
                        <div class="background-view d-flex justify-content-center align-items-center img-preview w-100" style="height: 80%; border: 2px solid #2252AB; background: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); background-position: {{ $article->ArticleImage->x_offset }}px {{ $article->ArticleImage->y_offset }}px; background-size:{{ $article->ArticleImage->size }}%;" id="background-view" >
                        </div>
                    </section>
                    <section style="height: 30vh;" class="col-5 m-0">
                        <p class="mb-2" >Thumbnail View</p>
                        <div class="background-view d-flex justify-content-center align-items-center img-thumbnails w-100" style="height: 80%; border: 2px solid #2252AB; background: url('{{ asset('storage/' . $article->ArticleImage->image) }}'); background-position: {{ $article->ArticleImage->x_offset }}px {{ $article->ArticleImage->y_offset }}px; background-size:{{ $article->ArticleImage->size }}%;" id="background-view" >
                        </div>
                    </section>
                    <section class="addedit-wrapper" >
                        <section class="w-100 h-100">
                            <label class="w-100 h-100 bg-primary " for="image">
                                <img class="w-100 h-100" >
                                    
                                </img>
                            </label>
                            <input hidden type="file" name="image" id="image" onchange="previewImageEdit()">
                        </section>
                        <section class="w-100 h-100">
                            <p class="mb-2" >Y-Position</p>
                            <input class="w-100 h-50 ps-2" name="y_offset" id="yposition" " value="{{ $article->articleImage->y_offset }}"  style="font-size: 12px;" type="number">
                        </section>
                        <section class="w-100 h-100">
                            <p class="mb-2" >X-Position</p>
                            <input class="w-100 h-50 ps-2" name="x_offset" id="xposition" " value="{{ $article->articleImage->x_offset }}" style="font-size: 12px;" type="number">
                            
                        </section>
                        <section class="w-100 h-100">
                            <p class="mb-2" >Zoom</p>
                            <input class="w-100 h-50 ps-2" name="size" id="scalezoom" " value="{{ $article->articleImage->size }}" style="font-size: 12px;" type="number">
                            
                        </section>
                    </section>
                    <section class="col-6 py-2">
                        <p class="mb-2" >title</p>
                        <input class="w-100 ps-2 " name="title" value="{{ $article->title }}" style="height: 60%; font-size: 12px;" type="text">
                    </section>
                    <section class="col-6 py-2">
                        <p class="mb-2" >Author</p>
                        <input class="w-100 ps-2 " name="author" value="{{ $article->author }}" style="height: 60%; font-size: 12px;" type="text">
                    </section>
                    <section class="col-12 pt-2">
                        <p class="mb-2" >Content</p>
                        <textarea class="w-100 ps-2 pt-2" name="content" style="min-height: 30vh; font-size:12px;" type="text">{{ $article->content }}</textarea>
                    </section>
                </section>
            </section>
        
            <section class="container mt-4 mb-5" style="padding: 0px 15%">
                <section class="row p-0 m-0" >
                    <button class="col-4 p-2" type="submit"  name="submitType" value="draft" style="border: 2px solid #2252AB;">
                        <h1 class="fs-1 text-start ms-1 text-uppercase hit-border m-0 p-0" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                            SAVE <br>
                            CHANGE
                        </h1>
                    </button>
                    <button class="col-4 p-2" type="submit" name="submitType" value="submit" style="border: 2px solid #2252AB;">
                        <h1 class="fs-1 text-start ms-1 text-uppercase hit-border m-0 p-0" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                            PUBLISH <br>
                            ARTICLE
                        </h1>
                    </button>
                    <button class="col-4 p-2 bg-danger text-white" type="submit" name="submitType" value="trash" style="border: 2px solid red;">
                        <h1 class="fs-1 text-start ms-1 text-uppercase  hit-border m-0 p-0" style="line-height: 30px; font-family: poppins-bold;" >
                            SENT <br>
                            TO TRASH
                        </h1>
                    </button>
                </section>
        </form>

    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>