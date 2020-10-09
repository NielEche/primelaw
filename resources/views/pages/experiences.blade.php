@extends('layouts.app')

@section('title')
Experiences
@endsection

@section('content')
<main class="content-row">
    <div class="page-header page-header-04">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="page-title">Experiences</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="indents-13"></div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-3">
                <h2 class="content-title-01 content-title--06">Relevant Previous Experience In Similar Transactions</h2>
            </div>
            
            <div class="col-lg-1">
                <div class="content-divider"></div>
            </div>
            <div class="col-lg-4">
                <p>
                    <span class="dropcap">T</span>he firm has routinely advised its clients on various aspects of urban development laws and also on compliance with those laws including enforcement and litigation. </p>
            </div>
            <div class="col-lg-4">
                <p>We have also been involved in the settlement of several community related issues arising from the purchase and development of landed properties by our clients.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="indents-80"></div>
            </div>
        </div>
    </div>

    <div class="full-block-04">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 px-5">
                    <div class="full-block-04__content">
                        <h2 class="full-block-04__title">In the recent past, the firm has been involved in;</h2>
                        <div class="full-block-04__text">
                            <p>We provide litigation and advisory services to:</p>
                        </div>
                        <div class="module_skills module_skills-process">
                            <div class="module_inner">
                                <div class="shortcode_skills">
                                    <ul>
                                        <li>- Total E&P Nigeria Limited</li>
                                        <li>- SkyBank Plc</li>
                                        <li>- Ecobank Plc</li>
                                        <li>- Fidelity Bank</li>
                                        <li>- Heritage Bank</li>
                                        <li>- Sundry Foods Limited</li>
                                        <li>- Colony Properties, Inter Alia</li>
                                    </ul>
                                    <p>We have obtained the consent of the companies mentioned herein to provide this information and would be willing to provide any references or specific information which you may require.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <img class="full-block-04__img w-100 h-100 " src="{{ asset('files/img/slider/slide2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection