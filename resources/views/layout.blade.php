@extends('header')
@section('content')
    <body class="mb-48">
        <nav class="flex justify-between items-center mb-4">
            <a href="index.html"
                ><img class="w-24" src="images/logo.png" alt="" class="logo"
            /></a>
            <ul class="flex space-x-6 mr-6 text-lg">
               
                @if(Session::has('user'))
                <p> <a href="/arts"> Hello {{Session::get('user')['name']}}, visit gallery</a> </p>
                <li>
                    <a href="/logout" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-up"></i>
                        Logout</a
                    >
                </li>
              
                @else
                <li>
                    <a href="/register" class="hover:text-laravel"
                        ><i class="fa-solid fa-user-plus"></i> Register</a
                    >
                </li>
                <li>
                    <a href="/login" class="hover:text-laravel"
                        ><i class="fa-solid fa-arrow-right-to-bracket"></i>
                        Login</a
                    >
                </li>
                <li>
                    

                @endif
            </ul>
        </nav>

        <section
        class="relative h-72 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
    >
        <div
            class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
            style="background-image: url('images/laravel-logo.png')"
        ></div>

        <div class="z-10">
            <h1 class="text-6xl font-bold uppercase text-white">
                Digital<span class="text-black">Arts</span>
            </h1>
            <p class="text-2xl text-gray-200 font-bold my-4">
                Sign up to sell your DIGITAL ARTS
            </p>
            <div>
                <a
                    href="register.html"
                    class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                    >Sign Up to List an Art</a
                >
            </div>
        </div>
    </section>

    
   
    @extends('footer')
@section('content')

       
            
        </body>