@extends('layouts.app')

@section('cssarea')

    {{-- .center{
        display: flex;
        flex-wrap: wrap;
        align-items: baseline;

    } --}}

  
    
    a {
        text-decoration: none;
    }
    
    .button123, 
    .button123 i {
        position: relative
    }
    
    .button123 {
        outline: 0;
        white-space: nowrap;
        letter-spacing: 1px;
        
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        
    }
    
    .button123 i {

        margin-right: 5px;
        color : #696969;
        
    }
    
    .button123 span {
        
        display: block;
        vertical-align: middle;
        opacity: 1;
        -webkit-transform: translateY(0);
        -ms-transform: translateY(0);
        -o-transform: translateY(0);
        transform: translateY(0);
        -webkit-transition: all .25s;
        -moz-transition: all .25s;
        -ms-transition: all .25s;
        -o-transition: all .25s;
        transition: all .25s;
    }
    
    .button123:hover span:first-child,
    .button123 span:last-child {
        opacity: 0;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
    }
    
    .button123:hover span:last-child {
        opacity: 1;
        -webkit-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
        -o-transform: translateY(-100%);
        transform: translateY(-100%);
    }
    
    
    .slidedown{
        padding-left: 6rem;
    }
    .flex-last{
        display: flex;
        justify-content: flex-end;
    }







    
    body {
        background-color: #212529; /* Inherit body background color */
    }
    .paginators{
        background-color: white;
    }
    
    .main-data{
        display: flex;
        justify-content: space-between;
        
        flex-direction: row;
        margin-bottom:3rem;
    }
    .btn-round{
        background-color: white;
        border-radius: 5rem;
        width: 60px;
        height: 60px;
    }

    .hidden-paragraph{
        padding-top: 0.67rem;
    }

    .main2:hover .hidden-paragraph {
        display: none;

    }

    .marginer{
        margin:auto;
        padding:1rem;
    }

    .classbig{
        width: 70vw;
        margin-bottom: 1rem;
    }

    .main1 {
        display: flex;
        justify-content: flex-start;
        
    }

    .main21{
        display: flex;
        justify-content: flex-center;
        margin-top: 0.4rem;
        margin-bottom: 1rem;
        flex-direction: column;
        margin-left :0.5rem;
        
    }

    .main21 button{
        width: 6rem;
        height: 5rem;
        border-radius: 1rem solid black;
        margin-right:0.5rem;
        align-items: baseline;
    }



    .flex-last button{
        width: 4rem;
        height: 2.5rem;
        margin-right: 0.5rem;
        color: white;
        border-radius: 0.5rem;
        overflow:hidden;
        
    }

    .hidden-btn-fl{
        display: none;
    }


    .butt-success{
        border: 0.1rem solid green;
        background-color: white;
    }

    .butt-danger{
        background-color:white;
        border : 0.1rem solid red;
        
    }
    
    @include('includes.pagination')


@endsection

@section('content')

<div class="main-data">
    <div class="main1">
        <h1 > Posts </h1>
        
    </div>
    <div class="main2">
        <button onclick=redirectto() ; type="button" class="btn-round    " data-toggle="tooltip" data-placement="top" >
            <p class="hidden-paragraph" > Create </p>

            
            <lord-icon
                src="https://cdn.lordicon.com/wuvorxbv.json"
                trigger="hover"
                state="in-reveal"
                style="width:45px;height:45px">
            </lord-icon>

        </button>
    </div>
