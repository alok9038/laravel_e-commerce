<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="navbar navbar-expand-lg border-bottom sticky-top bg-white my-4">
        <div class="col-lg-6 col-8 mx-auto">
            <h4 for="search" class="h6 text-center fs-5">Takatak Blogs</h4>
            <form action="{{ route('search') }}">
                <div class="mb-3 p-2 bg-secondary rounded-3">
                    <input type="search" name="query" placeholder="Search Post Here!" class="form-control rounded border-0 shadow-none">
                </div>
            </form>
        </div>
    </div>
    @yield('content')
</body>
</html>
