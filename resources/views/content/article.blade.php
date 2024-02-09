@extends('main')

@section('title-header')
    <h1 class="fs-1 text-uppercase hit-border m-0 p-0 mb-1" style="line-height: 30px; font-family: poppins-bold; color: #2252AB" >
        Article <br>
        Page
    </h1>
    <p class="ms-1" style="font-size: 10px; width: 15%" >
        Yorem ipsum dolor sit amet, consectetur adipiscing elit.
    </p>
@endsection

@section('content')
    <section class="container-fluid">
        <section class="row mt-3" style="height: 35px" >
            <div class="col-5 ps-0 ">
                <input class="w-100 h-100 ps-2" placeholder="Search title here..." type="text" style="font-size: 15px; border: 2px solid black " >
            </div>
            <div class="col-5 ps-0 ">
                <input class="w-100 h-100 ps-2" placeholder="search author here..." type="text" style="font-size: 15px; border: 2px solid black " >
            </div>
            <div class="col-2 px-0 ">
                <button class="w-100 h-100 text-uppercase search-button" style="font-family: poppins-bold;"  >Search</button>
            </div>
        </section>
    </section>
    <section class="container-fluid p-0 article-property mt-3">
        {{-- <div class="row p-0 m-0 gx-4" >
            @foreach ($post as $article)
                <div class="col-3 py-4" style="height: 300px">
                    <div class="container w-100 h-100 p-0 bg-light shadow-sm" style="border-radius: 8px;">
                        <div style="height: 50%; background-image: url('{{ asset('storage/' . $article->image) }}'); border-radius: 8px 8px 0px 0px" class="image-container">
                        </div>
                        <div style="height: 50%" class="box p-2 d-flex flex-column justity-content-between">
                            <p class="m-1 font-xs" style="font-family: nunito">{{ $article->date }}</p>
                            <p class="m-1 font-s h-100">{{ $article->title }}</p>
                            <a href="/article/{{ $article->id }}">
                                <button class="btn mt-2 w-100 font-s btn-outline-primary">Selengkapnya</button>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}


        @foreach ($post as $article)
        <div class="box shadow-sm">
            <section class="d-flex justify-content-between p-1 article-image" style="height: 55%; background: linear-gradient(226deg, rgba(0, 0, 0, 0.40) 0%, rgba(0, 0, 0, 0) 30%), url('{{ asset('storage/' . $article->image) }}'); background-position: center; background-size:cover" >
                <div class="w-25 h-25 d-flex justify-content-center align-items-center rounded-pill bg-black text-white " style="font-size: 12px " >
                    {{ $article->status }}
                </div>
                <div>
                    <button class="btn text-white " type="button" id="dropdownMenuButton{{ $article->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $article->id }}">
                        <li><button class="dropdown-item" type="button" id="actionDropdown{{ $article->id }}">View</button></li>
                        <li><button class="dropdown-item" type="button" id="anotherActionDropdown{{ $article->id }}">Edit</button></li>
                        <li><button class="dropdown-item" type="button" id="somethingElseDropdown{{ $article->id }}">Delete</button></li>
                      </ul>
                </div>
            </section>
            <section class="w-100 p-1" style="height: 45%">
                <p class="p-0 m-0" style="font-size: 10px;" >
                    {{ $article->date }} | {{ $article->author }}
                </p>
                <h6 class="p-0 m-0" style="font-family: poppins-bold">
                    {{ $article->title }}
                </h6>
            </section>
        </div>
        @endforeach
    </section>
    
    <div class="plus-button" >
        <a class="w-100 h-100" href="/add">
            <button class="w-100 h-100 rounded-circle search-button " >+</button>
        </a>
    </div>
@endsection