@extends('layouts.frontend')

@section('content')
    <main id="main" class="main" role="main">
        <article id="post-32938" class="article">
            <div class="article__header page-tour__header">
                <div class="page-tour__thumb-wrap"
                    style="background-image: url(https://kochevnik.kg/wp-content/themes/kochevnik/assets/img/visa-bg.jpg)">
                </div>

                <div class="page-tour__header-cont">
                    <div class="container">
                        <h1 class="article__head page-tour__head">VISA PROCESSING</h1>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="article__content">

                    <div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>



                    <p>One of the most difficult stages in preparing for a trip abroad is<strong>obtaining a visa..
                        </strong></p>



                    <p>When it comes to obtaining a visa, many are faced with a choice: to get a visa on their own or to entrust this matter to professionals? </p>



                    <p>If you need help in obtaining a visa, please contact us. You simply provide us with the documents, and we take care of all the worries. Qualified visa support saves you time and effort. If necessary, we will advise you, help with advice and find answers to any of your questions.</p>



                    <p>You will significantly reduce the steps to obtaining a visa, increase the chances of obtaining it, save time, get everything you need for your trip in one company.</p>



                    <p><strong>The visa fee includes:</strong></p>



                    <ul>
                        <li>Filling out the questionnaire</li>
                        <li>Booking a hotel</li>
                        <li>Flight booking</li>
                        <li>Submission to the VC</li>
                        <li>Consular fee payment</li>
                        <li>Visa fee payment</li>
                        <li>Courier services</li>
                        <li>Сaccompaniment for fingerprinting</li>
                        <li>Registration in the VC </li>
                    </ul>
                </div>


                <div class="visa-block">

                </div>
                <div class="visa-block">
                    <h2 class="visa-block__head">Schengen</h2>


                    <div class="visa-list clear">
                        @foreach($visas as $visa)
                            @php
                                $county=\App\Models\Country::find($visa->country_id);
                                $pricetype=\App\Models\Visa::PRICETYPES[$visa->price_type];
                            @endphp
                        <div class="visa-list__item match-height">
                            <span class="visa-list__head">{{$county->name}}</span>

                                <span class="visa-list__subhead">Visa processing time - from {{$visa->visa_time}} working days </span>

                            <div class="visa-list__img-wrap">
                                <img class="visa-list__img"
                                    src="{{asset('countries/'.$county->flag)}}"
                                    alt="Флаг Швейцарии">
                            </div>

                            <span class="visa-list__price">{{$visa->price}} {{$pricetype}}</span>

                            <a rel="nofollow" target="_blank" class="visa-list__btn btn"
                                href="https://api.whatsapp.com/send/?phone=996222009155&text=Hello+Travel+agency+'WONDER WORLD'">Order</a>

                            <button class="js-pop-up-btn visa-list__btn visa-list__btn--more"
                                href="#visa-list__content-{{$visa->id}}">More details</button>

                            <div id="visa-list__content-{{$visa->id}}" class="mfp-hide popup">
                                <div class="popup__wrap">
                                    <p>List of required documents<br />
                                    {{$visa->description}}<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

                <div class="visa-form">
                    <h3 class="visa-form__head">Get visa advice</h3>
                    <p class="visa-form__desc">We will advise, help with advice and find answers to any of your questions</p>
                    <a rel="nofollow"
                        href="https://api.whatsapp.com/send/?phone=996222009155&text=Hello+Travel+agency+'WONDER WORLD'"
                        target="_blank" class="btn">To get a consultation</a>
                </div>
            </div>
        </article>

    </main>
@endsection
