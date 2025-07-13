@extends('layouts.main')

@section('title', 'Создание участника')

@section('content')
    <h1 class="text-center">Начните своё путешествие!!!</h1>
    <h4 class="text-center">Соберите своё идеальное путешествие</h4>
    <section class="newsletter-subscribe py-4 py-xl-5">
        <div class="container">
            <form class="d-flex justify-content-center flex-wrap" method="post">
                <input class="form-control" type="text" placeholder="Город, аэропорт отправления" />
                <input class="form-control" type="text" placeholder="Дата отправления" />
                <input class="form-control" type="text" placeholder="Город, аэропорт прибытия" />
                <input class="form-control" type="text" placeholder="Дата прибытия" />
                <div class="mb-3 ms-2">
                    <button class="btn btn-primary" type="submit">Искать</button>
                </div>
            </form>
        </div>
    </section>
@endsection
