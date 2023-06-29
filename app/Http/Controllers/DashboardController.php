<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function home(){
        return view('dashboard.home');
    }

    public function profile(){
        $user  = Auth::user();
        return view('dashboard.profile', compact('user'));
    }

    public function loan(){
        $user_id = auth()->id();
        $user = User::find($user_id);
        $loans = $user->loans;

        return view('dashboard.loan', compact('loans'));
    }

    public function update_profile(Request $request){
        $user = Auth::user();
        $user->update($request->only(['username', 'email']));
        return redirect()->route('dashboard.profile')->with('success', 'Update successful.');
    }

    public function apply_loan(Request $request){
        $loan = new Loan();
        $loan->phone = $request->phone;
        $loan->amount = $request->amount;
        $loan->purpose = $request->purpose;
        $loan->user_id = auth()->id();
        $loan->save();
        return redirect()->route('dashboard.loan')->with('success', 'Loan applied successfully');
    }

    public function delete_loan(Loan $loan){
        $loan->delete();
        return redirect()->route('dashboard.loan')->with('success', "Deleted successfully.");
    }
    public function edit_loan(Request $request, Loan $loan){
        $loan->update($request->only('phone', 'amount', 'purpose'));
        return redirect()->route('dashboard.loan')->with('success', "Deleted successfully.");
    }

}
