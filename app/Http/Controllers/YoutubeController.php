<?php

namespace App\Http\Controllers;

use App\YoutubeId;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function aa(){
        return view('/vendor/voyager/gravy');
    }
    public function run(Request $request)
    {

        $inputurl = $request->input('url');
//        $url ='https://www.youtube.com/feed/trending';
        $client = new Client([
            'timeout' => 60,
        ]);

        $response = $client->request('GET', $inputurl)->getBody()->getContents();
        $crawler = new Crawler();
        $crawler->addHtmlContent($response);

        $data=[];
        $crawler->filterXPath('//div/div/h3/a')->each(function (Crawler $node,$i)use (&$data){
            $item=[
                '0'=>$node->attr('title'),
                '1'=>$node->attr('href')
            ];
            $data[]=$item;
        });

        for($i=0;$i<count($data);$i++){ //將抓取到的值分割,並取出youtube id值
            $spath=substr($data[$i][1],-11);
            $data[$i][1]=$spath;
        };

        for($y=0;$y<count($data);$y++){ //資料存進資料庫
            $youtubeId = new YoutubeId;
            $youtubeId ->youtube_id=$data[$y][1];
            $youtubeId ->youtube_title=$data[$y][0];
            $youtubeId -> save();

        }
        return redirect('/vendor/voyager/gravy')->with('message','成功抓取'.$inputurl);

    }
    public function index(){
        $youtubes = YoutubeId::all()->unique('youtube_id');
        return view('posts.index',compact('youtubes'));
    }
    public function show($id){
        $youtubevideos = YoutubeId::find($id);
        return view('posts.show',compact('youtubevideos'));

    }
}
