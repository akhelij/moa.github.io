<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Critere;
class CritereController extends Controller
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

    public function getCriteres($id)
    {

      /*$cat = Category::find(1);
      $cat=>criteres();*/
      $category = Category::find($id);

      $criteres = $category->criteres;

      /*$html = "";
      foreach($criteres as $critere)
      {
        $html .= "
             <div class=' critere critere_".$critere['id']."'>
      <label >".$critere['title']." : &nbsp; </label>

         <span class='fa fa-circle-o  circle-vote' note='0'></span>
         <span class='fa fa-circle-o  circle-vote' note='1'></span>
         <span class='fa fa-circle-o  circle-vote' note='2'></span>
         <span class='fa fa-circle-o  circle-vote' note='3'></span>
         <span class='fa fa-circle-o  circle-vote' note='4'></span>
         <span class='fa fa-circle-o  circle-vote' note='5'></span>
         <span class='fa fa-circle-o  circle-vote' note='6'></span>
         <span class='fa fa-circle-o  circle-vote' note='7'></span>
         <span class='fa fa-circle-o  circle-vote' note='8'></span>
         <span class='fa fa-circle-o  circle-vote' note='9'></span>
         <span class='fa fa-circle-o  circle-vote' note='10'></span>

         <label class='note_".$critere['id']." pull-right' >note : <span class='note' value='".$critere['id']."'>-</span> / 10 </label>

           </div>

          
     ";
      }

      echo $html;*/
      return $criteres;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
