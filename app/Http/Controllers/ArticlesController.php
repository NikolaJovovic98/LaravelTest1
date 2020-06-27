<?php

namespace App\Http\Controllers;

use App\Article;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    //Pokazuje samo jedan resurs
   public function  show(Article $article) {



      return view('articles.show',['article'=>$article]);

   }



   //Renderuje listu resursa
   public function index(){

       $articles = Article::latest()->get();

       return view('articles.index',['articles'=>$articles]);

   }



   //Prikazuje nacin kako da se kreira novi resurs
   public function create(){

       return view('articles.create');

   }



   //Za skladistenje novog resursa
    public function store(){

       Article::create($this->validateArticle());


       return redirect('/articles');


    }




    //Prikazuje nacin kako da se edituje resurs
    public function edit(Article $article){



        return view('articles.edit',['article'=>$article]);

    }




    //Ide uz ove gore tj apdejute sve promjene
    public function update(Article $article){

       $article->update($this->validateArticle());



        /*
        $article = new Article();

        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');

        $article->save();
        */

        return redirect('/articles/' . $article->id);
    }




    //brisanje resursa
    public function destroy(){


    }

    protected function validateArticle()
    {
        return request()->validate([

            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'


        ]);
    }

}
