<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pendaftaran;
use App\HomeImage;
use App\Facilities;
use App\Extraculiculer;
use Validator;

class AdminController extends Controller
{
    public function dashboard() {
        $pendaftaran_total = Pendaftaran::count();

        return view('admin.dashboard', compact('pendaftaran_total'));
    }

    public function pendaftar() {
        $pendaftar = Pendaftaran::get();

        return view('admin.pendaftar', compact('pendaftar'));
    }

    public function pendaftar_details($id){
        
        $pendaftar = DB::table('pendaftarans')->where('id', $id)->get();

        return view('admin.pendaftar_details', compact('pendaftar'));
    }

    public function home(){

        $home_count = DB::table('home_images')->count();
        $home = DB::table('home_images')->get();

        return view('admin.home_change', compact('home', 'home_count'));
    }

    public function home_upload(Request $request){

        if($request->hasFile('image')){
        $file = $request->file('image');

        
            $fileName = time()."_".$file->getClientOriginalName();

            $target = "img/slider";
            $file->move($target, $fileName);

            DB::table('home_images')->insert([
                'name_of_image' => $fileName,
                'keterangan' => $request->keterangan,    
            ]);
            
            alert()->success('Completed', 'Your image successfully uploaded');
            return redirect()->back();
        }
        else
        {
            alert()->error('Failed', "only image are allowed");
            return redirect()->back();        
        }
    }

    public function home_delete($id) {

        DB::table("home_images")->where('id', $id)->delete($id);

        alert()->success('Complete', 'Image deleted successfully');
        return redirect()->back();
    }

    public function facilites(){
        $facilities_count = Facilities::count();

        $facilities = Facilities::get();

        return view('admin.facilities', compact('facilities_count', 'facilities'));
    }

    public function facilities_upload(Request $request){
        $validator = Validator::make($request->all(),[
            "title" => ["required", 'string', 'max:20'],
            "description" => ["required", 'string']
        ]);

        if($validator->fails()){
            toast($validator->messages()->all()[0], 'error');
            return redirect()->back();
        }

        
            $file = $request->file('image');
    
            
                $fileName = time()."_".$file->getClientOriginalName();
    
                $target = "img/facilities";
                $file->move($target, $fileName);
            
            // else
            // {
            //     alert()->error('Failed', "only image are allowed");
            //     return redirect()->back();        
            // }
                
            

            Facilities::create([
                "title" => $request->title,
                "description" => $request->description,
                "image" => $fileName
            ]);

            alert()->success('Complete', 'Successfully Upload');
            return redirect()->back();
    }

    public function facilities_delete($id){
        $facilities = Facilities::find($id);

        $facilities->delete($id);

        alert()->success('Complete', 'Facilities successfully deleted');
        return redirect()->back();
    }

    public function extraculiculer(){
        $extraculiculer = Extraculiculer::get();
        $extraculiculer_count = Extraculiculer::count();

        return view('admin.extraculiculer', compact('extraculiculer', 'extraculiculer_count'));
    }

    public function extraculiculer_upload(Request $request){
        $validator = Validator::make($request->all(), [
            "title" => ['required', 'string'],
        ]);

        if($validator->fails()) {
            toast($validator->messages()->all()[0], 'error');
            return redirect()->back();
        }

        $file = $request->file('image');
    
            
        $fileName = time()."_".$file->getClientOriginalName();
    
        $target = "img/extraculiculer";
        $file->move($target, $fileName);
        

        Extraculiculer::create([
            'title' => $request->title,
            'image' => $fileName,
        ]);

        alert()->success('Completed', 'Successfully upload extraculiculer');
        return redirect()->back();
    }
}
