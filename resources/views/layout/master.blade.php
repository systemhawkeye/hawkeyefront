<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Styles -->
    <link href="{{ asset('css/page.css') }}" rel="stylesheet" type="text/css">
    @yield('content_head')
</head>

<body>
    @include('layout._nav')
  
    <main class="main-content bg-gray ">
    @yield('content')

</main>
    @include('layout._footer')
   
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/page.js') }}"></script>


    <div id="offcanvas-top" class="offcanvas bg-secondary h-auto" data-animation="slide-down">
            <button type="button" class="close text-white" data-dismiss="offcanvas" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="row">
              <form class="col-md-8 mx-auto input-glass">
                <input class="form-control form-control-lg" type="text" placeholder="Search...">
              </form>
            </div>
          </div>

          <div id="offcanvas-right" class="offcanvas w-300" data-animation="slide-left">
              <button type="button" class="close position-static px-0" data-dismiss="offcanvas" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
        
              <nav class="nav nav-lead flex-column my-7">
                <div class="row">
                  di
                </div>
              </nav>
            </div>
    @yield('content_footer')
   
</body>

</html>