@extends('layouts.app')

@section('title')
Practice Areas
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-05">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Practice Areas</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="content-title-02">The Firm’s Practice Areas</h3>
                <div class="content-subtitle-02">
                    <p style="font-weight: bold;">The experience accumulated by the members of the Firm span through Commercial and Civil Litigation, Banking and Corporate Finance, Company and Investment Laws, Telecommunication and Technology Law, Oil and Gas Law, Environmental Law, Real Estate, Industrial and Labour Laws, Securities and Capital Market Issues..</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('companyInvestmentLaws') }}">
                            <img  class="pa-img" src="{{ asset('files/img/ci.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm offers professional advice to local and overseas clients on all aspects of Nigerian and International business law.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('companyInvestmentLaws') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('OilandGas') }}">
                            <img class="pa-img" src="{{ asset('files/img/oilgas.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('OilandGas') }}">Oil & Gas</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The members of the Firm have proffered advice and acted on behalf of multinational companies operating in Nigeria on varied aspects of their local activities…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('OilandGas') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="{{ route('telecomPatentTrademarks') }}">
                            <img class="pa-img" src="{{ asset('files/img/Telecoms.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="{{ route('telecomPatentTrademarks') }}">Telecomms, Patents and Trademarks</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm has proffered advice to and assisted individuals and corporate bodies in the formation of and registration of telecommunication companies.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="{{ route('telecomPatentTrademarks') }}">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/fid.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Foreign Investments and Divestments</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm assists clients in complying with all requirements for running a business in Nigeria such as obtaining business permits and or expatriate quota allocations…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <hr>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/about3.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Commercial Laws</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Members have considerable experience in Taxation, Commercial Contracts, Sale of Goods, Insurance Law and Claims, Membership…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/atm.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Banking and Corporate Finance</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>We provide comprehensive advice on all domestic and international banking operations, including lending on the security of all forms of assets.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/labour.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Labour Law</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm advises clients on all Labour related issues and assists in the preparation of Employment Contracts and Employees Handbook.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/capital.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Securities and Capital Market Issues</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Members have been active in the Nigerian capital market, having been part of the team of Solicitors who acted at different times for Issuing Houses…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 ">
                <hr>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/reale.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Property & Real Estate</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm acts for companies, financial institutions, investors, dealers, developers and owners of property and has been engaged in all aspects of real property law</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/ligitation.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Litigation</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>The Firm’s litigation, arbitral and dispute mediation practice arises in the main, from its general representation of clients engaged in the business…</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="block-list-01">
                    <figure class="block-list-01__img">
                        <a href="#">
                            <img class="pa-img" src="{{ asset('files/img/cs.jpg') }}" alt="">
                        </a>
                    </figure>
                    <div class="block-list-01__content">
                        <h3 class="block-list-01__title">
                            <a href="#">Company Secretarial</a>
                        </h3>
                        <div class="block-list-01__text">
                            <p>Aside from attendance at meetings and filing of requisite Returns, the services normally offered include Nominee arrangements and Trusteeship.</p>
                        </div>
                        <a class="gold-c block-list-01__btn" href="#">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="indents-20"></div>
            </div>
        </div>
    </div>
   
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection