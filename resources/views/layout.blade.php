<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MACUNO | LAB 11')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="{{ asset('star-fill.svg') }}" type="image/svg+xml">
</head>

<body>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12">
                @yield('content')
            </div>
        </div>
    </div>
    <div class="position-fixed bottom-0 end-0 m-3">
        <a href="{{ route('home') }}" class="btn btn-outline-dark" target="_self">
            <i class="fa-solid fa-house"></i>
        </a>
        <a href="https://github.com/kvnmcn" class="btn btn-dark" target="_blank">
            <i class="fa-brands fa-github-alt"></i>
            @kvnmcn
        </a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>