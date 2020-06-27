@extends('layoutPage')


@section('head')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">

@endsection


@section('content')

 <div id="wrapper">

     <div id="page" class="container">

       <h1 >New Article</h1>

         <form method="POST" action="/articles">
          @csrf

             <div class="field">

                 <label class="label" for="title">Title</label>

                 <div class="control">


                     <input

                         class="input @error('title') is-danger @enderror"
                         type="text"
                         name="title"
                         id="title"
                          value="{{old('title')}}"> <!--Nakon sto korisnik unese TITLE a ne unese ostala 2 nakon submitovanja
                           ce se pojaviti greska na 2 neunesena dok ce TITLE ostati isti koji smo unijeli-->

                     @error('title')
                            <p class="help is-danger">{{$errors->first('title')}}</p>
                     @enderror

                 </div>
             </div>


             <div class="field">

                 <label class="label" for="excerpt">Excerpt</label>

                 <div class="control">


                     <textarea
                         class="textarea @error('excerpt') is-danger @enderror"
                         name="excerpt"
                         id="excerpt"
                         value="{{old('excerpt')}}"></textarea>

                     @error('excerpt')
                     <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                     @enderror


                 </div>
             </div>

             <div class="field">

                 <label class="label" for="body">Body</label>

                 <div class="control">

                     <textarea

                         class="textarea @error('body') is-danger @enderror"
                         name="body"
                         id="body"
                         value="{{old('body')}}"></textarea>

                     @error('body')
                     <p class="help is-danger">{{$errors->first('body')}}</p>
                     @enderror
                 </div>
             </div>



             <div class="control">
                 <button class="button is-link">Submit</button>
             </div>

         </form>

     </div>
 </div>






@endsection
