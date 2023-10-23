<header class="header-area main-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo-area">
                    <a href="index.html"><img src="assets/images/logo11.png" width="200" height="33" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="custom-navbar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menu">
                    <ul>
                        <li class="active"><a href="{{ url('/') }}">@lang('words.Home')</a></li>
                        <li><a href="#applayForm">@lang('words.applay now')</a></li>
                        {{-- <li><a href="job-category.html">@lang('words.category')</a></li> --}}
                        <li><a href="#aboutUs">@lang('words.About us')</a></li>
                        <li><a href="#gallery">@lang('words.gallery')</a></li>
                        {{-- <li><a href="index.html#">blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-home.html">Blog Home</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact-us.html">contact</a></li>
                        <li><a href="index.html#">pages</a>
                            <ul class="sub-menu">
                                <li><a href="job-search.html">Job Search</a></li>
                                <li><a href="job-single.html">Job Single</a></li>
                                <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                <li><a href="elements.html">Elements</a></li>
                            </ul>
                        </li> --}}
                        @if(session()->get('locale') !== 'ar')
                        <li><a href="{{ route('LanguageConverter','ar') }}">@lang('words.Arabic')</a></li>
                        @endif
                        @if(session()->get('locale') !== 'en' && session()->get('locale') !== null)
                        <li><a href="{{ route('LanguageConverter','en') }}">@lang('words.English')</a></li>
                        @endif
                        <li class="menu-btn">
                            <a href="{{ route('login') }}" class="template-btn">@lang('words.log in')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>