<?php

namespace App\Http\Controllers;

use \http\Env\Response;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * @param  Request  $request
     * @return Response
     */
    public function select(Request $request){
        $connection = DB::table('news');

        $news = $connection->get();

        $this->addData('news',$news);
        $this->addMessage('success','All your News.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function view(Request $request, int $id){
        $page = DB::table('news')
            ->where('id','=',$id);

        $count = $page->count();

        if($count === 1){
            $this->addData('page',$page->first());
        }
        else{
            $this->addMessage('success','News doesnt exists.');
        }

        return $this->getResponse();
    }
}
