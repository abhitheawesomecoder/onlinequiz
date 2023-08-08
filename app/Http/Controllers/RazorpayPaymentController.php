<?php
namespace App\Http\Controllers;

use App\topic_user;
use Illuminate\Http\Request;
use Razorpay\Api\Api;
use Session;
use Exception;
  
class RazorpayPaymentController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {        
        return view('payment');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
{
    $input = $request->all();

    $api = new Api("rzp_test_etIge0szX3cuG1", "qzHpoRTIcgiKIBqLbZYbTYx4");

    $payment = $api->payment->fetch($input['razorpay_payment_id']);

    if (count($input) && !empty($input['razorpay_payment_id'])) {
        try {
            $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));

            // Check the status of the payment in the response
            if ($response['status'] === 'captured') {
                // Payment was successful
                // Save the data into the database
                // Perform your database operations here

                Session::put('success', 'Payment successful');
                return redirect()->route('instruction');
            } else {
                // Payment failed
                Session::put('error', 'Payment failed');
                return redirect()->back();
            }
        } catch (Exception $e) {
            Session::put('error', $e->getMessage());
            return redirect()->back();
        }
    }
}
}