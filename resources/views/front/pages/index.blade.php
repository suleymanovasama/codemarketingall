@extends('front.layouts.app')
@section('title','Code Marketing')
@section('content')
<main>
    <section id="one">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 first-left-side">
                    <div class="col-12 col-md-12 first-side-up">
                        <h1>
                            {{$statics->where('id',17)->first()->title}}

                        </h1>
                    </div>
                    <div class="first-side-middle">
                        <ul>
                            <li>
                                <img src="{{ asset('frontend/img/main/Icon.svg') }}" alt="">
                                {{$statics->where('id',18)->first()->title}}
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/main/Icon (1).svg') }}" alt="">
                                {{$statics->where('id',19)->first()->title}}
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/main/Icon (2).svg') }}" alt="">
                                {{$statics->where('id',20)->first()->title}}
                            </li>
                        </ul>
                    </div>
                    <div class="first-side-down">
                        <form id="contactForm">
                            @csrf
                            <div class="send-area">
                                <div class="row">
                                    <div class="col-12 first-select">
                                        <span id="alert" class="alert alert-info d-none mt-2"><br></span>
                                    </div>
                                    <div class="col-12 first-select">
                                        <label for="select-zone">
                                            Hansı sahə ilə maraqlanırsan?
                                        </label>
                                        <select name="program" id="select-zone">
                                            <option value="" disabled selected></option>
                                            <option value="CodeMarketing">CodeMarketing</option>
                                            <option value="Full-Stack proqramlaşdırma">Full-stack development</option>
                                            <option value="Machine learning">Machine learning</option>
                                        </select>
                                        <div class="for-select-img">
                                            <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt="">
                                        </div>
                                    </div>

                                    <div class="col-12 email-side">
                                        <label for="">Email adresiniz</label>
                                        <input name="email" type="email" id="email" placeholder="Email adresiniz">
                                    </div>
                                </div>
                                <div class="button-side">
                                    <button class="submit" type="submit">Müraciət et</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6 first-right-side">
                    <img src="{{ asset('storage/' . $homeimgs->where('id', 2)->first()->image) }}" alt="">

                </div>
            </div>
        </div>
    </section>
    <section id="two" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 two-side-left">
                    <h2>{{$statics->where('id',21)->first()->title}}</h2>
                    <p>
                        Gələcək karyeranız bizim üçün vacibdir. Buna görə də, məzun olduqdan sonra 6 ay ərzində
                        müvafiq vəzifəyə işə qəbul edilməsəniz, tam təhsil haqqını geri alacaqsınız. Təhsil haqqının geri
                        qaytarılması ilə bağlı şərtlərimizi <a href="{{ route('front.policy') }}">burda</a> tapa bilərsiniz.
                    </p>
                    <a href="{{ route('front.contact') }}" class="outline-a">
                        Suallar? Bizimlə söhbət edin.
                    </a>
                </div>
                <div class="col-12 col-md-6 two-right-side">
                    <img src="{{ asset('storage/' . $homeimgs->where('id', 3)->first()->image) }}" alt="">

                </div>
            </div>
        </div>
    </section>
    <section id="three" class="my-5">
        <div class="container">
            <div class="row">
                <div class=" col-12 programs-title">
                    <h2>Proqramlarımız</h2>
                </div>

                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="{{ route('front.courses') }}">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/faq/sayt3-01.jpg') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Code marketing
                                    </u>
                                </span>
                                <p class="second">
                                    Kodlama bilikləri əsasında marketinq sahəsində real biznes layihələri üzərində
                                    işləməyi öyrənin.
                                </p>
                                <p href="" class="third">
                                    <span>
                                        Full-Time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-Time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="{{ route('front.programming') }}">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/faq/sayt2-01.jpg') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Full-stack development
                                    </u>
                                </span>
                                <p class="second">
                                    Proqramlaşdırmanı və müasir biznesin ehtiyac duyduğu tələbləri öyrənin.
                                </p>
                                <p href="" class="third">
                                    <span>
                                        Full-time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-Time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 cards-area">
                    <div class="card-area">
                        <a href="./public/digitalMarketing.html">
                            <div class="img-side">
                                <img src="{{ asset('frontend/img/main/eeeeeeee-2.png') }}" alt="">
                            </div>
                            <div class="card-content">
                                <span class="first">
                                    <u>
                                        Machine learning
                                    </u>
                                </span>
                                <p class="second">
                                    ML nəzəriyyələri uyğun riyazi bilikləri, kodlama və öz ML layihənizi yaratmağı
                                    öyrənin. </p>
                                <p href="" class="third">
                                    <span>
                                        Full-time:
                                    </span>
                                    Sürətləndirilmiş temp ilə | 25-30 saat/həftə | 6 aya məzun
                                </p>
                                <p href="" class="fourth">
                                    <span>
                                        Part-time:
                                    </span>
                                    Sərbəst təhsil al | 10-15 saat/həftə | 8 aya məzun
                                </p>

                                <div class="card-button-area">
                                    <p href="">
                                        <u>
                                            Kursa baxın:
                                        </u>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="four" class="mt-5">
        <div class="container">
            <div class="row justify-content-between">
                <ul>
                    <li>
                        <h1>
                            ₼14K ortalama ilə
                        </h1>
                        <h4 class="firsth4">
                            CodeMarketing məzunları maaş artımını qeyd edir
                        </h4>
                    </li>
                    <li>
                        <h1>
                            91%
                        </h1>
                        <h4 class="firsth4">
                            Məzunlarımız 180 gün ərzində işə qəbul olunduğunu bildirir.
                        </h4>
                    </li>
                    <li>
                        <h1>
                            4.8/5
                        </h1>
                        <h4 class="firsth4 secondh4">
                            Karyera reytinqi
                        </h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section id="five" class="mb-5 py-5">
        <div class="container my-3">
            <div class="row justify-content-center">
                <div class="col-12 col-md-5 five-side-left py-3">
                    <p class="first-p">Üzbəüz mentorluq </p>
                    <h2 class="five-h2-upside">Biz necə işləyirik</h2>
                    <div class="five-side-middle">
                        <h2>
                            <h2>{{$statics->where('id',22)->first()->title}}</h2>
                        </h2>
                        <ul>
                            <li>
                                <img src="{{ asset('frontend/img/main/acces.svg') }}" alt="">
                                {{$statics->where('id',23)->first()->title}}
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/main/acces.svg') }}" alt="">
                                {{$statics->where('id',24)->first()->title}}
                            </li>
                            <li>
                                <img src="{{ asset('frontend/img/main/acces.svg') }}" alt="">
                                {{$statics->where('id',25)->first()->title}}
                            </li>
                        </ul>
                    </div>
                    <div class="five-side-down">
                        <img src="{{ asset('frontend/img/main/owl.svg') }}" alt="">
                        <div class="p-title">
                            <p class="title-first">Tələb üzrə texniki təlimlər</p>
                            <p class="for-1300">
                                Üzbəüz mentor xidmətimizlə real vaxt rejimində peşəkar təlimçilərimizlə əlaqə
                                saxlayın.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-5 five-right-side py-3 w-50">
{{--                    <img class="w-100" src="{{ asset('frontend/img/faq/sayt4-01.jpg') }}" alt="">--}}
                    <img class="w-100" src="{{ asset('storage/' . $homeimgs->where('id', 4)->first()->image) }}" alt="">

                </div>
            </div>
        </div>
    </section>
    <section id="six">
        <div class="container">
            <div class="row six-row-side">
                <div class="col-12">
                    <h4>
                        Codemarketing məzunlarının iş yerləri
                    </h4>
                </div>
                <div class="col-12  six-donw-side">
                    <ul>
                        @foreach($logos as $logo)

                            <li>
                                <img src="{{asset('storage/'.$logo['image'])}}" alt="">
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="seven">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 seven-side-left">
                    <h3>
                        Tələbələrin nəticələri
                    </h3>
                    <h2>
                        Biz tələbələrimizə karyera qurmaqda kömək edirik.
                    </h2>
                    <div class="seven-right-middleside">
                        <div class="seven-middle">
                            <p>
                                İşə götürmə reytinqi
                            </p>
                            <div class="seven-border-side"></div>
                            <div class="seven-num">
                                81%
                            </div>
                        </div>
                        <div class="seven-middle">
                            <p>
                                Ortalama əmək haqqı artımı
                            </p>
                            <div class="seven-border-side"></div>
                            <div class="seven-num">
                                ₼14K
                            </div>
                        </div>
                    </div>

                    <div class="slider-area-side">
                        <div class="for-span-area">
                            <span class="first-bar">
                                <div class="first-time"></div>
                            </span>
                            <span class="second-bar">
                                <div class="second-time"></div>
                            </span>
                            <span class="third-bar">
                                <div class="third-time"></div>
                            </span>
                        </div>
                        <h6>
                            Son iş təklifləri
                        </h6>
                        <div class="owl-carousel">
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sliderimg1.png') }}" alt="">
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Günel Hacıyeva</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Full Stack Developer</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Paşa Bank</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sayt2.png') }}" alt="">
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Əhməd Verdiyev</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Marketoloq</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Procter & Gamble</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="slide-area">
                                <div class="img-area">
                                    <img src="{{ asset('frontend/img/faq/sliderimg3.png') }}" alt="">
                                </div>
                                <div class="content-area">
                                    <ul>
                                        <li>
                                            <p class="first-p">Tələbə</p>
                                            <p class="second-p">Leyla Haqverdiyeva </p>
                                        </li>
                                        <li>
                                            <p class="first-p">Vəzifələri </p>
                                            <p class="second-p">Front-end developer</p>
                                        </li>
                                        <li>
                                            <p class="first-p">Şirkət </p>
                                            <p class="second-p">Umico</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>


                    <a href="">
                        Başqa nəticələrə bax
                    </a>

                </div>
                <div class="col-12 col-md-6 seven-side-img">
                    <img src="{{ asset('frontend/img/main/TopicPagePhoto_SE_Outcomes_Desktop.jpeg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="eight" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="eight-h3-side">
                    <span id="alert2" class="alert alert-info d-none"><br></span>
                </div>
                <div class="eight-h3-side">
                    <h3>
                        Sizə kömək etməyə hazırıq.
                    </h3>
                </div>

                <p class="eight-p">
                    Suallarınızı cavablandırmağa hazırıq.
                </p>
                <div class="eight-input-side">
                    <form id="subscribeForm1">
                        @csrf
                        <p>E-mail</p>
                        <input type="email" name="email" id="subscribeEmail" required placeholder="Email adresiniz">

                        <button class="subscribeFirst" type="submit">
                            Müraciət edin
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section('scripts')
<script>
        $(document).on('click','.submit',function(e){
            e.preventDefault();
            var program = $('#select-zone').val();
            var email = $('#email').val();
            var token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{ route('front.mail.programPost') }}',
                type: 'POST',
                data: {
                    '_token': token,
                    'email': email,
                    'program': program,
                },
                success: function(response){
                    if(response.error){
                            $('#alert').html(response.error);
                            $('#alert').removeClass('d-none');
                            setTimeout(function() { $("#alert").addClass('d-none'); }, 2500);
                        }
                    if(response.success){
                        $('#alert').html(response.success);
                        $('#alert').removeClass('d-none');
                        setTimeout(function() { $("#alert").addClass('d-none'); }, 2500);
                    }
                },
            });
        });

</script>
<script>
    $(document).on('click','.subscribeFirst',function(e){
        e.preventDefault();
        var email = $('#subscribeEmail').val();
        var token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{ route('front.mail.subscribeFirst') }}',
            type: 'POST',
            data: {
                '_token': token,
                'email': email,
            },
            success: function(response){
                if(response.error){
                        $('#alert2').html(response.error);
                        $('#alert2').removeClass('d-none');
                        setTimeout(function() { $("#alert2").addClass('d-none'); }, 2500);
                    }
                if(response.success){
                    $('#alert2').html(response.success);
                    $('#alert2').removeClass('d-none');
                    setTimeout(function() { $("#alert2").addClass('d-none'); }, 2500);
                }
            },
        });
    });

</script>
@endsection
