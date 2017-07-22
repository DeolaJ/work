@extends('layouts.default')

  @section('content')
   @include('layouts.partials.dashboard_navbar')
    <div class='container-fluid personality'>
        	<div class='personality-header'>
                <h1>PERSONALITY TEST AND MOOD TEST</h1>
            </div>
            <br>
            <div class='personality-content container-fluid'>
                <div class='personality-content-top'>
                    <div>
                        Hello,
                        <p>You are about to take the <strong>personality and mood</strong> TEST</p>
                    </div> 
                    <br>
                    <div class='container personality-button-pos'>    
                        <button type='submit' class='btn btn-primary btn-lg personality-button-width'>TAKE TEST</button>
                    </div>
                </div>
            </div>    
        </div>
    @include('layouts.partials.footer')
  @endsection        