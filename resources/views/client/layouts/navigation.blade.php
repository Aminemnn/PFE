<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/logout.css')}}" >
    <style>
#colll{
    position: relative;
    right: 15px;
    display: contents;
}

@media only screen and (max-width: 820px) {
    #img1{
        transform: scale(1.2);
        position: relative;
        right: 10px;
    }
    a{

        transform: scale(0.5);
        position: relative;
        right: 75px;
    }
    #form{
        transform: scale(0.5);
        right: 411px;
        width: 725px;
        bottom: -51px;
    }
    #input{
        transform: scale(1);
        position: relative;
        right: 63px;
    }
    .flex{
     width: 278px;
    }
    #btn{
       position: relative;
        left: 542px;
        bottom: 47px;
    }
}
ul li {
    margin: 10px;
    position: relative;
    right: 24px;
    cursor:pointer;

}
#form{
    position: relative;
    width: 710px;

}
#card{
    width: 500px;
}
#input{
    border-color: #E1ECFE;
    width: 600px;
}

</style>
</head>
<body>

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" id="row">
        <div class="flex justify-between h-16">
            <div class="flex" >
                <div class="shrink-0 flex items-center" >
                    <a class="navbar-brand" href="{{ route('client') }}">
                        <img src="../../../assets/LOGO.png" width="200" height="200" id="img1" alt="">
                    </a>
                </div>
                <form class="form-inline my-2 my-lg-0" id="form">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="input">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: #E1ECFE; border-color: #E1ECFE ;color: black;" id="btn">Search</button>
                </form>
            </div>
            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6"  >
                <ul class="navbar-nav mr-auto" id="colll" >
                    <li class="nav-item active">
                        <!-- Default dropleft button -->
                        <div class="btn-group dropleft ">
                                <i class="fa-regular fa-bell" style="color: #1a202c" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></i>
                            <div class="dropdown-menu" id="card">
                                <div class="card text-center" >
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item active">
                        <!-- Default dropleft button -->
                        <div class="btn-group dropleft ">
                            <i class="fa-regular fa-message" style="color: #1a202c" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></i>
                            <div class="dropdown-menu" id="card">
                                <div class="card text-center" >
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <!-- Default dropleft button -->
                        <div class="btn-group dropleft ">
                            <i class="fa-regular fa-heart" style="color: #1a202c" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="true"></i>
                            <div class="dropdown-menu" id="card">
                                <div class="card text-center" >
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <!-- Default dropleft button -->
                        <div class="btn-group dropleft ">
                            <p style="color: #1a202c;background-color: white;border-color: white;cursor: pointer"  data-toggle="dropdown" aria-haspopup="false" aria-expanded="true">Orders</p>
                            <div class="dropdown-menu" id="card">
                                <div class="card text-center" >
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                        <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <br>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profil')"  style="text-decoration: none;color: #1a202c">
                            <i class="fa-regular fa-user"></i>{{ __(' Profile') }}
                        </x-dropdown-link>
                        <x-dropdown-link   style="text-decoration: none;color: #1a202c">
                            <i class="fa-solid fa-briefcase"></i>{{ __(' Post a Work') }}
                        </x-dropdown-link>
                        <x-dropdown-link   style="text-decoration: none;color: #1a202c">
                            <i class="fa-solid fa-clock-rotate-left"></i>{{ __(' Request history') }}
                        </x-dropdown-link>

                        <hr style="width: 90%;margin:auto;margin-top: 6px">
                        <x-dropdown-link   style="text-decoration: none;color: #1a202c">
                            <i class="fa-solid fa-gear"></i>{{ __(' Setting') }}
                        </x-dropdown-link>
                        <hr style="width: 90%;margin:auto;margin-top: 6px">
                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();" id="logout" >
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> {{  __(' Log Out') }}
                            </x-dropdown-link>

                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">


        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link   style="text-decoration: none;color: #1a202c">
                    <i class="fa-regular fa-user"></i>{{ __(' Profile') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link   style="text-decoration: none;color: #1a202c">
                    <i class="fa-solid fa-briefcase"></i>{{ __(' Post a Work') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link   style="text-decoration: none;color: #1a202c">
                    <i class="fa-solid fa-clock-rotate-left"></i>{{ __(' Request history') }}
                </x-responsive-nav-link>

                <hr style="width: 90%;margin:auto;margin-top: 6px">
                <x-responsive-nav-link   style="text-decoration: none;color: #1a202c">
                    <i class="fa-solid fa-gear"></i>{{ __(' Setting') }}
                </x-responsive-nav-link>
                <hr style="width: 90%;margin:auto;margin-top: 6px">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" >
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>{{ __(' Log Out') }}
                    </x-responsive-nav-link>

                </form>
            </div>
        </div>
    </div>
</nav>

</body>
</html>
