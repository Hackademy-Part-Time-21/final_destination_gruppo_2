<div>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>Document</title>
    </head>
    <body>
        <x-layout.navbar/>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 mt-5">
        {{$slot}}
                </div>
            </div>
        </div>
    </body>
    </html>
</div>