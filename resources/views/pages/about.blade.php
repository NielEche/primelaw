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

	<div class="full-block-01 full-block--bg-01">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h2 class="full-block-01__title">Achieving excellence through competence, dynamism and integrity”</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="color-block-02 color-block-02--01">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="shortcode-counter-wrapp">
						<div class="shortcode-counter">
							<div class="counter-wrapper">
								<div class="counter-content">
									<div class="stat-count-wrapper">
										<p class="stat-count stat-count__dec" data-count="72">0</p>
										<p class="counter-title">Charges
											<br> Dropped</p>
									</div>
									<div class="stat-temp"></div>
								</div>
							</div>
						</div>
						<div class="shortcode-counter">
							<div class="counter-wrapper">
								<div class="counter-content">
									<div class="stat-count-wrapper">
										<p class="stat-count" data-count="87">0</p>
										<p class="counter-title">Cases
											<br> Won</p>
									</div>
									<div class="stat-temp"></div>
								</div>
							</div>
						</div>
						<div class="shortcode-counter">
							<div class="counter-wrapper">
								<div class="counter-content">
									<div class="stat-count-wrapper">
										<p class="stat-count" data-count="36">0</p>
										<p class="counter-title">Cases
											<br> Dismissed</p>
									</div>
									<div class="stat-temp"></div>
								</div>
							</div>
						</div>
						<div class="shortcode-counter">
							<div class="counter-wrapper">
								<div class="counter-content">
									<div class="stat-count-wrapper">
										<p class="stat-count" data-count="24">0</p>
										<p class="counter-title">Countersuits
											<br> Filed</p>
									</div>
									<div class="stat-temp"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</main>
@endsection

@section('footer')
@include('partials.footer')
@endsection
