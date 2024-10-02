<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    // show data
    public function index()
    {
        $allPayments = Payment::all();

        return view('admin.payment.view', compact('allPayments'));
    }

    // edit data
public function editPayment($id){
    $allPayments = Payment::find($id);

    return view('admin.payment.edit',compact('allPayments'));

}

// update data
public function updatePayment(Request $request, $id){
    $allPayments = Payment::find($id);

    $allPayments->acount_title = $request->input('acount_title');
    $allPayments->acount_no = $request->input('acount_no');
    $allPayments->acount_iban = $request->input('acount_iban');
    $allPayments->service_provider = $request->input('service_provider');
    $allPayments->payment_method = $request->input('payment_method');
    $allPayments->save();

    return redirect('payments')->with('success', 'Payment updated successfully.');
}
}
