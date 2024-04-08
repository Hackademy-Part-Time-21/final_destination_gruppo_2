<div class="margin-top-nav">
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            <title>Document</title>
        </head>
        <body class="d-flex flex-column">
            <div class="fixed-top">
                <x-layout.navbar/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                   <div class="col-md-8 m-3">
                        {{$slot}}
                    </div>
                </div>
            </div>
            <x-layout.footer/>
        </body>
    </html>
</div>
