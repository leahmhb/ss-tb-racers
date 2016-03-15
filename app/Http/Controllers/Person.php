<?php  
namespace App\Http\Controllers;
use App\Models as Models;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class Person extends Base{

  public function person_list(){
    $person = Models\Person::get()->toArray();
    return view('pages.person_list', ['person' => $person]);
}//end person_list

public function add_person(){   
  return view('forms.add_person', ['validate' => false]);
    }//end add_person

    public function add_person_validate(){ 
      $data = $_POST;
      //echo "<pre>" . print_r($data, true) . "</pre>";      
      //validation here
      $person = Models\Person::firstOrCreate($data);
      return view('forms.add_person', ['validate' => true]);
  }//end add_person_validate

  public function add_person_quick_validate(){ 
    $data = $_POST;
      //validation here
    return "Person Quick";
    exit;
    //$person = Models\Person::firstOrCreate($data);     
  }//end add_person_validate



  }//end class