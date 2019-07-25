<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TexnicsCategory;
use App\Translation;
use App\TexnicsSubcategory;
use Illuminate\Support\Facades\View;

class TexnicsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = TexnicsCategory::get();

        return view('admin.category.index',[
            'model' => $model
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title_en'=>'required|unique:texnics_categories,title',
            'title_ru'=>'required',
            'title_uz'=>'required',
            'title_uzk'=>'required',
            // 'slug'=>'required',
            'image'=>'required',
            'image'=>'max:1024',
        ]);
        
      $month=date('F').date('Y');

    if($request->hasFile('image')){
      
      $filenameWithExt = $request->file('image')->getClientOriginalName();     
      
      // Get just the filename 
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;          

        $path=$request->file('image')->storeAs('public/texnics/'.$month,$filenameToStore);
      }

      else{
        $path="";
      }

        $texnics = new TexnicsCategory;
        $texnics->title=$request->title_en;
        $texnics->slug=str_slug($request->title_en);
        $texnics->image=$path ? "texnics/".$month."/".$filenameToStore : "";
        $texnics->save();

        $arr = ['ru'=>$request->title_ru,'uz'=>$request->title_uz,'uzk'=>$request->title_uzk];

        foreach($arr as $key => $val){
            $translate = new Translation;
            $translate->table_name = 'texnics_categories' ;
            $translate->column_name = 'title' ;
            $translate->foreign_key = $texnics->id ;
            $translate->locale = $key ;
            $translate->value = $val ;
            $translate->save();
        }

        return back()->with('success',"Ваш запрос был успешно отправлен");
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = TexnicsCategory::whereTranslation('id',$id)->first();

        // return view('admin.texnics.show',[
        //     'model' => $model,
        // ]);
        $html = View::make('admin.category.show',['model'=>$model])->render();

        return $html;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = TexnicsCategory::whereTranslation('id',$id)->first();

        // return view('admin.texnics.edit',[
        //     'model' => $model,
        // ]);
        $html = View::make('admin.category.edit',['model'=>$model])->render();
        
        return $html;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = TexnicsCategory::find($id);

 // dd($request->image);         
        $this->validate($request,[
            'title_en'=>'required|unique:texnics_categories,title',
            'title_ru'=>'required',
            'title_uz'=>'required',
            'title_uzk'=>'required',
            // 'slug'=>'required',
        ]);
        
          $month=date('F').date('Y');

        if($request->hasFile('image')){
      
          $filenameWithExt = $request->file('image')->getClientOriginalName();     
          
          // Get just the filename 
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get extension
          $extension = $request->file('image')->getClientOriginalExtension();

          // Create new filename
          $filenameToStore = $filename.'_'.time().'.'.$extension;          

            $path=$request->file('image')->storeAs('public/texnics/'.$month,$filenameToStore);
          }

        else{
            $path="";
        }

        $model->title=$request->title_en;
        $model->slug=str_slug($request->title_en);
        $model->image=$path ? "texnics/".$month."/".$filenameToStore : $request->hidden_image;
        $model->save();

        $arr = ['ru'=>$request->title_ru,'uz'=>$request->title_uz,'uzk'=>$request->title_uzk];

        foreach($arr as $key => $val){
            $translate = Translation::where(['table_name'=>'texnics_categories','foreign_key'=>$id,'locale'=>$key]);
            $translate->update([
                // 'locale' => $key,
                'value' => $val
            ]);
        }
        // return redirect()->route('texnics-category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TexnicsCategory::where('id',$id)->delete();

        $sub_cat = TexnicsSubcategory::where('texnics_categories_id',$id)->get();
        TexnicsSubcategory::where('texnics_categories_id',$id)->delete();

        Translation::where(['table_name'=>'texnics_categories','foreign_key'=>$id])->delete();
        foreach ($sub_cat as $value) {
            Translation::where(['table_name'=>'texnics_subcategories','foreign_key'=>$value->id])->delete();
        }
        
        return back();
    }
}
