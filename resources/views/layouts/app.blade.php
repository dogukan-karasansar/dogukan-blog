<!DOCTYPE html>
<html lang="en">
@include('layouts.header')

<body>

    @yield('content')

    @include('layouts.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>

