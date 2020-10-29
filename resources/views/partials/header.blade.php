<div class="header-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-2 col-xs-4">
                <div class="logo-img">
                    <a href="{{ route('index') }}">
                        <img src="{{ asset('files/img/PLP1.svg') }}" alt="logo">
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

                            <li  class="{{ (\Request::route()->getName() == 'about') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                                <ul class="ul-left">
                                    <li><a href="{{ route('about') }}">About</a><hr></li>
                                    <li><a href="{{ route('about') }}#attorney">Attorneys</a></li>
                                </ul>
                            </li>

                            <li  class="{{ (\Request::route()->getName() == 'practiceArea') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}">
                                <a href="{{ route('practiceArea') }}">Practice Areas</a>
                                <ul class="ul-left">
                                    <li><a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a><hr></li>
                                    <li><a href="{{ route('OilandGas') }}">Oil & Gas</a><hr></li>
                                    <li><a href="{{ route('telecomPatentTrademarks') }}">Telecommunication, Patents and Trade Marks</a> <hr> </li>
                                    <li><a href="{{ route('foreignInvestmentsDivestments') }}">Foreign Investments and Divestments</a><hr></li>
                                    <li><a href="#">Commercial Law</a><hr></li>
                                    <li><a href="#">Labour Law</a></li>
                                </ul>
                            </li>
                            <li class="{{ (\Request::route()->getName() == 'experiences') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                <a href="{{ route('experiences') }}">Experiences</a>
                            </li> 
                            <li class="" >
                                <a href="">News</a>
                            </li> 
                           
                            <li class="{{ (\Request::route()->getName() == 'contact') ? 'current-menu-ancestor current-menu-item menu-item menu-item' : '' }}" >
                                <a href="#">Contacts</a>
                                <ul class="ul-left">
                                    <li class=" {{ (\Request::route()->getName() == 'contact') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                        <a href="{{ route('contact') }}">Contact</a><hr>
                                    </li>
                                    <li class=" {{ (\Request::route()->getName() == 'appointment*') ? 'current-menu-ancestor current-menu-item menu-item' : '' }}" >
                                        <a href="{{ route('appointment.index') }}">Appointment</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>