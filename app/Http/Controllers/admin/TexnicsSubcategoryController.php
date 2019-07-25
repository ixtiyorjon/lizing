<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TexnicsSubcategory;
use App\Translation;
use Illuminate\Support\Facades\View;


class TexnicsSubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'title_en' => "required|unique:texnics_subcategories,title",
            'title_ru'=>'required',
            'title_uz'=>'required',
            'title_uzk'=>'required',
            'texnics_categories_id'=>'required',
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

        $texnics = new TexnicsSubcategory;
        $texnics->title=$request->title_en;
        $texnics->slug=str_slug($request->title_en);
        $texnics->texnics_categories_id=$request->texnics_categories_id;
        $texnics->image=$path ? "texnics/".$month."/".$filenameToStore : "";
        $texnics->save();

        $arr = ['ru'=>$request->title_ru,'uz'=>$request->title_uz,'uzk'=>$request->title_uzk];

        foreach($arr as $key => $val){
            $translate = new Translation;
            $translate->table_name = 'texnics_subcategories' ;
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
         $model = TexnicsSubcategory::whereTranslation('id',$id)->first();

        // return view('admin.texnics.show',[
        //     'model' => $model,
        // ]);
        $html = View::make('admin.subcategory.show',['model'=>$model])->render();

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
        $model = TexnicsSubcategory::whereTranslation('id',$id)->first();

        // return view('admin.texnics.edit',[
        //     'model' => $model,
        // ]);
        $html = View::make('admin.subcategory.edit',['model'=>$model])->render();
        
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
        $model = TexnicsSubcategory::find($id);

        $this->validate($request,[
            'title_en'=>'required|unique:texnics_subcategories,title',
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
            $translate = Translation::where(['table_name'=>'texnics_subcategories','foreign_key'=>$id,'locale'=>$key]);
            $translate->update([
                // 'locale' => $key,
                'value' => $val
            ]);
        }
        return redirect()->route('texnics-category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TexnicsSubcategory::where('id',$id)->delete();

        Translation::where(['table_name'=>'texnics_subcategories','foreign_key'=>$id])->delete();
        
        return back();
    }
}
