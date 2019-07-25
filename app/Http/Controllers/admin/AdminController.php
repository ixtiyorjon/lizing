<?php


namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TagList;
use Validator;
use App\Translation;

class AdminController extends Controller
{


    public function addMore()
    {
        return view("admin.index");
    }


    public function addMorePost(Request $request)
    {
        $rules = [];
        
        if ($request->get('name')) {
            foreach($request->get('name') as $value1) {
                $model = TagList::create([
                	'name' => $value1['name_en'],
                    'value' => $value1['value'],
                	'texnics_id' => $value1['texnics_id']
                ]);

                $arr = ['ru'=>$value1['name_ru'],'uz'=>$value1['name_uz'],'uzk'=>$value1['name_uzk']];

                foreach($arr as $key => $val){
                    $translate = new Translation;
                    $translate->table_name = 'tagslist' ;
                    $translate->column_name = 'name' ;
                    $translate->foreign_key = $model->id ;
                    $translate->locale = $key ;
                    $translate->value = $val ;
                    $translate->save();
                }
            }
            return response()->json(['success'=>'done']);
        }


        return response()->json(['error'=>$validator->errors()->all()]);
    }


    public function delete($id){
  
        TagList::where('id',$id)->delete();

        return response()->json(['success'=>'done']);

    }

    public function edit($id){
        $model = TagList::find($id);

        $model->update([
            'name' => $_GET['name_en'],
            'value' => $_GET['value'],
        ]);

        $arr = ['ru'=>$_GET['name_ru'],'uz'=>$_GET['name_uz'],'uzk'=>$_GET['name_uzk']];

        foreach($arr as $key => $val){
            $translate = Translation::where(['table_name'=>'tagslist','foreign_key'=>$id,'locale'=>$key]);
            $translate->update([
                'value' => $val
            ]);
        }

        return response()->json(['success'=>'done']);
    }
}