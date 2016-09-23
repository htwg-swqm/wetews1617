<!doctype html>
<html>
<head>
    @include('includes.head')
    @yield('css')
</head>
<body>
<div class="container">

    @include('includes.header')

    <main>

        @yield('content')

    </main>

    @include('includes.footer')

</div>
</body>
</html>