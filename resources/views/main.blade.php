<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">

    

</head>
<body>
    <section class="container-fluid">
        <section class="row">
            <section class="col-2 p-0 m-0" >
                <div class="d-flex flex-column flex-shrink-0 p-2 text-white bg-dark vh-100 w-100">
                    <a href="" class="d-flex flex-column align-items-start mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <img src="/image/logo.png" height="60" width="60" alt="" srcset="">
                        <p class="p-0 m-0" style="font-size: 12px" >Welcome</p>
                        <h3 class="p-0 m-0" style="font-family: poppins-bold" >Admin</h3>
                    </a>
                    <hr style="border: 2px solid white; opacity:100%" >
                    <ul class="nav nav-pills flex-column mb-auto">
                      <li class="nav-item">
                        <a href="/article" class="nav-link text-white {{ $page == 'article' ? 'active' : '' }} " aria-current="page">
                          {{-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg> --}}
                          <img class="bi me-2" height="16" src="/image/Article.png" alt="" srcset="">
                          Article
                        </a>
                      </li>
                      <li>
                        <a href="/draft" class="nav-link text-white {{ $page == 'draft' ? 'active' : '' }} ">
                          {{-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg> --}}
                          <img class="bi me-2" height="16" src="/image/Draft.png" alt="" srcset="">
                          draft
                        </a>
                      </li>
                      <li>
                        <a href="/trash" class="nav-link text-white {{ $page == 'trash' ? 'active' : '' }}  ">
                          {{-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg> --}}
                          <img class="bi me-2" height="16" src="/image/Trash.png" alt="" srcset="">
                          Trash
                        </a>
                      </li>
                    </ul>
                    <hr>
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                          <a href="/signup" class="nav-link text-white" aria-current="page">
                            {{-- <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg> --}}
                            <img class="bi me-2" height="16" src="/image/signout.png" alt="" srcset="">
                            Sign Out
                          </a>
                        </li>
                    </ul>
                  </div>
            </section>
            <section class="col-10 p-2 m-0">
              <section class="w-100 top-section" style="height: 15vh" >
                @yield('title-header')
              </section>
                @yield('content')
            </section>
        </section>
    </section>





    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>