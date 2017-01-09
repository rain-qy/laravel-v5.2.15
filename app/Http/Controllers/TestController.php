<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/12 0012
 * Time: 上午 11:02
 */

namespace App\Http\Controllers;


class TestController extends Controller
{
    public function test(){
//        $view_o = 'o';
//        $view_t = 't';
//        return view('test.test',compact('view_o','view_t'));
        $view_data['one'] = 'your name one';
        $view_data['two'] = 'your name two';
//        $view_data['arr'] = array('your','name','two');
        $view_data['arr'] = array();
        return view('test.test',$view_data);
    }

    public function contact(){
        return view('test.contact');
    }
}