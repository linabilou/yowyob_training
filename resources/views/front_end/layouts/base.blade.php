<!DOCTYPE html>
<html lang="en">
     <head>
          @include('front_end.includes.head')

     </head>
     <body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
          
        @include('front_end.includes.header')

        @yield('content')


        @include('front_end.includes.footer')
        @include('front_end.includes.foot')
     </body>
</html>