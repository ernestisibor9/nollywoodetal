<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Movie;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Add Company
    public function AddCompany(){
        $movies = Movie::orderBy('movie_title', 'ASC')->get();
        return view("backend.company.add_company", compact("movies"));
    }
    // Store Company
    public function StoreCompany(Request $request){
        $request->validate([
            'movie_id' => 'required',
            'company_name' => 'required',
            'company_logo' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'website' => 'required',
        ]);
          // Without Imagick
          $image = $request->file('company_logo');
          $filename = date('YmdHi') . $image->getClientOriginalName();
          $image->move(public_path('upload/company'), $filename);
 
 
         $save_url = 'upload/company/'.$filename;
 
            Company::insert([
             'movie_id' => $request->movie_id,
             'company_name' => $request->company_name,
             'company_logo' => $save_url,
             'address' => $request->address,
             'email' => $request->email,
             'phone' => $request->phone,
             'website' => $request->website,
             'created_at' => Carbon::now(),
         ]);

         $notification = array(
             'message'=> 'Company Added Successfully',
             'alert-type'=>'success'
         );
         return redirect()->route('all.company')->with($notification);
    }
    // AllCompany
    public function AllCompany(){
        $companyData = Company::latest()->get();
        return view('backend.company.all_company', compact('companyData'));
    }
    // EditCompany
    public function EditCompany($id){
        $editCompany = Company::findOrFail($id);
        $movieData = Movie::orderBy('movie_title', 'ASC')->get();
        return view('backend.company.edit_company', compact('editCompany', 'movieData'));
    }
    // Update Company
    public function UpdateCompany(Request $request){
        $pid = $request->id;
        $oldImg = $request->old_img;

        if($request->file('company_logo')){
            // Without Imagick
          $image = $request->file('company_logo');
          $filename = date('YmdHi') . $image->getClientOriginalName();
          $image->move(public_path('upload/company'), $filename);

            $save_url = 'upload/company/'.$filename;

            Company::findOrFail($pid)->update([
                'movie_id' => $request->movie_id,
                'company_name' => $request->company_name,
                'company_logo' => $save_url,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'website' => $request->website,
                'updated_at' => Carbon::now(),
            ]);
            unlink($oldImg);
        }
        else{
            Company::findOrFail($pid)->update([
                'movie_id' => $request->movie_id,
                'company_name' => $request->company_name,
                'address' => $request->address,
                'email' => $request->email,
                'phone' => $request->phone,
                'website' => $request->website,
                'updated_at' => Carbon::now(),
            ]);
        }
            $notification = array(
                'message'=> 'Company Updated Successfully',
                'alert-type'=>'success'
            );
            return redirect()->route('all.company')->with($notification);
    }
    // Delete Company
    public function DeleteCompany($id){
        $deleteId = Company::findOrFail($id);
        unlink($deleteId->company_logo);

        Company::findOrFail($id)->delete();

        $notification = array(
                'message'=> 'Company Deleted Successfully',
                'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
}
