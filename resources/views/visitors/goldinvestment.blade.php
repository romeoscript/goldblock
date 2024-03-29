@extends("layouts.spacedcustomlayout")

@section("body")


<main class="goldinvestment-contents ourservices-page">
	<!-- contents of the page -->
 <section>
 	<div class="paragraph goldinvestment-header header">
    		<h1>
    			<span class="line"></span> Trustbund fx <span class="line"></span>
    		</h1>
    	</div>
    	<div class="paragraph">
    		<h2>gold investments</h2>
    		<div class="flex goldinvestment-row">
    			<p>
    				Commonly seen as a great store of wealth, this precious metal is also known as a reliable safe-haven asset. With a rich history amongst almost all global cultures, gold remains a highly popular investment. Although it has multiple uses, its primary function is typically to hedge against inflation in an often volatile futures market, as well as to diversify existing Precious Metals Investment Retirement Accounts. Gold has been one of the most valuable precious metals throughout human history, used by elites as a symbol of wealth for centuries due to its rarity and its ability to hold its worth for a long time. Historically, it has been the most common way to pass on one’s wealth as an inheritance from one generation to the next. Gold is considered a worthy investment, with coins and bars available for purchase in various sizes, ranging from one gram to a whopping 400 ounces. Being the most reliable investment commodity available, gold has proven to be a perfect way to diversify your investment portfolio and an excellent safeguard against volatile currency.
    			</p>
    			<div class="img-container">
    				<img src="{{asset("images/ourservice-goldinvest-img1.jpg")}}" alt="gold investment">
    			</div>
    		</div>
    	</div>
 </section>

 <!--want to see more services section -->
	<section>
		 <div class="want-tosee-more flex">
    	  	<p>want to see more services &quest;</p>
    	  	<a href="{{route('services')}}" target="_blank">see all services</a>
    	  </div>
	</section>

	<section class="start-financial-freedom">
    	<div class="flex">
    		<p>Start your journey to
    	   <span class="lg-font">financial freedom</span></p>
    	   <a href="{{route('login')}}">get started</a>
    	</div>
    </section>

</main>

@endsection
