@extends('layouts.app')
@section('content')

<!-- Map Section Start -->
<section id="map">
    <div class="container-fluid">
      <div class="row">
        <div id="map_canvas"></div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Contact Us Section -->
  <section id="contact-map" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title-header text-center">
            <h2 class="section-title wow fadeInUp" data-wow-delay="0.2s">Contact Us</h2>
            <p class="wow fadeInDown" data-wow-delay="0.2s">
                Have questions or need support? We're here to help. Reach out to us using the form below and our team will get back to you promptly.
            </p>
          
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8 col-md-12 col-xs-12">
          @include('alert-messages')
          <div class="container-form wow fadeInLeft" data-wow-delay="0.2s">
            <div class="form-wrapper">
              <form action="{{ route('frontend.contact.store') }}" method="POST" role="form">
                @csrf
                <div class="row">
                    <!-- Name -->
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Full Name" value="{{ old('name') }}" required
                                   data-error="Please enter your name">
                            @error('name')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <!-- Email -->
                    <div class="col-md-6 form-line">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Email" value="{{ old('email') }}" required
                                   data-error="Please enter your Email">
                            @error('email')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <!-- Subject -->
                    <div class="col-md-12 form-line">
                        <div class="form-group">
                            <input type="text" class="form-control" id="msg_subject" name="subject"
                                   placeholder="Subject" value="{{ old('subject') }}" required
                                   data-error="Please enter your message subject">
                            @error('subject')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
            
                    <!-- Message -->
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" rows="4" id="message" name="message"
                                      required data-error="Write your message">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="help-block text-danger">{{ $message }}</div>
                            @enderror
                        </div>
            
                        <!-- Submit Button -->
                        <div class="form-submit">
                            <button type="submit" class="btn btn-common" id="form-submit">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i> Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Us Section End -->

  <!-- Map Section Start -->
  <section id="google-map-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <object style="border:0; height: 450px; width: 100%;" 
          data="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5017.36875793561!2d-114.08553382340831!3d51.04044984470811!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe006a87043%3A0xb45520a495bf2332!2s924%2014%20Ave%20SW%2C%20Calgary%2C%20AB%20T2R%200N7!5e0!3m2!1sen!2sca!4v1751391465169!5m2!1sen!2sca"></object>
        </div>
      </div>
    </div>
  </section>
  <!-- Map Section End -->

  <!-- Contact text Start -->
  <section id="contact-text">
    <div class="container">
      <div class="row contact-wrapper">
        <div class="col-lg-4 col-md-5 col-xs-12">
          <ul>
            <li>
              <i class="lni-home"></i>
            </li>
            <li><span>{{ $company->name ?? 'My Company'}}, {{ $company->address ?? 'Add address' }}</li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-phone"></i>
            </li>
            <li><span>{{ $company->phone ?? 'Add Phone'}}</span></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-3 col-xs-12">
          <ul>
            <li>
              <i class="lni-envelope"></i>
            </li>
            <li><span>{{ $company->email ?? 'Add email'}}</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact text End -->

@endsection
