<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="parent">
        <div class="child">
            <h2>Sign Up</h2>
            <span>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    {{-- it has to be there for form submission in laravel  --}}
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name"><br>
                    <br>
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email"><br>
                    <br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password"><br>



                <button type="submit" class="my-4">
                    
                    Login
                </button>

                </form>
            </span><br>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>