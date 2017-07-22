@extends('layouts.default')

  @section('content')
   @include('layouts.partials.nav')

    <div class="container dsktp-padding-v2 padding-v2"> {{-- Main container--}}

      <div class="dsktp-padding-v-bottom4">
        <h2 class="heading-large text-blue text-center dsktp-padding-v-top4 dsktp-padding-v-bottom2">
         Upgrade to Premium
        </h2>
        <p class="text-center text-dark" ><strong>Enter your payment information to upgrade</strong><br/>
        Premium organization - 5 users (Annual)<br/>
        $100.00 per 12 months</p>
  		 
  			<div class="row">
    		 	<div class="col-lg-6 col-lg-offset-3">
                     <p class="heading-medium text-center text-dark">
                        Payment Method 
                    </p>
                    <hr/>
                    <form name="paymentform" action="" method="post" >
                        <div class="row dsktp-margin-v">
                            <div class="col-lg-12"><input type="radio" name="credit_card" id="credit_card" value="Credit Card" checked>
                            Credit Card</div>
                        </div>

                        <div class="row dsktp-margin-v">
                            <div class="col-lg-6 col-sm-12"><input type="text" class="form-control one-half" placeholder="First Name"></div>
                            <div class="col-lg-6 col-sm-12"><input type="text" class="form-control one-half" placeholder="Last Name"></div>
                        </div>

                        <div class="row dsktp-margin-v">
                            <div class="col-lg-12"><input type="text" class="form-control one-half" placeholder="Credit Card Number"></div>
                        </div>

                        <div class="row form-group dsktp-margin-v">
                            <div class="col-md-2">
                                <p class="form-control-static">Expires:</p>
                            </div>
                            <div class="col-md-2">
                                <input type="text" maxlength="2" class="form-control one-half" placeholder="MM">
                            </div>

                            <div class="col-md-2">
                                <input type="text" maxlength="2" class="form-control one-half" placeholder="YY">
                            </div>

                            <div class="col-md-1">
                                <p class="form-control-static">CVV</p>
                            </div>

                            <div class="col-md-2">
                                <input type="text" maxlength="4" class="form-control one-half" id="cvv" placeholder="CVV">
                            </div>
                        </div>


                        <div class="row dsktp-margin-v">
                            <div class="col-lg-12"><input type="text" class="form-control one-half" placeholder="Address"></div>
                        </div>
                        <div class="row dsktp-margin-v">
                            <div class="col-lg-12"><input type="text" class="form-control one-half" placeholder="Address"></div>
                        </div>
                        <div class="row dsktp-margin-v">
                            <div class="col-lg-12"><input type="text" class="form-control one-half" placeholder="City"></div>
                        </div>
                        <div class="row dsktp-margin-v">
                            <div class="col-lg-8"><input type="text" class="form-control one-half" placeholder="State"></div>
                            <div class="col-lg-4"><input type="text" class="form-control one-half" placeholder="Zip"></div>
                        </div>
                        <div class="row dsktp-margin-v-top dsktp-padding-v-bottom">
                            <div class="col-lg-12"><select class="form-control">
                                <option>Nigeria</option>
                                <option>United States</option>
                                <option>Afghanistan</option>
                                <option>Iraq</option>
                                <option>Somalia</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <hr/>
                        <div class="row">
                        <div class="col-sm-12">
                            <div class="col-sm-12"><input type="radio" name="credit_card" id="credit_card" value="Credit Card" checked>
                            Credit Card</div>
                            <p class="base-text-size-small">You will be redirected to another page to complete your payment</p>
                        </div>
                        </div>
                        <hr class="dsktp-margin-v" />
                        <div class="row text-center">
                            <button class="btn button button-brand" type="submit"><span class="dsktp-margin-h4">Proceed</span></button>
                        </div>
                        <div class="row text-dark">
                            <h4 class="text-center dsktp-margin-v-top2 dsktp-margin-v-bottom">Frequently Asked Questions</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? Aliter homines, aliter philosophos loqui putas oportere? Apparet statim, quae sint officia, quae actiones. Duo Reges: constructio interrete.</p>
                        </div>
                    </form>

    		  </div>
    		</div>
  		</div>

    </div>
    @include('layouts.partials.footer')
  @endsection
