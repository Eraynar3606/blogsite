
 <!DOCTYPE html>
<html lang="en">
<head>
   
    <title>@yield('title')</title>
    @include('layouts.particals.head')
    @yield('head')
</head>
<body>
@include('layouts.particals.nav')
@yield('nav')
@yield('content')






    






@yield('fotter')
@include('layouts.particals.fot')
 </body>
 </html>