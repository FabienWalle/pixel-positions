<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['/resources/js/app.js', 'resources/css/app.css'])
    <title>Pixel Positions</title>
</head>

<body>
    <div>
        <nav>
            <div>
                <a href="">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="pixel position logo">
                </a>
            </div>
            <div>
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            <div>
                <a href="">Post a Job</a>
            </div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
