<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Jisar Foundation </title>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
   <body>
      <div id="app">
         <main class="py-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 offset-3 col-md-offset-6">
                     @if($message = Session::get('error'))
                     <div class="alert alert-danger alert-dismissible fade in" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Error!</strong> {{ $message }}
                     </div>
                     @endif
                     @if($message = Session::get('success'))
                     <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        <strong>Success!</strong> {{ $message }}
                     </div>
                     @endif
                     <div class="card card-default">
                        <div class="card-header" style="background-color: #AA2672; color:white">
                        Jisar Foundation
                        </div>
                        <div class="card-body text-center">
                           <form action="/payment" method="POST" >
                              @csrf
                              <script src="https://checkout.razorpay.com/v1/checkout.js"
                                 data-key="rzp_test_etIge0szX3cuG1"
                                 data-amount="20001" 
                                 data-currency="INR"
                                 data-buttontext="Pay 200 INR"
                                 data-name="Jisar Foundation"
                                 data-description="Rozerpay"
                                 data-image="https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png"
                                 data-prefill.name="name"
                                 data-prefill.email="email"
                                 data-theme.color="#F37254">
                              </script>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </body>
</html>
<script>

$('body').on('click','#rzp-button1',function(e){
    e.preventDefault();
    var amount = $('.amount').val();
    var total_amount = amount * 100;
    var options = {
        // ... your existing options ...

        "handler": function (response){
            // Set the value of the hidden input field
            $('#razorpay_payment_id').val(response.razorpay_payment_id);

            // ... your existing AJAX code ...
        },
        // ... rest of your options ...
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
});$('body').on('click','#rzp-button1',function(e){
    e.preventDefault();
    var amount = $('.amount').val();
    var total_amount = amount * 100;
    var options = {
        // ... your existing options ...

        "handler": function (response){
            // Set the value of the hidden input field
            $('#razorpay_payment_id').val(response.razorpay_payment_id);

            // ... your existing AJAX code ...
        },
        // ... rest of your options ...
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
});
</script>