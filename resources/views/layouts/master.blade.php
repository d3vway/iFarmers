<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('components.head')
<body>
    @include('components.header')

    <!--Main layout-->
    <main class="my-1">
        <div class="container">
            @yield('content')
        </div>
    </main>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="/js/app.js"></script>
    @section('javascript')
    @show
</body>

</html>
