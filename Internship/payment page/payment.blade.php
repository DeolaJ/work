@extends('layouts.default')

  @section('content')
   @include('layouts.partials.nav')
 <div class="container"> 
 <!-- Main container -->

      <div class="container-fluid">
              <div class='text-center'>
                <h2 class="paypag-heading-size">
                 <strong>Upgrade to Premium</strong>
                </h2>
                <p class="paypag-para-color paypag-para-size"><strong>Enter your payment information to upgrade</strong><br/>
                <span class='paypag-para-small'>Premium organization - 5 users (Annual) $100.00 per 12 months</span></p>
              </div>
         
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <p class="text-center paypag-lower-para-size">
                        <strong>Payment Method</strong> 
                    </p>
                    <hr class='paypag-line-top'>
                    <form name="paymentform" action="" method="post" >
                        <div class="row">
                            <div class="col-lg-12 paypag-input-margin"><input type="radio" name="credit_card" id="credit_card" value="Credit Card" checked>
                            Credit Card</div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6 col-sm-12"><input type="text" class="form-control one-half paypag-input-margin" placeholder="First Name"></div>
                            <div class="col-lg-6 col-sm-12"><input type="text" class="form-control one-half paypag-input-margin" placeholder="Last Name"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12"><input type="text" class="form-control one-half paypag-input-margin" placeholder="Credit Card Number" required></div>
                        </div>

                        <div class="row form-group paypag-card-det">
                            <div class="col-lg-6 row">
                                <p class="form-control-static pull-left col-lg-4">Expires:</p>
                                <input type="text" maxlength="2" class="form-control one-half paypag-input-margin paypag-input-width pull-left col-lg-2" placeholder="MM" required>
                                <input type="text" maxlength="2" class="form-control one-half paypag-input-margin paypag-input-width pull-left col-lg-2" placeholder="YY" required>
                            </div>
                            <div class="col-lg-5 col-lg-offet-1 row">
                                <p class="form-control-static pull-left paypag-input-margin col-lg-3">CVV</p>
                                <input type="text" maxlength="4" class="form-control one-half paypag-input-margin paypag-input-width-n pull-left" id="cvv" placeholder="CVV" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12"><input type="text" class="form-control one-half paypag-input-margin" placeholder="Address" required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><input type="text" class="form-control one-half paypag-input-margin" placeholder="City" required></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8"><input type="text" class="form-control one-half paypag-input-margin" placeholder="State" required></div>
                            <div class="col-lg-4"><input type="text" class="form-control one-half paypag-input-margin" placeholder="Zip"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12"><select class="form-control paypag-input-margin">
                                <option>Nigeria</option>
                                <option>United States</option>
                                <option>Afghanistan</option>
                                <option>Iraq</option>
                                <option>Somalia</option>
                                </select>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <hr class="paypag-line-bottom">
                        <div class="row">
                        <div class="col-sm-12">
                            <div><input type="radio" name="credit_card" id="credit_card" value="Credit Card" checked>
                            Paypal</div>
                            <p class="paypag-para-small paypag-para-color">You will be redirected to another page to complete your payment</p>
                        </div>
                        </div>
                        <hr class="paypag-line-bottom">
                        <div class="row text-center">
                            <button class="btn btn-primary button-size" type="submit"><span class="">Proceed</span></button>
                        </div>
                    </form>
                    <div class="row text-center paypag-freq-pos">
                        <a class='btn btn-default' href="#frequently" data-toggle="collapse" role="button" aria-haspopup="true" aria-expanded="true">Frequently Asked Questions</a>
                        <div class='collapse' id='frequently'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid enim ab antiquis ex eo genere, quod ad disserendum valet, praetermissum est? Aliter homines, aliter philosophos loqui putas oportere? Apparet statim, quae sint officia, quae actiones. Duo Reges: constructio interrete.</div>
                    </div>
              </div>
            </div>
        </div>

    </div>
    @include('layouts.partials.footer')
@endsection        