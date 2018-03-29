@extends('layouts.app')

@section('content')
    <h1>contact</h1>
    <h3>We are here to help you please drop your message with your Name and Mail ID.</h3>

    <form role="form" id="contact-form" class="contact-form" method="POST" >

        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" class="form-control" name="First Name" autocomplete="off" id="First Name" placeholder="First Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <input type="email" class="form-control" name="Last Name" autocomplete="off" id="Last Name" placeholder="Last Name">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn main-btn pull-right">Send a message</button>
                </div>
            </div>
    </form>
    <div style="text-align: center">

        <h2>Our Contact details.</h2>

        <a href="https://www.njit.edu/" target="_blank">Contact US</a>
    </div>

@endsection
