<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Larvel_app')}}</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <style>
            /* @yield('cssarea') */
            @import url('https://fonts.googleapis.com/css?family=Raleway:200');


            body{
                background: #1D1F20;
                color: white;

            }   


            @includes('includes.gradiantBox');

           
        /* Css for the Gradinat line     */

            
        .seperator-wrapper {   
            width: 100%;  
        }
        .seperator {
                width: 100%;
                height: 5px;
                animation: rotate 3s infinite linear;
                -webkit-animation: rotate 3s infinite linear;
        }
            
        
        
        @-webkit-keyframes rotate {
            from {
                background-position: -3000px;
            }
            to { 
                background-position: 0px;
            }
        }
        
        @keyframes rotate {
            from {
                background-position: -3000px;
            }
            to { 
                background-position: 0px;
            }
        }
        
        .gradient123 {
            background: rgb(48,255,144); /* Old browsers */
            background: -moz-linear-gradient(left,  rgba(48,255,144,1) 0%, rgba(237,45,237,1) 25%, rgba(201,152,38,1) 50%, rgba(48,255,230,1) 75%, rgba(48,255,144,1) 100%); /* FF3.6+ */
            background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(48,255,144,1)), color-stop(25%,rgba(237,45,237,1)), color-stop(50%,rgba(201,152,38,1)), color-stop(75%,rgba(48,255,230,1)), color-stop(100%,rgba(48,255,144,1))); /* Chrome,Safari4+ */
            background: -webkit-linear-gradient(left,  rgba(48,255,144,1) 0%,rgba(237,45,237,1) 25%,rgba(201,152,38,1) 50%,rgba(48,255,230,1) 75%,rgba(48,255,144,1) 100%); /* Chrome10+,Safari5.1+ */
            background: -o-linear-gradient(left,  rgba(48,255,144,1) 0%,rgba(237,45,237,1) 25%,rgba(201,152,38,1) 50%,rgba(48,255,230,1) 75%,rgba(48,255,144,1) 100%); /* Opera 11.10+ */
            background: -ms-linear-gradient(left,  rgba(48,255,144,1) 0%,rgba(237,45,237,1) 25%,rgba(201,152,38,1) 50%,rgba(48,255,230,1) 75%,rgba(48,255,144,1) 100%); /* IE10+ */
            background: linear-gradient(to right,  rgba(48,255,144,1) 0%,rgba(237,45,237,1) 25%,rgba(201,152,38,1) 50%,rgba(48,255,230,1) 75%,rgba(48,255,144,1) 100%); /* W3C */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#30ff90', endColorstr='#30ff90',GradientType=1 ); /* IE6-9 */
            
        }
        


       
        
        /* css by me */

        .toper{
                margin-top: 4vh;
                
                padding: auto;
                
            }
        

            a {
    text-decoration: none;
}

        @yield('cssarea')

        </style>
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
    </head>
    <body >

        @include('includes.navbar')
        
        <section class="seperator-wrapper">
            <div class="seperator gradient123">
            </div>
        </section>

       
        @include('includes.messages')

        <div class="container toper">

            @yield('content')
        
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


        <script>

            @yield('jsarea')


        </script>
    </body>
</html>
