@extends('index')
@section('body')
<!-- Masthead -->
<section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Transaction</h2>

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
          <form  action = "/transactions" method="post">
            @csrf
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Title</label>
                <input class="form-control"  value = "" name="title" type="text" placeholder="Title" >
                
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Description</label>
                <input class="form-control" value = "" name="description" type="text" placeholder="Description" >
                
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Amount</label>
                <input class="form-control" value = "" name="amount" type="text" placeholder="Amount" >
                
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Type</label>
                <select name = "type" class="form-control">
  <option value="income">Income</option>
  <option value="expense">Expense</option>
  
</select>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl">Add</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
  @endsection