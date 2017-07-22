@extends('layouts.default')
 @section('content')
	<style>
        .content {
        	margin-top: 100px;
        }

        .header {
        	width: 730px; 
        	padding: 0 30px;
        }

        .heading {
        	width: 650px;
        }

        .heading h1 {
        	text-align: center;
        	color: rgb(243,192,49);
        	font-weight: 900;
        	font-size: 49px;
        }

        .heading h3 {
        	font-weight: 800;
        	color: rgb(72,112,181);
        	font-size: 28px;
        }

        .icon-ion-android-warning:before {
            content: "\f3bc" !important;
        }

        @media screen and (max-width: 1200px) {
        	.leftbody-pos {
        		font-size: 150px;
        	}

        	.content {
        		margin-top: 70px;
        	}
        }

        @media screen and (max-width: 1030px) {
        	.header {
	        	width: 560px; 
	        	padding: 0 20px;
	        }

        	.heading {
	        	width: 530px;
	        }

        	.heading h1 {
	        	text-align: center;
	        	color: rgb(243,192,49);
	        	font-weight: 900;
	        	font-size: 40px;
	        }

        	.heading h3 {
	        	font-weight: 800;
	        	color: rgb(72,112,181);
	        	font-size: 21px;
	        }

	        .content {
	        	margin-top: 40px;
	        }
        }

        @media screen and (max-width: 920px) {
        	.leftbody-pos {
        		font-size: 130px;
        		height: 340px;
        	}

        	.header {
        		width: 520px;
        		padding: 0 10px;
        	}

        	.heading {
        		width: 500px;
        	}

        	.content {
        		margin-top: 20px;
        	}
        }

        @media screen and (max-width: 810px) {
        	.heading p {
        		font-size: 14px;
        	}

        	.leftbody {
        		padding: 0 !important;
        	}

        	.leftbody-pos {
        		padding: 5px;
        	}
        }

        @media screen and (max-width: 768px) {
        	.content {
        		margin-top: 0;
        	}

        	.leftbody-pos {
        		border: none;
        		height: auto;
        		margin-top: 5px;
        	}

        	.rightbody {
        		padding: 0 10%;
        	}

        	.rightbody .header, .rightbody .heading {
        		width: 100%;
        	}
        }

        @media screen and (max-width: 760px) {
        	.leftbody-pos {
        		font-size: 140px;
        		height: 145px;
        	}

        	.rightbody h3 {
        		text-align: center;
        	}
        }

        @media screen and (max-width: 645px) {
        	.heading p {
        		font-size: 12px;
        	}

        	.heading h3 {
        		font-size: 18px;
        	}

        	.rightbody {
        		padding: 0 5%;
        	}
        }

        @media screen and (max-width: 500px) {
        	.rightbody {
        		padding: 0 2%;
        	}

        	.heading h3 {
        		font-size: 16px;
        	}

        	.heading p {
        		font-size: 11px;
        	}

        	.textbox {
        		width: 200px;
        	}
        }
    </style>
    
    <div class='container-fluid'>
    	<div class='content'>
	        <div class='row'>
	        	<div class='leftbody col-lg-3 col-md-3 col-sm-3 col-xs-12'>
		           	<div class='container-fluid leftbody-pos t-middle dsktp-t-middle'>
		           		<span class='glyphicon glyphicon-warning-sign icon-ion-android-warning'></span>
		           	</div>
	           </div>
	           <div class='rightbody col-lg-9 col-md-9 col-sm-9 col-xs-12'>
	           		<div class='header'>
	           			<div class='heading'>
		           			<h1 class=t-middle>Oops!</h1>
		           			<h3>Your Monthly Subscription Renewal Failed</h3>
	           			</div>
	           			<p>Did you change your card details recently? We tried severally but couldn't charge your card. Please click <a href='#'>here</a> to try again with another card.</p>
	           			<p>If you think this is an error, kindly notify us using the form below.</p>
	           			<br>
	           			<form>
	           				<textarea class='textbox form-control' rows='4'></textarea>
	           				<br>
	           				<button class='button button-neutral' type='submit'>Send</button>
	           			</form>
	           			<br>
	           		</div>
	           </div>
	           
	        </div>
        </div>
    </div>
@include('layouts.partials.footer')
@endsection   
