@extends('layouts.app')

@section('title')
Oil And Gas
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-05">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">@yield('title')</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="content-title--04">Practice Areas</h3>
                <ul class="sidebar-menu-list ">
                    <li class="{{ (\Request::route()->getName() == 'companyInvestmentLaws') ? ' active' : '' }}">
                        <a href="{{ route('companyInvestmentLaws') }}">Company & Investment Laws</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'OilandGas') ? ' active' : '' }}">
                        <a href="{{ route('OilandGas') }}">Oil & Gas</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'telecomPatentTrademarks') ? ' active' : '' }}">
                        <a href="{{ route('telecomPatentTrademarks') }}">Telecomms, Patents and Trademarks</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'foreignInvestmentsDivestments') ? ' active' : '' }}">
                        <a href="{{ route('foreignInvestmentsDivestments') }}">Foreign Investments and Divestments</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'commercialLaws') ? ' active' : '' }}">
                        <a href="{{ route('commercialLaws') }}">Commercial Laws</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'bankingCorporateFinance') ? ' active' : '' }}">
                        <a href="{{ route('bankingCorporateFinance') }}">Banking and Corporate Finance</a>
                    </li>
                    <li class="{{ (\Request::route()->getName() == 'labourLaw') ? ' active' : '' }}">
                        <a href="{{ route('labourLaw') }}">Labour Law</a>
                    </li>
                    <li class="#">
                        <a href="#">Securities and Capital Market Issues</a>
                    </li>
                    <li class="#">
                        <a href="#">Property & Real Estate</a>
                    </li>
                    <li class="#">
                        <a href="#">Litigation</a>
                    </li>
                    <li>
                        <a href="#">Company Secretarial</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <h4 class="icon-box-01__title">The Firm has wide and varied experience in oil and gas law.</h4>
                <div class="single-content">
                    <p>The members of the Firm have proffered advice and acted on behalf of multinational companies operating in Nigeria on varied aspects of their local activities and have frequently been called upon to review and or draft leases, assignments and or other operating documents.</p>
                    <p>The Firm acts for and advises oil exploration and oil service companies and is frequently involved in obtaining accreditation with the NNPC, providing consultation and advisory services on taxation and other legal issues including the drafting of service engagement documentation.</p>
                
                    <p>In February 2003, a member of the firm was part of a special purpose team that was engaged by the Bureau of Public Enterprises to provide Institutional Analysis of Nigerian Environmental and Related Legislation and International Obligation in relation to the privatization of public enterprises.</p>
                    <div class="indents-25"></div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('footer')
@include('partials.footer')
@endsection