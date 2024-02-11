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
    <form action="/article/search" method="get">
        <section class="container-fluid">
            <section class="row mt-3" style="height: 35px" >
                <div class="col-3 ps-0 ">
                    <input class="w-100 h-100 ps-2" name="title" placeholder="Search title here..." type="text" style="font-size: 15px; border: 2px solid black " >
                </div>
                <div class="col-3 ps-0 ">
                    <input class="w-100 h-100 ps-2" name="author" placeholder="search author here..." type="text" style="font-size: 15px; border: 2px solid black " >
                </div>
                <div class="col-3 ps-0 ">
                    <select class="w-100 h-100" name="status"  style="font-size: 15px; border: 2px solid black " >
                        <option value="">All</option>
                        <option value="Public">Public</option>
                        <option value="Draft">Draft</option>
                    </select>
                </div>
                <div class="col-3 px-0 ">
                    <button class="w-100 h-100 text-uppercase search-button" style="font-family: poppins-bold;"  >Search</button>
                </div>
            </section>
        </section>
    </form>
    <section class="container-fluid article-property mt-3">
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
                        <li class="dropdown-hover" >
                            <a class="text-decoration-none" href="/article/{{ $article->id}}">
                                <button class="dropdown-item" style="font-size: 15px;"  type="button" id="actionDropdown{{ $article->id }}">View</button>
                            </a>
                        </li>
                        <li class="dropdown-hover" >
                            <a class="text-decoration-none" href="/edit/{{ $article->id }}">
                                <button class="dropdown-item" style="font-size: 15px;"  type="button" id="anotherActionDropdown{{ $article->id }}">Edit</button>
                            </a>
                        </li>
                        <li class="dropdown-hover" >
                            <form action="/trash/{{$article->id}}" method="POST">
                                @csrf
                                <button class="dropdown-item" style="font-size: 15px;" type="submit"  type="button" id="somethingElseDropdown{{ $article->id }}">Remove</button>
                            </form>
                        </li>
                      </ul>
                </div>
            </section>
            <section class="w-100 p-1" style="height: 45%">
                <p class="p-0 m-0" style="font-size: 10px;" >
                    {{ $article->date }} | {{ $article->author }}
                </p>
                <h6 class="p-0 m-0 mt-2" style="font-family: poppins-bold">
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