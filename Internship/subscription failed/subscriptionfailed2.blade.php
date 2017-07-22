@extends('layouts.default')
 @section('content')
        <style>
            .content {
                margin-top: 70px;
                font-size: 20px;
            }

            h1 {
                text-align: center;
                font-weight: 700;
                font-size: 50px;
            }

            h3 {
                font-weight: 400;
                font-size: 34px;
                line-height: 40px;
            }

            .normal p {
                line-height: 35px;
            }    

            .buttons {
                width: 40%;
                margin: 0 auto;
            }    

            .button-pos {
                width: 200px;
                font-size: 14px;
                margin-bottom: 10px;
            }


            @media screen and (max-width: 1200px) {
                .content {
                    margin-top: 50px;
                }

                .buttons {
                    width: 50%;
                }
            }

            @media screen and (max-width: 990px) {
                .content {
                    margin-top: 40px;
                    font-size: 16px;
                }

                .buttons {
                    width: 63%;
                }

                h3 {
                    font-size: 28px;
                }
            }

            @media screen and (max-width: 920px) {
                .content {
                    margin-top: 20px;
                }
            }

            @media screen and (max-width: 750px) {
                .content {
                    margin-top: 5px;
                }

                .buttons {
                    width: 80%;
                }

                .normal p {
                    line-height: 30px;
                }
            }

            @media screen and (max-width: 620px) {
                h3 {
                    font-size: 22px;
                }
            }     

            @media screen and (max-width: 580px) {
                .buttons {
                    width: 100%;
                }

            }

            @media screen and (max-width: 480px) {
                .button-pos {
                    width: 100%;
                }

                .normal {
                    font-size: 14px;
                }

                .normal p {
                    line-height: 20px;
                }
            }
        </style>
    </head>
<body>
    <div class='container-fluid'>
        <div class='content'>
            <div class='container t-middle dsktp-middle'>
                <div>
                <h1>Oops!</h1>
                <h3>Your Monthly Subscription Renewal Failed</h3>
                </div>
                <div class='normal'>
                <p>Did you change your card details recently?</p>
                <p>We tried but couldn't charge your card.</p>
                <p>Please click below to try again with another card.</p>
                <div class='buttons'>
                    <button type='submit' class='button btn btn-primary btn-lg button-pos t-left dsktp-t-left'>Try again</button>
                    <button type='submit' class='button btn btn-primary btn-lg button-pos tright dsktp-t-right'>Use another card</button>
                </div>
                </div>
            </div>
        <div>
    </div>
@include('layouts.partials.footer')
@endsection   
