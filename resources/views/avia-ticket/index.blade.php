@extends('layouts.main')

@section('title', 'Создание участника')

@section('content')
    <h1 class="text-center">Начните своё путешествие!!!</h1>
    <h4 class="text-center">Соберите своё идеальное путешествие</h4>
    <section class="newsletter-subscribe py-4 py-xl-5">
        <div class="container">
            <form class="d-flex justify-content-center flex-wrap" method="post">
                {{ csrf_field() }}
                <select class="form-control" name = "departure_city">
                    <option value="{{ 0 }}">Город отправления </option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                <input class="form-control" type="date" name="departure_date" placeholder="Дата отправления">
                <select class="form-control" name = "arrival_city">
                    <option value="{{ 0 }}">Город прибытия</option>
                    @foreach($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                    @endforeach
                </select>
                <div class="mb-3 ms-2">
                    <button class="btn btn-primary" type="submit">Искать</button>
                </div>
            </form>
        </div>
    </section>
@endsection
