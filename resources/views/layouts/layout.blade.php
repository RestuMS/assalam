<!DOCTYPE html>
<html lang="en">
@include('include.header')
@include('include.navbar')

<body>
    <div class="container">
        @yield('content')
    </div>
    @include('include.script')
</body>
<footer>
    @include('include.footer')
</footer>

</html>
