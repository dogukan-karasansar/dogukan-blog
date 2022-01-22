<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/x-icon" href="{{asset('images/logo.png')}}">

@include('layouts.header')

<body>


    @yield('content')


    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

