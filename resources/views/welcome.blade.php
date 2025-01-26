{{-- REPLACEABLE FILE --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hackathon 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @livewireStyles
</head>
<body>

    <a href="{{route('login')}}" class="btn btn-success">Login</a>
    <a href="{{route('auth.registerGroup')}}" class="btn btn-success">Register</a>

    {{-- <form action="{{ route('logout') }}" method="POST" class="d-flex" >
        @csrf
        <button class="btn btn-danger" type="submit">Logout</button>
    </form> --}}

    @livewire('contact-form')

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
