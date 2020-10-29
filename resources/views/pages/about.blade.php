@extends('layouts.app')

@section('title')
About
@endsection

@section('content')
<!-- Content -->
<main class="content-row">
	<div class="page-header page-header-02">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="page-title">About PrimeLaw</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xl-12">
				<div class="icon-box-01 icon-box-01--icon-01">
					<h4 class="icon-box-01__title">We started with a simple idea.</h4>
					<div class="row">
						<div class="col-lg-6 col-xl-6">
							<p class="icon-box-01__text">PRIME LAW PARTNERSHIP was established with a commitment to achieving excellence through the combination of competence, dynamism and integrity.</p>
							<p class="icon-box-01__text">The Firm appreciates the sensitive nature of Legal Practice and therefore ensures at all times, confidentiality and a high standard of professionalism in the handling of client matters.</p>
						</div>
						<div class="col-lg-6 col-xl-6">
							<p class="icon-box-01__text">Our offices are situated at Trans Amadi, the hub of commercial and governmental activity in Port Harcourt. Through the development of our information technology systems, we are able to service our clientele all over the Niger Delta, Lagos, Abuja and abroad.</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<div id="attorney" style="padding-bottom: 220px !important;" class="bg-darkgray color-block-01 color-block-01--02 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <h2 class="content-title-01">Meet Our Attorneys</h2>
                </div>
                <div class="col-xl-6">
                    <div class="content-text-01">
                        <p>We bring each client a combination of deep industry knowledge and expert perspectives from
                            other industries on the challenge at stake, to offer our clients fresh perspectives and
                            breakthrough business insights.</p>
                    </div>
                </div>	
            </div>
            <div class="row">
                <div class="col">
                    <div class="indents-70 indents-xl-25"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="team-block team-block--02">
                        <div class="team-block__item px-2">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team1.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title py-1">
                                    <a href="" data-toggle="modal" data-target="#attorneybio">Bill Uzoma Ukachukwu</a>
                                </h3>
                                <p class="team-block__item-subtitle">Senior Partner</p>
                            </div>
                        </div>
                        <div class="team-block__item px-2">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team2.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title py-1">Lilly-Tariah Sojiye T</h3>
                                <p class="team-block__item-subtitle">Senior Partner</p>
                            </div>
                        </div>
                        <div class="team-block__item px-2">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team3.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title py-1">Oche Samuel Onazi</h3>
                                <p class="team-block__item-subtitle">Senior Associate</p>
                            </div>
                        </div>
                        <div class="team-block__item px-2">
                            <figure class="team-block__item-img">
                                <a href="#">
                                    <img src="{{ asset('files/img/team_img/team1.jpg') }}" alt="">
                                </a>
                            </figure>
                            <div class="team-block__item-content">
                                <h3 class="team-block__item-title py-1">Nweze Nkechi</h3>
                                <p class="team-block__item-subtitle">Associate</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
	</div>
	
    <div class="full-block-01 full-block--bg-01">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="full-block-01__title text-white abt">Achieving excellence through competence, dynamism and integrity”</h2>
				</div>
			</div>
		</div>
	</div>

	@include('partials.modals.attorneyBio')
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
