<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\posts;
use App\Models\works;
use App\Models\gallery;
use App\Models\emailsubscription;
use Illuminate\Http\Request;

class articles extends Controller
{
    //Enter Article Details in the table
    public function articles(Request $request){
        $validate=validator::make($request->all(),[
            'title'=>['required','string'],
            'body'=>['required','string'],
            'image'=>['required'],
           
        ]);
       if ($validate->fails()){
        return Redirect::back()->withErrors($validate);
       }
       else{
       $article=new posts;
       $article->title=$request->input('title'); 
       $article->body=strip_tags($request->input('body'));  
       $article->image=$request->image->storeAs('images',$request->image->getClientOriginalName()); 
       $article->save();  
       
       return  "<script>window.location='http://localhost/Demo/articles/public/dashboard'; alert('Post uploaded successfully')</script>";
       
         
         
     }
    }
    
    
    //General articles View
    public function general(){
$viewarticle=posts::all();
return view('articlesview')->with("viewarticle",$viewarticle);

    }



 //View Contents
     public function contents($id){
        $contentsview=posts::find($id);
        return view('contentsview')->with("contentsview",$contentsview);
        
            }










//Works articles View
    public function works(){
        $viewworks=works::all();
        return view('viewworks')->with("viewworks",$viewworks);
        
            }
        


            
 //View Works
     public function worksview($id){
        $worksview=works::find($id);
        return view('worksview')->with("worksview",$worksview);
        
            }

          
            


    //Enter works and projets Details in the table
    public function projects(Request $request){
        $validate=validator::make($request->all(),[
            'title'=>['required','string'],
            'body'=>['required','string'],
            'image'=>['required'],
           
        ]);
       if ($validate->fails()){
        return Redirect::back()->withErrors($validate);
       }
       else{
       $works=new works;
       $works->title=$request->input('title'); 
       $works->body=strip_tags($request->input('body'));  
       $works->image=$request->image->storeAs('images',$request->image->getClientOriginalName()); 
       $works->save();  
       
       return  "<script>window.location='http://localhost/Demo/articles/public/dashboard'; alert('Post uploaded successfully')</script>";
       
         
         
     }
    }




    //Save Gallery 
    public function gallery(Request $request){
        $validate=validator::make($request->all(),[
            'photo1'=>['required'],
            'photo2'=>['required'],
            'photo3'=>['required'],
            'photo4'=>['required'],
           
        ]);
       if ($validate->fails()){
        return Redirect::back()->withErrors($validate);
       }
       else{
       $photos=new gallery;
       $photos->photo1=$request->photo1->storeAs('images',$request->photo1->getClientOriginalName());
       $photos->photo2=$request->photo2->storeAs('images',$request->photo2->getClientOriginalName());
       $photos->photo3=$request->photo3->storeAs('images',$request->photo3->getClientOriginalName()); 
       $photos->photo4=$request->photo4->storeAs('images',$request->photo4->getClientOriginalName());
       $photos->save();  
       
       return  "<script>window.location='http://localhost/Demo/articles/public/dashboard'; alert('Gallery updated successfully')</script>";
       
         
         
     }
    }
    
    





    //View Gallery by Client From the main website page of view gallery
    public function viewgallery(){
        $viewgallery=gallery::all();
        return view('viewgallery')->with("viewgallery",$viewgallery);
        
            }





            
//Check for email subscription
public function emailsub(){
    $emailsub=emailsubscription::all();
    return view('emailsub')->with("emailsub",$emailsub);
   
  
} 

}
