<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-2 col-xs-4">
                <div class="logo-img">
                    <a href="index.php">
                        <img src="{{ asset('files/img/primelaw-logo.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-10 col-xs-8">
                <div class="header-content-block">
                    <nav class="main-nav">
                        <div class="main-nav__btn-wrapp">
                            <div class="main-nav__btn">
                                <div class="icon-left"></div>
                                <div class="icon-right"></div>
                            </div>
                        </div>
                        <ul class="main-nav__list">
                            <li class=" {{ (\Request::route()->getName() == 'index') ? 'current-menu-ancestor current-menu-item menu-item' : '' }} " > 
                                <a href="{{ route('index') }}">Home</a>  
                            </li> 
                            <li class="{{ (\Request::route()->getName() == 'about') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" > 
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li  class="{{ (\Request::route()->getName() == 'practiceArea') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}">
                                <a href="{{ route('practiceArea') }}">Practice Areas</a>
                                <ul>
                                    <li class="{{ (\Request::route()->getName() == 'companyInvestmentLaws') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}"><a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a></li>
                                    <li><a href="single_case.html">Oil & Gas</a></li>
                                    <li><a href="practice.html">Telecommunication, Patents and Trade Marks</a></li>
                                    <li><a href="single_practice.html">Foreign Investments and Divestments</a></li>
                                    <li><a href="team.html">Commercial Law</a></li>
                                    <li><a href="single_team_member.html">Labour Law</a></li>
                                </ul>
                            </li>
                           <li class="{{ (\Request::route()->getName() == 'attorneys') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                <a href="{{ route('attorneys') }}">Attorneys</a>
                            </li> 
                            <li class="{{ (\Request::route()->getName() == 'experiences') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                <a href="{{ route('experiences') }}">Experiences</a>
                            </li> 
                            <li class="menu-item">
                                <a href="#">News</a>
                                <ul>
                                    <li><a href="blog_fullwidth.html">Blog fullwidth</a></li>
                                    <li><a href="blog_with_right_sidebar.html">With right sidebar</a></li>
                                    <li><a href="blog_with_left_sidebar.html">With left sidebar</a></li>
                                    <li>
                                        <a href="#">Blog post</a>
                                        <ul>
                                            <li><a href="blog_post_fullwidth.html">Fullwidth</a></li>
                                            <li><a href="blog_post_right_sidebar.html">Right sidebar</a>
                                            </li>
                                            <li><a href="blog_post_left_sidebar.html">Left sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'contact') ? 'current-menu-ancestor current-menu-item menu-item menu-item' : '' }}" >
                                <a href="#">Contacts</a>
                                <ul>
                                    <li class="{{ (\Request::route()->getName() == 'contact') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                        <a href="{{ route('contact') }}">Contact</a>
                                    </li>
                                    <li class="{{ (\Request::route()->getName() == 'appointment') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                        <a href="{{ route('appointment') }}">Appointment</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="search-block">
                        <button class="search-icon-btn">Search</button>
                        <div class="search-block__dropdown">
                            <form action="#" class="search-block__form">
                                <input class="search-block__input" type="text" name="search_btn"
                                    placeholder="Search...">
                                <button class="search-block__btn" type="button">Search</button>
                            </form>
                        </div>
                    </div>
                    <div class="contact-phone">
                        <p>+234 809 500 0600</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>