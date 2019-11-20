<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::orderBy('created_at','DESC')->paginate(10);
        return view('customers.index', compact('customers'));

    }


    public function create()
    {
        return view('customers.add');
    }



    public function save(Request $request)
    {
        //VALIDASI DATA
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|max:13', //maximum karakter 13 digit
            'address' => 'required|string',
            //unique berarti email ditable customers tidak boleh sama
            'email' => 'required|email|string|unique:customers,email' // format yag diterima harus email
        ]);

        try {
                $customers = Customer::create([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'email' => $request->email
                ]);
                return redirect('/customer')->with(['success' => 'Data telah disimpan']);
            } catch (\Exception $e) {
                return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }


    public function edit($id)
    {
        $customers = Customer::find($id);
        return view('customers.edit', compact('customers'));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'phone' => 'required|max:13',
            'address' => 'required|string',
            'email' => 'required|email|string|exists:customers,email'
        ]);

        try {
            $customer = Customer::find($id);
            $customer->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            return redirect('/customer')->with(['success' => 'Data telah diperbaharui']);
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->back()->with(['success' => '<strong>' . $customer->name . '</strong> Telah dihapus']);
    }


}
