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
    {{-- <div class="container">
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
            <div class="d-flex" >
                <div>
                    <label for="y_offset">y_offset</label>
                    <input id="y_offset" name="y_offset" type="number">
                </div>
                <div>
                    <label for="x_offset">x_offset</label>
                    <input id="x_offset" name="x_offset" type="number">
                </div>
                <div>
                    <label for="size">size</label>
                    <input id="size" name="size" type="number">
                </div>
            </div>
            <br>
            <label for="content">content</label>
            <input id="content" name="content" type="text">
            <br>
            <br>
            <button class="btn btn-primary" type="submit" name="submitType" value="submit">Submit</button>
            <button class="btn btn-primary" type="submit" name="submitType" value="draft">Send To Draft</button>

            </form>
    </div> --}}

    <section class="container mt-4" style="padding: 0px 15%">
        <section class="row p-0 m-0" >
            <a class="col-1 p-0 m-0 " href="/article">
                <button class="w-100 h-100 button-hover border-0" >
                    <img src="/image/back-white.png" height="50" alt="">
                </button>
            </a>
            <section class="col-11 p-2" style="border: 2px solid #2252AB;">
                <h1 class="fs-1 ms-1 text-uppercase hit-border m-0 p-0 mb-1" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                    ADD <br>
                    Page
                </h1>
                <p class="p-0 m-0" style="font-size: 10px; width: 25%" >
                    Yorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </section>
        </section>

        <section class="row p-0 m-0 mt-3 pt-3 pb-4 px-3 gx-4 gy-0" style="border: 2px solid #2252AB;">
            <section style="height: 35vh;" class="col-7 m-0">
                <p class="mb-2" >Article View</p>
                <div class="background-view w-100" id="background-view" style="height: 80%;" >

                </div>
            </section>
            <section style="height: 35vh;" class="col-5 m-0">
                <p class="mb-2" >Thumbnail View</p>
                <div class="background-view w-100" id="background-view" style="height: 80%;" >

                </div>
            </section>
            <section class="addedit-wrapper" >
                <section class="w-100 h-100">
                    <button class="w-100 h-100" >
                        +
                    </button>
                </section>
                <section class="w-100 h-100">
                    <p class="mb-2" >Y-Position</p>
                    <input class="w-100 h-50 ps-2" style="font-size: 12px;" type="number">
                </section>
                <section class="w-100 h-100">
                    <p class="mb-2" >X-Position</p>
                    <input class="w-100 h-50 ps-2" style="font-size: 12px;" type="number">
                    
                </section>
                <section class="w-100 h-100">
                    <p class="mb-2" >Zoom</p>
                    <input class="w-100 h-50 ps-2" style="font-size: 12px;" type="number">
                    
                </section>
            </section>
            <section class="col-6 py-2">
                <p class="mb-2" >title</p>
                <input class="w-100 ps-2 " style="height: 60%; font-size: 12px;" type="text">
            </section>
            <section class="col-6 py-2">
                <p class="mb-2" >Author</p>
                <input class="w-100 ps-2 " style="height: 60%; font-size: 12px;" type="text">
            </section>
            <section class="col-12 pt-2">
                <p class="mb-2" >Content</p>
                <textarea class="w-100 ps-2 pt-2" style="min-height: 30vh; font-size:12px;" type="text"></textarea>
            </section>
        </section>
    </section>

    <section class="container mt-4 mb-5" style="padding: 0px 15%">
        <section class="row p-0 m-0" >
            <button class="col-6 p-2" style="border: 2px solid #2252AB;">
                <h1 class="fs-1 text-start ms-1 text-uppercase hit-border m-0 p-0" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                    PUBLISH <br>
                    Page
                </h1>
            </button>
            <button class="col-6 p-2" style="border: 2px solid #2252AB;">
                <h1 class="fs-1 text-start ms-1 text-uppercase hit-border m-0 p-0" style="line-height: 30px; font-family: poppins-bold; color: #2252AB; " >
                    SENT <br>
                    TO DRAFT
                </h1>
            </button>
        </section>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>