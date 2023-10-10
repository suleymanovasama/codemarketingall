@extends('front.layouts.app')
@section('title','Learning Center')
@section('content')
<main>
    <section id="one" class="for-background">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div id="learning-center-for" class="col-12 col-md-6 first-left-side ">
                    <div class="col-12 col-md-12 first-side-up for-learning">
                        <h3>
                        Etibarlı| Sürətli | Keyfiyyətli​
                        </h3>
                        <h1>
                        Öyrənməyə Codemarkteniglə başlayın
                        </h1>
                        <p>
                        Texnologiya sahəsində inkişaf etmək, kariyeranızı qurmaq üçün xüsusi hazırlanmış proqrama qatılın.​

​
                        </p>
                    </div>

                    <div class="first-side-down">
                        <form action="{{route('front.mail.customMailSubscribe')}}" method="POST">
                            @csrf
                            <div class="send-area">
                                <div class="row">
                                    <div class="col-12 first-select">
                                        <label for="programmers">Hansı proqramla maraqlanırsınız?</label>
                                        <select name="program" id="programmers">
                                            <option value="Code Marketing">Code Marketing</option>
                                            <option value="Full-Stack proqramlaşdırma">Full-stack development</option>
                                            <option value="Machine learning">Machine learning</option>
                                        </select>
                                        @error('program')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                    <div class="col-12 email-side">
                                        <label for="">Elektron poçtunuz</label>
                                        <input type="email" name="email">
                                        @error('email')<span class="text-danger">{{$message}}</span>@enderror
                                    </div>
                                </div>
                                <div class="button-side">
                                    <button type="submit">Başlayın</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-5 first-right-side">
                    <img src="{{ asset('frontend/img/aboutUs/IMG_7213.jpg') }}" alt="">

                    <!-- <img src="../src/img/blog/hero_vb.jpg" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <section id="work-two" class="py-5 my-5">
        <div class="container">
            <div class="row">
                <div id="learning-two" class="col-12 col-md-6 work-two-img">
                    <img src="{{ asset('frontend/img/aboutUs/IMG_7163.jpg') }}" alt="">

                    <!-- <img src="../src/img/learningCenter/network-communities.webp" alt=""> -->
                </div>
                <div id="learning-two-rigth" class="col-12 col-md-6 work-two-content">
                    <h2>Career Support & An Online Community </h2>
                    <p>
                        We go beyond the typical experience of a coding bootcamp. Even though you study completely
                        online, you’ll have the resources of an active community and additional support to help you
                        reach your goals. Technical experts will be available to answer questions, and we’ll pair
                        you up with your own personal mentor.
                    </p>
                    <p>
                        Our entire CodeMarketing family is ready to see you succeed, from instructors and TAs to other
                        students in your cohort.
                    </p>
                    <p>


                        Curious how a coding bootcamp can help you reach your goals? Browse our webinars and
                        courses, and reach out to our admissions team to start your new career in tech.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="webinarsevent">
        <div class="container py-5">
            <div class="row for-first-row-learning">
                <div class="col-12">
                    <h2>
                        Vebinarlar
                    </h2>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Fevral</span>
                                <span class="second-span">25</span>
                                <span class="first-span">13:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first communities-card">
                                    <h3>
                                        CodeMarketing Webinar || Full stack: Back end və Front end
                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                        Full stack developer nə iş görür?  Back end və Front end arasındakı fərqlər nələrdir?Full stack developerin yol xəritəsi.
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Mart</span>
                                <span class="second-span">4</span>
                                <span class="first-span">14:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first   communities-cardcommunities-card">
                                    <h3>
                                        CodeMarketing Webinar || Codemarktenig nədir?

                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                    Codemarketoloq nə iş görür? Niyə kod və marketinq birlikdə? Codemarktenig  yol xəritəsi.
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 webinars-card">
                    <div class="row">
                        <div class="col-12 col-md-2" style="padding: 0;">
                            <div class="card-left">
                                <span class="first-span">Mart</span>
                                <span class="second-span">8</span>
                                <span class="first-span">15:00PM</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-10" style="padding: 0;">
                            <div class="card-right" style="height:100%">
                                <div class="card-right-first communities-card">
                                    <h3>
                                        CodeMarketing Webinar ||  Machine learning

                                    </h3>
                                </div>
                                <div class="card-right-second communities-card">
                                    <p>
                                    Machine learning nədir?  Machine learning mütəxəssisi olmaq üçün hansı bacarıqlar tələb olunur?
                                    </p>
                                    <a href="{{ route('front.contact') }}">
                                        Detalları gör və qeydiyyat et
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 addtion-button">
                    <a href="">
                    Bütün Vebinarları gör​
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
