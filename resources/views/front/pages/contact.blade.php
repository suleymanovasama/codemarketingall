@extends('front.layouts.app')
@section('title','Contact')
@section('content')
<main>
    <section id="contact-one">
        <div class="container">
            <div class="row">
                <div class="contact-root-area">
                    <p>
                        Ana səhifə <i class="bi bi-chevron-right"></i> <span>Əlaqə</span>
                    </p>

                    <h2>
                        Əlaqə
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-two" class="py-5 my-5">
        <div class="container pt-3">
            <div class="row">
                <div class="col-12 col-md-3 p-0 m-0">
                    <div class="icons-area">
                        <img src="{{ asset('frontend/img/contact/mapwhite.svg') }}" alt="">
                        <p class="mt-3">Ünvan</p>

                        <div class="addres">
                            <p>
                                Məmməd Araz küçəsi, 109
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-0 m-0">
                    <div class="icons-area">
                        <img src="{{ asset('frontend/img/contact/clock.svg') }}" alt="">
                        <p class="mt-3">İş saatları</p>

                        <div class="addres">
                            <p>
                                Həftə içi 10:00-22:00
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-0 m-0">
                    <div class="icons-area">
                        <img src="{{ asset('frontend/img/contact/call.svg') }}" alt="">
                        <p class="mt-3">Telefon</p>

                        <div class="addres">
                            <p>
                                +994 (55) 404 403 7
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-0 m-0">
                    <div class="icons-area">
                        <img src="{{ asset('frontend/img/contact/sms.svg') }}" alt="">
                        <p class="mt-3">Email</p>

                        <div class="addres">
                            <p>
                                info@codemarketing.edu.az
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact-three">
        <div class="container mb-5">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1519.0071267507283!2d49.84672953161322!3d40.40853502435672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087f5efa5887d%3A0x9c60fab32c8927e7!2sAvesta!5e0!3m2!1sen!2s!4v1675855363317!5m2!1sen!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </iframe>

            </div>
        </div>
    </section>
    <section id="contact-four">
        <div class="container">
            <div class="row">
                <form action="{{ route('front.mail.contactMain') }}" method="POST">
                    @csrf
                    <div class="row py-5">
                        <div class="col-12 col-md-6 ">
                            <div class="contact-left-side">
                                <label for="">
                                    Ad, Soyad
                                </label>
                                <input type="text" placeholder="Daxil Edin" name="name">
                                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                <label for="">
                                    E-poçt
                                </label>
                                <input type="email" placeholder="Daxil Edin" name="email">
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                <label for="">
                                    Telefon
                                </label>
                                <input type="tel" placeholder="+994" name="phone">
                                @error('phone') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="content-right-area">
                                <label for="">Suallarınızı qeyd edin, ən qısa vaxtda cavablandıracağıq.
                                    Təşəkkürlər!
                                </label>
                                <textarea cols="30" rows="11" placeholder="Qeydinizi daxil edin" name="message"></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12 button-side">
                            <button type="submit">
                                Qeydiyyatdan keç
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <section id="subscribe">
        <div class="container">
            <div class="row">
                <div class="subscribe-header">
                    <h5>Yeniliklərdən və kampaniyalarımızdan xəbərdar olmaq istəyirsinizsə abunə olun</h5>
                </div>

                <div class="col-12 contact-inputs-area">
                    <form action="{{route('front.mail.programMailSubscribe')}}" method="POST">
                        @csrf
                        <input type="text" name="email" placeholder="Emailinizi daxil edin">
                        <button type="submit">
                            Qeydiyyatdan keç
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
