<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <ol>
        @foreach ($listings as $listing)
            <li>
                <h3>
                    {{ $listing->company }} -
                    {{$listing->departure_station}} -
                    {{$listing->arrival_station}} -
                    {{$listing->departure_time}} -
                    {{$listing->arrival_time}} -
                    {{$listing->train_code}} -
                    {{$listing->carriage_number}} -
                    {{$listing->in_time}} -
                    {{$listing->cancelled}} -
                    {{$listing->deadline}}
                </h3>

        @endforeach
    </ol>
</body>
</html>
