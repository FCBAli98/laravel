<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Rules\PhoneNumber;
use App\Http\Requests\SaveCompanyRequest;
class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderByDesc('created_at')->paginate(20);
        /*dd($companies);*/
        return view('companies.index', [
            'companies' => $companies
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company=new Company();
        return view('companies.create', [
            'company'=>$company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCompanyRequest $request)
    {
        /*dd($request->all());*/
        /*$data = $request->validate([
            'name' => 'bail|required',
            'address' => 'required',
            'phone' => ['required', 'numeric', new PhoneNumber]
        ]);*/
        // dd($data);
        
        
        
            Company::create($request->validated());

           /* dd($company);*/     
        /*$compony = new Company;
        $compony->name=$data['name'];
        $compony->address=$data['address'];
        $compony->phone=$data['phone'];
        $compony->save();
*/ 
        return redirect()->route('companies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response    
     */
    public function show(Company $company)
    {
        /*$company=Company::findorFail($company);*/
        return view('companies.show', [
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        /*$company=Company::find($company);*/
        return view('companies.edit', [
            'company' => $company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
       
        
            $company->update($request->validated());
            return redirect()->route('companies.index');
            /*Company::create($data);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        
        $company->delete();

        return redirect()->route('companies.index');

        /*return redirect()->route('companies.destroy');*/
    }

    public function ValidateData(){

        return request()->validate([
            'name' => 'bail|required',
            'address' => 'required',
            'phone' => ['required', 'numeric', new PhoneNumber]
        ]);

    }
}
