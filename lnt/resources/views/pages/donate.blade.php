@extends('layouts.app')

@section('content')

<div id="page-header">
    <!-- section background -->
    <div class="section-bg" style="background-image: url(./img/background-2.jpg);"></div>
    <!-- /section background -->

    <!-- page header content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="header-content">
                    <h1>Donation Page</h1>
                    <ul class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Donate</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header content -->
</div>

<!--SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- MAIN -->
			<main id="main" class="col-md-9">
				<!-- article -->
				<div class="article">
					<!-- donation form -->
					<div class="article-content">
						<!--  title -->
						<h2 class="article-title">Donate Online</h2>
						<!-- / title -->

						<!-- CREDIT CARD FORM STARTS HERE -->
						<div class="  credit-card-box col-lg-12 col-md-offset-0" >
							<div class="panel-heading display-table"  >
                 
							</div>
							<div class="panel-body">
								<form role="form" id="payment-form">
									<div class="row display-tr" >
										<h3 class="panel-title display-td" >Gift Amount</h3>
										<div class="display-td" >    
											<br>           
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<style type="text/css">
												.currencyinput input {
												    border: 0;
												}
												a.val{
													background-color: grey;
												}
												a.sel{
													background-color: red;
												}
											</style>
											<div class="form-group">
												<a class="primary-button causes-donate val" type="submit">₹50</a>
												<a class="primary-button causes-donate val" type="submit">₹200</a>
												<a class="primary-button causes-donate val sel" type="submit">₹100</a>
												<a class="primary-button causes-donate val" type="submit">₹500</a>
												<a class="primary-button causes-donate val" type="submit">₹1000</a>
												<a class="primary-button causes-donate val" type="submit">other</a>
											</div>
											<div class="form-group">
												<span class="currencyinput form-control">₹<input type="text" name="amount" placeholder="00.00"></span>
												<label class="radio-inline"><input type="radio" name="optradio">One-time Gift</label>
												<label class="radio-inline"><input type="radio" name="optradio">Recurring Monthly Gift</label>
											</div>
										</div>                        
									</div>
									<hr>
									<div class="row display-tr" >
										<h3 class="panel-title display-td" >Would you like to make this tribute gift?</h3>
										<div class="display-td" >    
											<br>           
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label class="checkbox-inline"><input type="checkbox" value="">Make this gift a tribute</label>
												<select class="form-control" id="sel1">
												    <option>in Honor of</option>
												    <option>in Memory of</option>
												</select>
												<input type="text" class="form-control" name="honorName" placeholder="Honoree Name" />
												<br>
												 <div class="radio">
												  <label><input type="radio" name="optradio">Email</label>
												</div>
												<div class="radio">
												  <label><input type="radio" name="optradio">Postal Mail</label>
												</div>
												<div class="col-xs-12">
													<div class="form-group">
														<label for="email">Email</label>
														<input type="text" class="form-control" name="email" />
													</div>
												</div>  
												<div class="col-xs-12">
													<div class="form-group">
														<label for="message">Your Message</label>
														<textarea  type="text" class="form-control" name="message" ></textarea>
													</div>
												</div>  
											</div>
										</div>                        
									</div>
									<hr>
									<div class="row display-tr" >
										<h3 class="panel-title display-td" >Your information</h3>
										<div class="display-td" >    
											<br>           
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label for="couponCode">Email</label>
												<input type="text" class="form-control" name="couponCode" />
											</div>
										</div>                        
									</div>
									<div class="row">
										<div class="col-xs-7 col-md-7">
											<div class="form-group">
												<label for="firstName">First Name</label>
												<input  type="tel"  class="form-control"  name="firstName"  required  />
											</div>
										</div>
										<div class="col-xs-5 col-md-5 pull-right">
											<div class="form-group">
												<label for="lastName">Last Name</label>
												<input  type="tel"  class="form-control" name="lastName"  required />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label for="phoneNumber">Phone No</label>
												<input type="text" class="form-control" name="phoneNumber" />
											</div>
										</div>                        
									</div>
									<div>
										<label class="checkbox-inline"><input type="checkbox" value="">Remember my contact information on this browser. (Credit card information is not stored.)</label>
									</div>
									<div>
										<label class="checkbox-inline"><input type="checkbox" value="">Yes, I would like to receive email updates.</label>
									</div>
									<hr>
									<div class="row display-tr" >
										<h3 class="panel-title display-td" >Payment Details</h3>
										<div class="display-td" >                            
											<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
										</div>
									</div>   
									<div class="row">
										<div class="col-xs-12">
											<div class="form-group">
												<label for="cardNumber">CARD NUMBER</label>
												<div class="input-group">
													<input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus/>
													<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
												</div>
											</div>                            
										</div>
									</div>
									<div class="row">
										<div class="col-xs-7 col-md-7">
											<div class="form-group">
												<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
												<input  type="tel"  class="form-control"  name="cardExpiry" placeholder="MM / YY" autocomplete="cc-exp" required  />
											</div>
										</div>
										<div class="col-xs-5 col-md-5 pull-right">
											<div class="form-group">
												<label for="cardCVC">CV CODE</label>
												<input  type="tel"  class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required />
											</div>
										</div>
									</div>	
									<div class="row">
										<div class="col-xs-12">
											<a href="#" class="primary-button causes-donate" type="submit">Donate Now</a>
										</div>
									</div>
									<div class="row" style="display:none;">
										<div class="col-xs-12">
											<p class="payment-errors"></p>
										</div>
									</div>
								</form>
							</div>
						</div>            
						<!-- CREDIT CARD FORM ENDS HERE -->
					</div>
					<!-- donation form -->

					<!-- article content -->
					<div class="article-content col-lg-12 col-md-offset-0">
						<!--  title -->
						<h2 class="article-title" style="margin-left:-15px">Other Method of Donations</h2>
						<!-- / title -->
						<br>

						<p>Cheque/DD/RTGS/NEFT in the name of Laxminarayan Trust</p>
						<p>Bank Name:Corporation Bank</p>
						<p>Branch:PBB, Mapusa</p>
						<p>Account number:520101005626133</p>
						<p>IFSC Code:CORP0000552</p>
						<br>
						<br>
						<p>All donation will be acknowledged. Donations are exempted from tax under section 80G vide order No.ITBA/EXM/S/80G/2017-18/1004702351 dated 23.06.2017. PAN CARD NO : AABTL2027R</p>
						<br>
						<blockquote class="block-alert">
							<p>Note: In case if you are facing any difficulty in fund transfer please contact any of our <a href="#" target="_blank">trustees</a>.</p>
						</blockquote>
					</div>
					<!-- /article content -->
				</div>
				<!-- /article -->
			</main>
			<!-- /MAIN -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION-->
@endsection