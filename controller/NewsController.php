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
    public function latest(Request $request){
        $connection = DB::table('news');

        $news = $connection->orderBy('id', 'desc')->select(['id'])->get();

        $this->addData('news',$news);
        $this->addMessage('success','All your News.');

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function id(Request $request, int $id){
        $news = DB::table('news')->where('id','=',$id);

        $count = $news->count();

        if($count === 1){
            $this->addData('news',$news->first());
        }
        else{
            $this->addMessage('success','News doesnt exists.');
        }

        return $this->getResponse();
    }

    /**
     * @param  Request  $request
     * @return Response
     */
    public function key(Request $request, string $key){
        $news = DB::table('news')->where('key','=',$key);

        $count = $news->count();

        if($count === 1){
            $this->addData('news',$news->first());
        }
        else{
            $this->addMessage('success','News doesnt exists.');
        }

        return $this->getResponse();
    }
}
