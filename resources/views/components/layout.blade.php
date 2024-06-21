<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dev</title>
    @vite(["resources/js/app.js"])
</head>

<body>

    <div>
        <nav>
            <div>
                <a href="">
                    <img src="https://raw.githubusercontent.com/laracasts/pixel-position/2663b3f072baaabf8062067adb02fb8e620ebfcf/resources/images/logo.svg"
                        alt="pixel-logo">
                </a>
            </div>
            <div>links</div>
            <div>post a job</div>
        </nav>

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
