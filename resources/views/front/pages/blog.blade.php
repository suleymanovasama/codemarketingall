@extends('front.layouts.app')
@section('title','Blog')
@section('content')
<main>


    <!-- <section id="blog-one" class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h1>
                        <span>Cyber</span>
                        Blog
                    </h1>
                </div>
                <div class="col-12 col-md-6 blog-one-img">
                    <img src="{{ asset('frontend/img/blog/Tech-career-quiz_111820_blog.jpg') }}" alt="">
                </div>
                <div class="col-12 col-md-6 blog-one-text">
                    <h2>
                        QUIZ: Which Tech Career Fits You Best?
                    </h2>
                    <div class="blog-link">
                        <a href="">
                            Ready Story <span>></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <section id="blog-ul" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <h3>
                        Ən çox hansı sahələrdə bloqlar var ?
                    </h3>
                </div>
                <div class="col-12 blog-ul-side">
                    <ul>
                        <li>
                            <a href="">
                               Code Marketing
                            </a>
                        </li>
                        <li>
                            <a href="">
                                Full-stack development
                            </a>
                        </li>
                        <li>
                            <a href="">
                               Machine learning
                            </a>
                        </li>
                        <li>
                            <a href="">
                               Rəqəmsal marketinq
                            </a>
                        </li>
                        <!-- <li>
                            <a href="">
                                DATA ANALYTICS
                            </a>
                        </li>
                        <li>
                            <a href="">
                                DIGITAL MARKETING
                            </a>
                        </li>
                        <li>
                            <a href="">
                                FRONT END DEVELOPER
                            </a>
                        </li>
                        <li>
                            <a href="">
                                FULL STACK DEVELOPER
                            </a>
                        </li>
                        <li>
                            <a href="">
                                PRODUCT DESIGN
                            </a>
                        </li>
                        <li>
                            <a href="">
                                PROJECT MANAGEMENT
                            </a>
                        </li> -->
                        <li>
                            <a href="">
                                SOFTWARE ENGINEERING
                            </a>
                        </li>
                        <!-- <li>
                            <a href="">
                                TECH
                            </a>
                        </li> -->
                        <li>
                            <a href="">
                                WEB DESIGN
                            </a>
                        </li>
                        <!-- <li>
                            <a href="">
                                WEB DEVELOPMENT
                            </a>
                        </li> -->
                        <li>
                            <a href="">
                                UX/UI
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="stories">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mt-4">
                        Ən son bloqlar
                    </h2>
                    <!-- <h3 class="mb-4">
                        Görün daha nələr yenidir
                    </h3> -->
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mb-5">
                    <div class="latest-cards">
                        <a href="">
                            <img src="{{ asset('frontend/img/blog/soft-404-error.webp') }}" alt="">
                        </a>
                        <p>
                            <a href="">
                                CodeMarketing bloqlar
                            </a>
                        </p>
                        <a href="">
                            <h2>
                                Soft 404 xətası nədir?
                            </h2>
                        </a>
                        <a href="">
                            <p class="text-lowercase">
                            SEO araşdırmalarında ən çox rast gəlinən və ya unudulan nüans Soft 404 səhvidir. Bu, axtarış sistemlərində saytların reytinqinə mənfi təsir göstərə bilər. Bu, adətən səhifənin silinməsi və məzmunun köçürülməsi kimi hallarda baş verir. Soft 404-ün nə olduğunu, necə baş verdiyini və həll yollarını araşdıraq.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mb-5">
                    <div class="latest-cards">
                        <a href="">
                            <img src="{{ asset('frontend/img/blog/Tech-career-quiz_111820_blog.jpg') }}" alt="">
                        </a>
                        <p>
                            <a href="">
                                CodeMarketing bloqlar
                            </a>
                        </p>
                        <a href="">
                            <h2>
                                Maketing-də data analizi nədir?
                            </h2>
                        </a>
                        <a href="">
                            <p class="text-lowercase">
                                Bu blogda marketinqdə data analiz  nümunələri və ya istifadəsi halları barədə danışırıq.

                                Əksər marketinq mütəxəssislərinin dərindən tanış olduğu bir ssenariyə nəzər salaq.

                                Bir şirkət marketinq üçün kiçik bir sərvət xərcləyir nəticədə reklamlar çox görünür. Lakin investisiyanın gəliri gözləntilərə yaxın deyil. Data analiz daxil edək.
                            </p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex justify-content-center mb-5">
                    <div class="latest-cards">
                        <a href="">
                            <img src="{{ asset('frontend/img/blog/Social-Media-TV-1.webp') }}" alt="">
                        </a>
                        <p>
                            <a href="">
                                CodeMarketing bloqlar
                            </a>
                        </p>
                        <a href="">
                            <h2>
                                Tv yoxsa Rəqəmsal marketing ?
                            </h2>
                        </a>
                        <a href="">
                            <p class="text-lowercase">
                            Məqalədə mənim diqqətimi cəlb edən məsələ odur ki, biz Reklam məsələsində daha çox televiziya üstünlük verməyə çalışırıq (Mən fırıldaqçı və ziyan dəyən tərəf barəsində fikir bildirmirəm). Bu mənim subyektiv fikrimdir çünki orta və cavan nəsil əsasən Bakı əhalisi, daha çox sosial şəbəkələrdə n və veb resurslardan istifadə edirlər.
                            </p>
                        </a>
                    </div>
                </div>

            </div>

            <div class="col-12 blog-nav-area mb-4">
                <a class="pagiantion">
                    <i class="bi bi-caret-left-fill"></i>
                    NEWER
                </a>
                <p>
                    1 of 4
                </p>
                <a class="pagiantion">
                    OLDER
                    <i class="bi bi-caret-right-fill"></i>
                </a>
            </div>
        </div>
    </section>
</main>
@endsection

