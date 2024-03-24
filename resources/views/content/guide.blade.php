@extends('main')

@section('title-header')
    <h1 class="fs-1 text-uppercase hit-border m-0 p-0 mb-1" style="line-height: 30px; font-family: poppins-bold; color: #2252AB" >
        Guide <br>
        Page
    </h1>
    <p class="ms-1" style="font-size: 10px; width: 15%" >
        A guide page instructs users in HTML article formatting.
    </p>
@endsection
@section('content')
    <div class="container-fluid p-0 mt-2" style="height: 80vh; overflow-y: auto">
        <h4 class="m-0" >
            costume Tag and class HTML for article
        </h4>
        <p class="text-muted m-0" >Writen by Riko</p>
        
        <hr class="w-100" style="outline: 1px solid #2252AB; opacity: 100%" >

        <h1 class="p-0 m-0" >TAGS</h1>
        <div class="ms-0" >
            <p class="text-muted m-0 p-0 w-75" style="font-size: 13px;" >HTML tags are markers used in web development to define the structure and content of a webpage, recognizable by symbols such as "<" and ">".</p>
        </div>

        <h3 class="m-0 mt-3" >&lt;Par&gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: Parent</p>
            <p class="text-muted p-0 w-75" style="font-size: 13px;" >This is the parent or container tag in HTML, commonly used to contain child elements, with a custome property for additional bottom margin. Its attributes do not affects the text it contain.</p>
        </div>

        <h3 class="m-0 mt-3" >&lt;par-title&gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: Child</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >
                This is the child or text container tag in HTML, typically employed to contain text, used to increase text size and function as paragraph titles. Notably, this tag affects the appearance of the text it contain, its role as a paragraph title to users.</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >example:</p>
            <span class="m-0 p-0" >Hello World</span> > <span style="    font-size: 20px; font-weight: bold;" >Hello World</span>
        </div>

        <h3 class="m-0 mt-3" >&lt;par-sub&gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: Child</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is the child or text container tag in HTML, commonly used to contain text with a property as standard or regular text size. It directly affects the text it contain, providing additional explanations for titles to the user.</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >example:</p>
            <span class="m-0 p-0" >Hello World</span> > <span style="    font-size: 17px;" >Hello World</span>
        </div>

        <h3 class="m-0 mt-3" >&lt;par-con&gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: Child</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >
                This is the child or text container tag in HTML, used to contains text with a property to turn the text faded or grayish and slightly smaller then the subtitle. Its purpose is to affect the text it contains, typically provide information within an article.</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >example:</p>
            <span class="m-0 p-0" >Hello World</span> > <span style="    font-size: 14px; color: grey;" >Hello World</span>
        </div>

        <h3 class="m-0 mt-3" >&lt;par-ext&gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: Child</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is the child or text container tag in HTML, equipped with a property to turn text faded or grayish and at a smaller size. its to display references and credits to the user, it directly affects the appearance of the text.</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >example:</p>
            <span class="m-0 p-0" >Hello World</span> > <span style="    font-size: 11px; color: grey;" >Hello World</span>
        </div>

        <h1 class="p-0 pt-5 m-0" >CLASS</h1>
        <div class="ms-0" >
            <p class="text-muted m-0 p-0 w-75" style="font-size: 13px;" >A class is a collective grouping of elements that share common characteristics or styling. Identified by quotation marks, classes reside within tags and can encompass any number of elements.</p>
        </div>

        <h3 class="m-0 mt-3" >&lt;# class="Left" &gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: property</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is a property of a tag, typically used to position text to the left side of the page.</p>
        </div>

        <h3 class="m-0 mt-3" >&lt;# class="right" &gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: property</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is a property of a tag, often used to align text to the right side of the page.</p>
        </div> 

        <h3 class="m-0 mt-3" >&lt;# class="center" &gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: property</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is a property of a tag, commonly place the text to center-align text on a webpage.</p>
        </div>  

        <h3 class="m-0 mt-3" >&lt;# class="justify" &gt;</h3>
        <div class="ms-3" >
            <p class="m-0" >Class: property</p>
            <p class="text-muted m-0 w-75" style="font-size: 13px;" >This is a property of a tag, frequently employed to justify text, it aligns evenly along both the left and right margins of the page.</p>
        </div>

    </div>
@endsection