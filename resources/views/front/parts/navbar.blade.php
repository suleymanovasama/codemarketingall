<nav>
    <div class="navigation">
        <div class="logo-area">
            <a href="{{'show.home'}}">
                <img src="{{ asset('frontend/img/main/pngpng 1.png') }}" alt="">
            </a>
        </div>

        <div class="nav-side">
            <ul>
                <li class="for-click">
                    <a data-id="1" class="salam" href="javascript:void(0)">
                        Kurslar
                        <div class="arrow-nav">
                            <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt="">
                        </div>
                    </a>
                    <ul class="sub-menu">
                        <li>
                            <a href="{{ route('front.courses') }}">
                                CodeMarketing
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.programming') }}">
                                Full-Stack proqramlaşdırma
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.digitalMarketing') }}">
                                Machine learning
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="{{ route('front.howework') }}">
                        Niyə biz?
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.outcomes') }}">
                        Nəticələr
                    </a>
                </li>
                <li class="for-click">
                    <a data-id="2" class="salam" href="{{ route('front.contact') }}">
                        Əlaqə
                    </a>
                </li>
                <li>
                    <a href="{{ route('front.blog') }}">
                        Bloq
                    </a>
                </li>
            </ul>
            <div class="button-area">
                <div class="sign-in">
                    <a href="{{ route('front.contact') }}"> Müraciət et</a>
                </div>
                <div class="have-question">
                    <a href="{{ route('front.communities') }}">
                        Webinarlar
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-phone">
            <i class="bi bi-list"></i>
        </div>
    </div>
    <div class="nav-phone-area">
        <details>
            <summary>Kurslar <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt=""></summary>
            <div class="open-area">
                <ul class="open-area-ul">
                    <li class="open-area-ul-li">
                            <a href="{{ route('front.courses') }}">
                                CodeMarketing
                            </a>
                    </li>
                    <li class="open-area-ul-li">
                            <a href="{{ route('front.programming') }}">
                                Full-Stack proqramlaşdırma
                            </a>
                    </li>
                    <li class="open-area-ul-li">
                            <a href="{{ route('front.digitalMarketing') }}">
                                Machine learning
                            </a>
                    </li>

                </ul>
            </div>
        </details>

        <a href="{{ route('front.howework') }}"  class="for-main-a">
            Niyə biz?
        </a>

        <a href="{{ route('front.outcomes') }}" class="for-main-a">
            Nəticələr
        </a>

        <a href="{{ route('front.contact') }}" class="for-main-a">
            Əlaqə
        </a>

        <!-- <details>
            <summary>Əlaqə <img src="{{ asset('frontend/img/main/arrow.svg') }}" alt=""></summary>
            <div class="open-area">
                <ul class="open-area-ul">
                    <li class="open-area-ul-li">
                        <a href="{{ route('front.communities') }}">
                            Contact
                        </a>
                    </li>
                    <li class="open-area-ul-li">
                        <a href="">
                            Data Science
                        </a>
                    </li>
                    <li class="open-area-ul-li">
                        <a href="">
                            Data Analytics
                        </a>
                    </li>
                    <li class="open-area-ul-li">
                        <a href="">
                            UX / UI Design
                        </a>
                    </li>
                    <li class="open-area-ul-li">
                        <a href="">
                            Digital Marketing
                        </a>
                    </li>
                    <li class="open-area-ul-li">
                        <a href="">
                            Technical Project Management
                        </a>
                    </li>
                </ul>
            </div>
        </details> -->

        <a href="" class="for-main-a">
            Blog
        </a>
        <a href="{{ route('front.contact') }}" class="for-main-a">
            Müraciət et
        </a>

        <div class="mobil-button-area">
            <a href="{{ route('front.communities') }}" class="have-question">
               Webinarlar
            </a>
        </div>

    </div>
</nav>
