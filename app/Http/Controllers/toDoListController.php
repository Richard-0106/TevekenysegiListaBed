<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listItem;

class toDoListController extends Controller
{
    public function index(){
     return view('welcome',['listItems' =>ListItem::where('befejezett',0)->get()]);
 
    }
   public function saveItem(Request $request){
      // log::info(json_encode($request->all()));
      $newListItem = new ListItem;
      $newListItem->leiras=$request->listItem; //itt a listItem az inputnál meg kell hogy egyezzen
      $newListItem->befejezett =0;
      $newListItem->save(); 
      //return view('welcome',['listItems' =>ListItem::all()]);
      return redirect('/');
   }
   public function rendbenVan($id){
       $listItem = ListItem::find($id);
       $listItem->befejezett=1;
       $listItem->save();
       //return view('welcome',['listItems' =>ListItem::all()]);
    return redirect('/');

   }
}
