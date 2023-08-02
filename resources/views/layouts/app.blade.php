<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h4>Talkiesbiz</h4>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

@can('isAdmin')    
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="talkies">Talkiesbiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="dashboard">Dashboard</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="orders">Orders</a>
      </li>

      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Users
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="admin_user">Admin Users</a>
        <a class="dropdown-item" href="reseller_user">Resellers</a>
        <a class="dropdown-item" href="seller_user">Sellers</a>
      </div>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="documents">Documents</a>
      </li>
      
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="list_pro">Product list</a>
        <a class="dropdown-item" href="seller_pro">Seller Products</a>
        <a class="dropdown-item" href="add_pro">Add Products</a>
        <a class="dropdown-item" href="categories">Categories</a>
      </div>
    </li>

      <li class="nav-item">
        <a class="nav-link" href="customer">Customers</a>
      </li>

            <li class="nav-item">
        <a class="nav-link" href="contact">Contacts</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">                                             
      
     <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button>-->
    </form>
   
  </div>
</nav>

@endcan

@can('isSeller')    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="talkies">Talkiesbiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
 
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/product_status">Product Status</a>
        <a class="dropdown-item" href="/add_pro">Add Single Product</a>
        <a class="dropdown-item" href="add_bulk">Add Bulk Product</a>
        <a class="dropdown-item" href="#">Upload CSV</a>
        <a class="dropdown-item" href="#">Download CSV Sample</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="store_setting">Store Setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account_info">Account Info</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
                            
                    
      
      <!--<button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button><!-->
    </form>
   
  </div>
</nav>
@endcan












@can('isReseller')    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="talkies">Talkiesbiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
 
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Products
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="product_status">Product Status</a>
        <a class="dropdown-item" href="add_pro">Add Single Product</a>
        <a class="dropdown-item" href="add_bulk">Add Bulk Product</a>
        <a class="dropdown-item" href="#">Upload CSV</a>
        <a class="dropdown-item" href="#">Download CSV Sample</a>
      </div>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="store_setting">Store Setting</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="account_info">Account Info</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
      
      <!--<button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button><!-->
    </form>
   
  </div>
</nav>
@endcan





@can('isCustomer')    
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="talkies">Talkiesbiz</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      
    
      <li class="nav-item">
        <a class="nav-link" href="/orders_history">Order History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/rating">Rating</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="payment_method">Payment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="change_password">Change Password</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
    
                            
                                   
            
      
     <!-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button><!-->
    </form>
   
  </div>
</nav>
@endcan

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        @yield('content')
        </main>
    </div>

</body>
</html>
