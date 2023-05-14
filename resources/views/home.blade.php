@extends('layouts/main')
@section('content')
    <main>
        <table class="table">
            <thead>
                <th>Compagnia</th>
                <th>Stazione di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Modello</th>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{$train->company}}</td>
                        <td>{{$train->departure_station}}</td>
                        <td>{{$train->arrival_station}}</td>
                        <td>{{$train->departure_time}}</td>
                        <td>{{$train->arrival_time}}</td>
                        <td>{{$train->train_code}}</td>
                        <td>{{$train->model}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection