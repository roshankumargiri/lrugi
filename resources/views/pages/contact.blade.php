@extends('index')
@section('body')
<!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form  action = "/contact/formsubmit" method="post">
            @csrf
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control"  value = "{{old('name')}}" name="name" type="text" placeholder="Name" >
                <p class="help-block text-danger">  
                  @foreach ($errors->get('name') as $message)    {{$message}}  @endforeach</p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" value = "{{old('email')}}" name="email" type="text" placeholder="Email Address" >
                <p class="help-block text-danger">@foreach ($errors->get('email') as $message)    {{$message}}  @endforeach</p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" value = "{{old('phone')}}" name="phone" type="text" placeholder="Phone Number" >
                <p class="help-block text-danger">@foreach ($errors->get('phone') as $message)    {{$message}}  @endforeach</p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" value = "" name="msg" rows="5" placeholder="Message">{{old('msg')}}</textarea>
                <p class="help-block text-danger">@foreach ($errors->get('msg') as $message)    {{$message}}  @endforeach</p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
  @endsection