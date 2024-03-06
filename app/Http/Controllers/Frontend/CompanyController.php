<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // AllCompanies
    public function AllCompanies(){
        $companies = Company::latest()->paginate(3);
        return view("frontpage.company.all_company", compact("companies"));
    }
    // SearchCompany
    public function SearchCompany(Request $request){
        $companySearch = $request->company;

        $companies = Company::where('company_name', 'like', '%' .$companySearch. '%')->paginate(3);
        return view('frontpage.company.company_search', compact('companies'));
    }
    // Company Details
    public function CompanyDetails($id){
        $company = Company::findOrFail($id);
        return view("frontpage.company.company_details", compact("company"));
    }
}
