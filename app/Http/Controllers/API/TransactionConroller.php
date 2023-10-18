<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TransactionConroller extends Controller
{

   public function fetch(Request $request) {

        $transaction = Transaction::all();

        return ResponseFormatter::success($transaction, 'Transaction found');

    }

    public function fetch_by_id($id) {

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return ResponseFormatter::error('Employee not found', 404);
        }

        return ResponseFormatter::success($transaction, 'Transaction Found');

    }

    public function create(Request $request) {

         $request->validate([
            'transaction_id' => 'required|string',
            'customer_name' => 'required|string',
            'customer_code' => 'required|string',
            'transaction_amount' => 'required|numeric',
            'transaction_discount' => 'required|numeric',
            'transaction_additional_field' => 'string|nullable',
            'transaction_payment_type' => 'required|string',
            'transaction_state' => 'required|string',
            'transaction_code' => 'required|string',
            'transaction_order' => 'required|integer',
            'location_id' => 'required|string',
            'organization_id' => 'required|integer',
            'transaction_payment_type_name' => 'string|nullable',
            'transaction_cash_amount' => 'numeric|nullable',
            'transaction_cash_change' => 'numeric|nullable',
            'connote' => 'required|array',
            'customer_attribute' => 'required|array',
            'origin_data' => 'required|array',
            'destination_data' => 'required|array',
            'koli_data' => 'required|array',
            'custom_field' => 'required|array',
            'currentLocation' => 'required|array',
        ]);

        $transaction = Transaction::create($request->all());

        return ResponseFormatter::success($transaction, 'Transaction created');

    }

    public function update(Request $request, $id) {


        $transaction = Transaction::find($id);

        if (!$transaction) {
            return ResponseFormatter::error('Transaction not found', 404);
        }

         $request->validate([
            'transaction_id' => 'required|string',
            'customer_name' => 'required|string',
            'customer_code' => 'required|string',
            'transaction_amount' => 'required|numeric',
            'transaction_discount' => 'required|numeric',
            'transaction_additional_field' => 'string|nullable',
            'transaction_payment_type' => 'required|string',
            'transaction_state' => 'required|string',
            'transaction_code' => 'required|string',
            'transaction_order' => 'required|integer',
            'location_id' => 'required|string',
            'organization_id' => 'required|integer',
            'transaction_payment_type_name' => 'string|nullable',
            'transaction_cash_amount' => 'numeric|nullable',
            'transaction_cash_change' => 'numeric|nullable',
            'connote' => 'required|array',
            'customer_attribute' => 'required|array',
            'origin_data' => 'required|array',
            'destination_data' => 'required|array',
            'koli_data' => 'required|array',
            'custom_field' => 'required|array',
            'currentLocation' => 'required|array',
        ]);

        $transaction->transaction_id = $request->input('transaction_id');
        $transaction->customer_name = $request->input('customer_name');
        $transaction->customer_code = $request->input('customer_code');
        $transaction->transaction_amount = $request->input('transaction_amount');
        $transaction->transaction_discount = $request->input('transaction_discount');
        $transaction->transaction_additional_field = $request->input('transaction_additional_field');
        $transaction->transaction_payment_type = $request->input('transaction_payment_type');
        $transaction->transaction_state = $request->input('transaction_state');
        $transaction->transaction_code = $request->input('transaction_code');
        $transaction->transaction_order = $request->input('transaction_order');
        $transaction->location_id = $request->input('location_id');
        $transaction->organization_id = $request->input('organization_id');
        $transaction->transaction_payment_type_name = $request->input('transaction_payment_type_name');
        $transaction->transaction_cash_amount = $request->input('transaction_cash_amount');
        $transaction->transaction_cash_change = $request->input('transaction_cash_change');
        $transaction->connote = $request->input('connote');
        $transaction->customer_attribute = $request->input('customer_attribute');
        $transaction->origin_data = $request->input('origin_data');
        $transaction->destination_data = $request->input('destination_data');
        $transaction->koli_data = $request->input('koli_data');
        $transaction->custom_field = $request->input('custom_field');
        $transaction->currentLocation = $request->input('currentLocation');

        $transaction->save();

        return ResponseFormatter::success($transaction, 'Transaction updated');

    }

    public function delete($id) {

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return ResponseFormatter::error('transaction not found', 404);
        }

        $transaction->delete();

        return ResponseFormatter::success($transaction, 'transaction deleted');

     }

    public function update_status($id) {

        $transaction = Transaction::find($id);

        if (!$transaction) {
            return ResponseFormatter::error('transaction not found', 404);
        }

        if ($transaction->transaction_state === 'PAID') {
        $transaction->transaction_state = 'SUCCESS';

        $transaction->save();

        return ResponseFormatter::success($transaction, 'status transaction updated');
    }
    }
}