</div>

    @if(count($posts) > 0)

        @foreach($posts as $postdata)
        <div class="main-data1">
            <div class="main1">
            <div class="border bg-body-tertiary rounded marginer classbig" style="color : #696969">
                <div class="center">
                    
                    <a style="text-decoration: none;" class="button123" href="#">
                       <span> <h4 style="color: #696969">{{$postdata->Name}}</h4> </span>
                       <span style="color: #696969"> 
                        
                        {{$postdata->Email}}
                    
                    
                    
                        </span>
                    </a>
                    
                </div>
                <div class="slidedown">
                    <h6> 
                        
                        
                        <form action="{{ route('posts.update', ['post' => $postdata->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="text" class="form-control" id="recipient-data" name="recipient-data" value="{{$postdata->Data}}" disabled>
                        
                        
                        
                    </h6>
                    <div class="flex-last">
                    <button class=" btn-fl  butt-success hidden-btn-fl" type ='submit' onclick=""> <img style="width:3rem; height:2.5rem; " src="{{ asset('storage/resources/imgs/ok.png') }}"></button>
                        </form>

                    
                    
                    <button class=" btn-fl  butt-danger hidden-btn-fl"  onclick="hidebutton(this)"> <img style="width:3rem; height:2.5rem;" src="{{ asset('storage/resources/imgs/cancel.png') }}"></button>
                    



                    <span style="font-size: 13px;"> Created At: {{$postdata->created_at}} </span>
                    </div>
                </div>

                
            </div>

            <div class="main21">
                <button onclick="enableInput(this)" type="button" class="btn" data-toggle="tooltip" data-placement="top" title="Edit">
                    
                    <lord-icon
                          src="https://cdn.lordicon.com/vhyuhmbl.json"
                          trigger="hover"
                          style="width:4rem;height:3.2rem;">
                    </lord-icon>

                </button>

                <form action="{{ route('posts.destroy', ['post' => $postdata->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?')">
                    @csrf
                    @method('DELETE')
                <button  type="submit"  class="btn" data-toggle="tooltip" data-placement="top" title="Delete">   
                    
                    <lord-icon
                         src="https://cdn.lordicon.com/wpyrrmcq.json"
                        trigger="hover"
                        state="morph-trash-full"
                        style="width:4rem;height:3.2rem;">
                    </lord-icon>

                </button>
            </form>
            </div>

            </div>
            
            

        </div>
        @endforeach
       <div class="pageinaters">
        {{$posts->links()}} 
       </div>

    @else

    <p> No posts found </p>

    @endif



@endsection



@section('jsarea')
    document.querySelector('.main2').addEventListener('mouseover', function hideParagraphOnce() {
        var hiddenParagraph = document.querySelector('.hidden-paragraph');
        if (hiddenParagraph) {
            hiddenParagraph.style.display = 'none';
            // Remove the event listener after the first hover
            this.removeEventListener('mouseover', hideParagraphOnce);
        }
    });

    function redirectto() {
        window.location.href = "/posts/create";
    }

    
    
    function enableInput(button) {
        // Disabling all other inputs
        const forminput = document.querySelectorAll('.form-control');
        forminput.forEach(function (input) {
            input.disabled = true;
        });
    
        // Hide all other buttons opened on the page
        const otherbtns = document.querySelectorAll('.btn-fl');
        otherbtns.forEach(function (button) {
            button.classList.add('hidden-btn-fl');
        });
    
        // Get the closest parent element with the class 'main-data1'
        var parentElement = button.closest('.main-data1');
    
        // Find the input field within the parent element
        var recipientInput = parentElement.querySelector('.form-control');
    
        // Enable the specific input field
        recipientInput.disabled = false;
    
        // Show the buttons with the class '.hidden-btn-fl'
        const buttonid = parentElement.querySelectorAll('.hidden-btn-fl');
        buttonid.forEach(function (button) {
            console.log(button.classList);
            button.classList.remove('hidden-btn-fl');
            console.log(button.classList);
        });
    }
    
    
    
    
    function hidebutton(clickedButton) {
        // Get the parent element of the clicked button
        var parentElement = clickedButton.closest('.main-data1');
    
        // Check if the parent element is found
        if (parentElement) {
            // Disable the input field
            var recipientInput = parentElement.querySelector('.form-control');
            recipientInput.disabled = true;
    
            // Hide only the clicked button and its siblings with the class '.btn-fl'
            const buttons = document.querySelectorAll('.btn-fl');
            buttons.forEach(function (button) {
                button.classList.add('hidden-btn-fl');
            });
        } else {
            console.error('Parent element not found.');
        }
    }
    
    


    function submitForm() {
        if (confirm('Are you sure you want to delete this post?')) {
            document.getElementById('deleteForm').submit();
        }
    }
    
@endsection