<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trains</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container">
            <h1>Trains data from database:</h1>
            <table class="table" style="border: 1px solid cornflowerblue;">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Coach Count</th>
                    <th>On Time</th>
                    <th>Canceled</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->id }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->coach_count }}</td>
                        <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                        <td>{{ $train->canceled ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </body>
</html>
