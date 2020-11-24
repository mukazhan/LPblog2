<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function about_page($id = null)
    {
    	$title = array('title'=>$id);
    	return view('about', $title);
    }

    public function contact_page()
    {
    	   $data = array(
            
            'projectname'=>'Laravel project',
            'title' => 'Contacts page',
            'data' => [ /*
                    'one'=>'List1',
                    'two'=>'List2',
                    'three'=>'List3',
            'four'=>'List4',
            'five'=>'List5',
            'six'=>'list6'
             */],
            'dataList'=>['List 11','List 22', 'List 33','List 44', 'List 55'],
            'bvar' => true,
            'val'=>1,

            'script'=> "<script>alert('Hello')</script>"
        );






    	return view('contacts', $data);
    }

	public function form_page()
    {
    	$title = array('title'=>'Form page');
    	return view('form', $title);
    }


     public function show(Request $request)
    {


        if ($request->isMethod('POST'))
        {
            $fname = $request->fname;
            $lname = $request->input('lname');
            echo $fname;
            echo "<hr>";
            print_r($_POST);

           // redirect('/form');

        }

    }

}
