<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <style>
            html, body {
                margin: 0;
                box-sizing: border-box;
            }
            *, *::after, *::before {
                box-sizing: inherit;
            }
            .container {
                display: flex;
                width: 100vw;
                max-width: 100vw;
                min-width: 100vw;
                height: 100vh;
                max-height: 100vh;
                min-height: 100vh;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            .task--list {
                font-family: serif;
                font-size: 0.75vmax;
                font-weight: lighter;
                color: #242424;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="task--list">
                <ul>
                    @foreach($tasks as $task)
                        <li><a href="/tasks/{{ $task->id }}">{{ $task->body }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
