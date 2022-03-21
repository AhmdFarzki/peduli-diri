<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peduli Diri</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            @include('includes.navbar');

            <div class="content-wrapper container">

                @yield('content')

            </div>

            @include('includes.footer')
        </div>
    </div>
    @include('sweetalert::alert')

    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
