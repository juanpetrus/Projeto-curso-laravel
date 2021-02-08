<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use CoffeeCode\Optimizer\Optimizer;

class WebController extends Controller
{
    public function home(){

    $head = $this->seo->render(
        env('APP_NAME'). ' - Home',
        "Descricao do sitge",
        url('/'),
        "https://www.upinside.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
    );
    return view('front.home', [
        'head' => $head
    ]);
    }

    public function curso(){
        $head = $this->seo->render(
            env('APP_NAME'). ' - Curso',
            "Descricao do sitge",
            route('curso'),
            "https://www.upinside.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
        );
        return view('front.curso',[
            'head' => $head
        ]);
    }

    public function blog(){
        $head = $this->seo->render(
            env('APP_NAME'). ' - Blog',
            "Descricao do sitge",
            route('blog'),
            "https://www.upinside.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
        );
        return view('front.blog', [
            'head' => $head
        ]);
    }

    public function artigo(){
        return view('front.artigo');
    }

    public function contato(){
        $head = $this->seo->render(
            env('APP_NAME'). ' - Contato',
            "Descricao do sitge",
            route('contato'),
            "https://www.upinside.com.br/uploads/images/2017/11/curso-de-html5-preparando-ambiente-de-trabalho-aula-02-1511276983.jpg"
        );
        return view('front.contato',[
            'head' => $head
        ]);
    }
}
