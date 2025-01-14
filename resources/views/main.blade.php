@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css\main.css')}}">

    <section>
        <div class="text-center p-3">
        <h3 class="display-4 font-wight-normal text-center">Беговелик в Омске</h3>
        <p class="text-muted fs-4">СПОРТИВНЫЙ КЛУБ «БЕГОВЕЛиК» для детей <b>от 2-х лет.</b>
            С нами ваши дети полюбят спорт! <br>
            Развиваем СИЛУ, ЛОВКОСТЬ, КООРДИНАЦИЮ!
            Научим трюкам безопасно!</p>
        </div>
            <div class="product-device-2 d-none d-md-block positio-relative overflow-hidden text-center">
                <img src="{{asset('img/1.jpg')}}" alt="Шапки"style="max-width:20%;border-radius: 20px"class="">
                <img src="{{asset('img/2.jpg')}}" alt="Шапки"style="max-width:23%;border-radius: 20px"class="">
                <img src="{{asset('img/3.jpg')}}" alt="Шапки"style="max-width:20%;border-radius: 20px"class="">
            </div>
        </div>

        <div class="position-relative overflow-hidden p-3 p-md-3 text-center  fixed-top">
            <div class="col-md-5 my-5  mx-auto" style="border-radius: 20px">
                <h1 class="display-4 font-wight-normal">О нас</h1>
                <p class="lead font-wight-normal fs-4">Детский спортивно-оздоровительный клуб <b class="fw-bold">"БЕГОВЕЛиК"</b> в Омске приглашает детей от 2 до 5 лет на занятия на беговелах. Наш клуб предлагает физкультурно-оздоровительную работу, спортивные занятия на беговелах и детский фитнес. Тренировки проходят по адресу: <b class="fw-bold">Левый берег, Континент 3 этаж Роллердром</b></p>
            </div>
    </section>

    <section>
            <div class="container my-5">
                <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
                  <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                    <h1 class="display-4 fw-bold lh-1 text-body-emphasis">Расписание тренировок</h1>
                        <li class="fs-4 text-start">
                           <b>Вторник</b> 18:00 новички и малыши.
                        </li>
                        <li class="fs-4 text-start">
                           <b>Четверг</b> 19:00 старшие дети + велосипед.
                        </li>
                        <li class="fs-4 text-start">
                          <b>Суббота</b>
                            10:00 велосипед,
                            11:00 беговел.
                        </li>
                        <p class="text-muted fs-4 text-start">Занятия проходят в Континенте 3 этаж, Роллердром.</p>
                     <a href="{{route('catalog')}}"><button type="submit" class=" text-center btn btn-dark btn-lg px-4 me-md-2 fw-bold">Записаться</button></a>
                  </div>
                  <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
                      <img class="rounded-lg-3" src="{{asset('img/6h.jpg')}}" alt="" width="720">
                  </div>
                </div>
              </div>
        </div>

    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
@endsection


