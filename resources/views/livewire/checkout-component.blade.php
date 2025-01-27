	<main id="main" class="main-site">
			<style>
			.summary-item .row-in-form input[type=password], .summary-item .row-in-form input[type=text], .summary-item .row-in-form input[type=tel] {
				font-size: 13px;
				line-height: 19px;
				display: inline-block;
				height: 43px;
				padding: 2px 20px;
				max-width: 300px;
				width: 100%;
				border: 1px solid #e6e6e6;
			}
			</style>

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>checkout</span></li>
				</ul>
			</div>

			@if(!$iframe)
			<div class=" main-content-area">
				<form wire:submit.prevent="placeOrder">
				<div class="row">
					<div class="col-md-12">
						<div class="wrap-address-billing">
							<h3 class="box-title">Billing Address</h3>
							<div class = "billing-address">
								<p class="row-in-form">
									<label for="fname">first name<span>*</span></label>
									<input type="text" name="fname" value="" placeholder="Your name" wire:model="firstname">
									@error('firstname') <span class="text-danger">{{$message}}</span> @enderror									
								</p>
								<p class="row-in-form">
									<label for="lname">last name<span>*</span></label>
									<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="lastname">
									@error('lastname') <span class="text-danger">{{$message}}</span> @enderror	
								</p>
								<p class="row-in-form">
									<label for="email">Email Addreess:</label>
									<input  type="email" name="email" value="" placeholder="Type your email" wire:model="email">
									@error('email') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="phone">Phone number<span>*</span></label>
									<input type="number" name="phone" value="" placeholder="10 digits format" wire:model="mobile">
									@error('mobile') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="add">Line1:</label>
									<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line1">
									@error('Line1') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="add">Line2:</label>
									<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="line2">
								</p>
								<p class="row-in-form">
									<label for="country">Country<span>*</span></label>
									<input  type="text" name="country" value="" placeholder="United States" wire:model="country">
									@error('country') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								
								<p class="row-in-form">
									<label for="city">province <span>*</span></label>
									<input  type="text" name="province" value="" placeholder="province name" wire:model="province">
									@error('province') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="city">Town / City<span>*</span></label>
									<input  type="text" name="city" value="" placeholder="City name" wire:model="city">
									@error('city') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form">
									<label for="zip-code">Postcode / ZIP:</label>
									<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="zipcode">
									@error('zipcode') <span class="text-danger">{{$message}}</span> @enderror
								</p>
								<p class="row-in-form fill-wife">							
									<label class="checkbox-field">
										<input name="different-add" id="different-add" value="1" type="checkbox" wire:model="ship_to_different">
										<span>Ship to a different address?</span>
									</label>
								</p>
							</div>
					</div>
					@if ($ship_to_different)
						
					
						<div class="col-md-12">
							<div class="wrap-address-billing">
								<h3 class="box-title">Shipping  Address</h3>
								<div class = "billing-address">
									<p class="row-in-form">
										<label for="fname">first name<span>*</span></label>
										<input type="text" name="fname" value="" placeholder="Your name" wire:model="s_firstname">
										@error('s_firstname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="lname">last name<span>*</span></label>
										<input  type="text" name="lname" value="" placeholder="Your last name" wire:model="s_lastname">
										@error('s_lastname') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="email">Email Addreess:</label>
										<input  type="email" name="email" value="" placeholder="Type your email" wire:model="s_email">
										@error('s_email') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="phone">Phone number<span>*</span></label>
										<input type="number" name="phone" value="" placeholder="10 digits format" wire:model="s_mobile">
										@error('s_mobile') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Line 1:</label>
										<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line1">
										@error('s_line1') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="add">Line 2:</label>
										<input  type="text" name="add" value="" placeholder="Street at apartment number" wire:model="s_line2">
										
									</p>
									<p class="row-in-form">
										<label for="city">province <span>*</span></label>
										<input  type="text" name="province" value="" placeholder="province name" wire:model="s_province">
										@error('s_province') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="country">Country<span>*</span></label>
										<input  type="text" name="country" value="" placeholder="Country" wire:model="s_country">
										@error('s_country') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="zip-code">Postcode / ZIP:</label>
										<input  type="number" name="zip-code" value="" placeholder="Your postal code" wire:model="s_zipcode">
										@error('s_zipcode') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									<p class="row-in-form">
										<label for="city">Town / City<span>*</span></label>
										<input  type="text" name="city" value="" placeholder="City name" wire:model="s_city">
										@error('s_city') <span class="text-danger">{{$message}}</span> @enderror
									</p>
									
								</div>
						</div>
					@endif
				</div>
				
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">						
						<h4 class="title-box">Payment Method</h4>

						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="cod" type="radio" wire:model="paymentmode">
								<span>Cash on Delivery</span>
								<span class="payment-desc">Order Now Pay On Delivery</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="card" type="radio" wire:model="paymentmode">
								<span>Credit/Debit Card</span>
								<span class="payment-desc">You will be redirected once you click to complete payment</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="mobile" type="radio" wire:model="paymentmode">
								<span>Mpesa/Airtel/Equitel</span>
								<span class="payment-desc">You can pay with your credit</span>
								<span class="payment-desc">card if you don't have a paypal account</span>
							</label>
							@error('paymentmode') <span class="text-danger">{{$message}}</span> @enderror
						</div>
						@if(Session::has('checkout'))
						<p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">KSH{{Session::get('checkout')['total']}}</span></p>
						@endif

						@if($submitFormButton)
						<button type="submit" class="btn btn-medium">Place order now</button>
						@endif

					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box f-title">Shipping method</h4>
						<p class="summary-info"><span class="title">Flat Rate</span></p>
						<p class="summary-info"><span class="title">Fixed KSH0.00</span></p>
						
					</div>
				</div>
			</form>
				

			@if($showForm)
				<form action="https://payments.ipayafrica.com/v3/ke" method="post">
					<input name="live" type="hidden" value="{{ env('IPAY_LIVE', '0') }}">
					<input name="oid" type="hidden" value="{{ $formArray['oid'] }}">
					<input name="inv" type="hidden" value="{{ $formArray['inv'] }}">
					<input name="ttl" type="hidden" value="{{ $formArray['ttl'] }}">
					<input name="tel" type="hidden" value="{{ $formArray['tel'] }}">
					<input name="eml" type="hidden" value="{{ $formArray['eml'] }}">
					<input name="vid" type="hidden" value="{{ env('IPAY_VENDOR_ID', 'demo') }}">
					<input name="curr" type="hidden" value="KES">
					<input name="p1" type="hidden" value="paymentforgoods">
					<input name="p2" type="hidden" value="{{ $formArray['p2'] }}">
					<input name="p3" type="hidden" value="">
					<input name="p4" type="hidden" value="">
					<input name="cbk" type="hidden" value="{{ $formArray['cbk'] }}">
					<input name="cst" type="hidden" value="1">
					<input name="crl" type="hidden" value="0">

					<input name="mpesa" type="hidden" value="env('IPAY_MPESA', 0)">
					<input name="airtel" type="hidden" value="env('IPAY_AIRTEL', 0)">
					<input name="equity" type="hidden" value="env('IPAY_EQUITY', 0)">
					<input name="creditcard" type="hidden" value="env('IPAY_CREDIT', 0)">
					<input name="debitcard" type="hidden" value="env('IPAY_DEBIT', 0)">

					<input name="hsh" type="hidden" value="{{ $formHash }}">
					<input value="Complete Payment" type="submit" class="btn btn-success btn-medium">
				</form>
			@else

			@endif

			</div><!--end main content area-->


			@else
				{!! $iframe !!}
			@endif
		</div><!--end container-->


	</main>
	<!--main area-->
