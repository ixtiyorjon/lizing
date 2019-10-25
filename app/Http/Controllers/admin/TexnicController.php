<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Texnic;
use App\Translation;
use App\TagList;
use Illuminate\Support\Facades\View;

class TexnicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = Texnic::get();

        return view('admin.texnics.index',[
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
            'name_en'=>'required|unique:texnics,name',
            'name_ru'=>'required',
            'name_uz'=>'required',
            'name_uzk'=>'required',
            // 'slug'=>'required',
            'image'=>'required',
            'image'=>'max:1024',
        ]);

        $allowedfileExtension=['JPEG','jpeg','JPG','jpg','png'];
        $month=date('F').date('Y');

        if($request->hasFile('image')){

          $files = $request->file('image');
          $item = [];
// dd($request->file('image'));
          $i=0;
          foreach($files as $file){

            $filenameWithExt = $request['image'][$i]->getClientOriginalName();     
      
            // Get just the filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get extension
            $extension = $request['image'][$i]->getClientOriginalExtension();

            // Create new filename
            $filenameToStore = $filename.'_'.time().'.'.$extension;          

              $item[]=$request['image'][$i]->storeAs('public/photos/'.$month,$filenameToStore);
              $i++;

          }

        }


        $texnics = new Texnic;
        $texnics->name=$request->name_en;
        $texnics->narxi=$request->narxi;
        $texnics->avans_summ=$request->avans_summ;
        $texnics->avans=$request->avans;
        $texnics->yillik_foiz=$request->yillik_foiz;
        $texnics->muddat=$request->muddat;
        $texnics->dostavka=$request->dostavka;
        $texnics->texnics_category=$request->category_id;
        $texnics->texnics_subcategory=$request->subcategory_id;
        $texnics->slug=str_slug($request->name_en);
        $texnics->image=$item ? json_encode($item) : "";
        // $texnics->image=$path ? json_encode($path) : "";
        $texnics->save();

        $arr = ['ru'=>$request->name_ru,'uz'=>$request->name_uz,'uzk'=>$request->name_uzk];

        foreach($arr as $key => $val){
            $translate = new Translation;
            $translate->table_name = 'texnics' ;
            $translate->column_name = 'name' ;
            $translate->foreign_key = $texnics->id ;
            $translate->locale = $key ;
            $translate->value = $val ;
            $translate->save();
        }

        return back()->with('success',"Ваш запрос был успешно отправлен");
    }


    public function show($id)
    {
        $model = Texnic::whereTranslation('id',$id)->first();

        // return view('admin.texnics.show',[
        //     'model' => $model,
        // ]);
        $html = View::make('admin.texnics.show',['model'=>$model])->render();

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
        $model = Texnic::whereTranslation('id',$id)->first();

        $html = View::make('admin.texnics.edit',['model'=>$model])->render();
        
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
        $model = Texnic::find($id);
// dd($request->file('image'));
        $this->validate($request,[
            'name_en'=>'required|unique:texnics,name,' . $id,
            'name_ru'=>'required',
            'name_uz'=>'required',
            'name_uzk'=>'required',
            'narxi'=>'required',
            'avans_summ'=>'required',
            'avans'=>'required',
            'yillik_foiz'=>'required',
            'muddat'=>'required',
            'dostavka'=>'required',
            // 'slug'=>'required',
        ]);
        
        $month=date('F').date('Y');

        $path = [];

      if($request->hasFile('image')){

        $images = $request->file('image');

        foreach ($images as $image) {

          $filenameWithExt = $image->getClientOriginalName();     
      
          // Get just the filename 
          $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

          // Get extension
          $extension = $image->getClientOriginalExtension();

          // Create new filename
          $filenameToStore = $filename.'_'.time().'.'.$extension;          

          $path[]=$image->storeAs('public/photos/'.$month,$filenameToStore);

        }

      }
      else{
          $path="";
      }

        $model->update([
            'name' => $request->name_en,
            'narxi' => $request->narxi,
            'avans_summ' => $request->avans_summ,
            'avans' => $request->avans,
            'yillik_foiz' => $request->yillik_foiz,
            'muddat' => $request->muddat,
            'dostavka' => $request->dostavka,
            'slug' => str_slug($request->name_en),
            'image' => $path ? json_encode($path) : $request->hidden_image
        ]);

        $arr = ['ru'=>$request->name_ru,'uz'=>$request->name_uz,'uzk'=>$request->name_uzk];

        foreach($arr as $key => $val){
            $translate = Translation::where(['table_name'=>'texnics','foreign_key'=>$id,'locale'=>$key]);
            $translate->update([
                // 'locale' => $key,
                'value' => $val
            ]);
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Texnic::where('id',$id)->delete();

        Translation::where(['table_name'=>'texnics','foreign_key'=>$id])->delete();

        $taglist = TagList::where('texnics_id',$id)->get();
        TagList::where('texnics_id',$id)->delete();

        foreach ($taglist as $value) {
            Translation::where(['table_name'=>'tagslist','foreign_key'=>$value->id])->delete();
        }
        
        return back();
    }

    public function params($id){
      $model = TagList::where('texnics_id',$id)->get();

      $html = View::make('admin.texnics.params',['id' => $id,'model' =>$model])->render();
      
      return $html;
    }

    public function texnicsList(){
      $model = Texnic::where('texnics_category',$_POST['category_id'])->get();    
        
        $html = View::make('admin.texnics.collection',['model'=>$model])->render();
        
        return $html;
    }
}
