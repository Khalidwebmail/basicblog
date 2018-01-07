<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.layout.head')
</head>

<body>

    <!-- Navigation -->
        @include('user.layout.header')
    <!-- Main Content -->
        @section('main_content')
            @show
    <!-- Footer -->
        @include('user.layout.footer')
    </body>

</html>
