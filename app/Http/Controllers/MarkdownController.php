<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarkdownController extends Controller
{
    public function md2html($page = null){
        $Parsedown = new \Parsedown();
        //echo $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>

        switch($page){
            case "test":
                $filter_page = "test";
                $page_title = "test page";
                break;
            case "index":
            case null:
            default:
                $filter_page = null;
                $page_title = "Home";
        }

        if($filter_page !== null){
            $md_name = "md_files/".$filter_page.".md";
        }else{
            $md_name = "md_files/index.md";
        }

        $md = @file_get_contents($md_name);

        if($md){
            $md_html = $Parsedown->text($md);
        }else{
            $md_html = "<h1>Error!</h1>page not found";
        }

        //echo $md_html;

        $data_arr['md_html'] = $md_html;
        $data_arr['page_title'] = $page_title;


        return view('markdown', $data_arr);
    }
}
