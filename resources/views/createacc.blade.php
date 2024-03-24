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
<body style="overflow: hidden" >
      <section class="container-fluid">
        <section class="row vh-100">
            <div class="col-6 deco-bg p-2 d-flex flex-column justify-content-between">
                <img src="/image/logo.png" height="60" width="60" alt="" srcset="">
                <div>
                    <hr class="hr1" style="width: 30px">
                    <h1 class="display-3 text-uppercase" style="font-family: poppins-bold; line-height: 60px;" >
                        Get <br>
                        The Access
                    </h1>
                </div>
            </div>
            <form action="/signin" method="post" class="col-6 p-2 d-flex flex-column justify-content-between">
                @csrf
                <div class="w-100">
                    <h1 class="display-3 text-uppercase" style="font-family: poppins-bold; line-height: 50px;">
                        Sign up
                    </h1>
                    <hr class="hr2" style="width: 30px">
                    <p class="w-25" style="font-size: 10px">
                        Create a new account with code to start the process.
                    </p>
            
                    <div class="container">
                        <div class="row">
                            <div class="col-12 p-0" style="height: 40px">
                                <input class="w-100 h-100 ps-3" style="font-size: 13px; outline: 2px solid black" name="username" placeholder="Enter Username..." type="text" required>
                            </div>
                            <div class="col-12 p-0 mt-4" style="height: 40px">
                                <input class="w-100 h-100 ps-3" style="font-size: 13px; outline: 2px solid black" name="email" placeholder="Enter email..." type="email" required>
                                <p style="font-size: 13px"  class="text-danger {{ session('error') == 'Invalid username or password' ? 'd-block' : 'd-none'  }}" >Invalid Code</p>
                            </div>
                            <div class="col-11 p-0 mt-4" style="height: 40px">
                                <input class="w-100 h-100 ps-3" style="font-size: 13px; outline: 2px solid black" id="password" name="password" placeholder="Enter Password..." type="password" required>
                            </div>
                            <div class="col-1 p-0 mt-4 bg-black" onclick="togglePassword()">
                                <a type="submit"  class="w-100 h-100 border-0 bg-transparent d-flex justify-content-center align-items-center eye-hover">
                                    <img id="eye1" src="/image/eye-white-cross.png" height="40" alt="" srcset="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a style="font-size: 13px;" href="/signup">Already have account?, click here</a>
                    </div>
                </div>
                <button type="submit" class="text-decoration-none button-hover-signup w-100 border-0 d-flex align-items-center justify-content-between">
                    <h1 class="text-uppercase hit-border-bottom text-white" style="font-family: poppins-bold;">Sign In</h1>
                    <img src="/image/next-white.png" height="70" width="70" alt="">
                </button>
            </form>
            
        </section>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="/js/script.js"></script>

</body>
</html>