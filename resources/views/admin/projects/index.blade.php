@extends('layouts.admin');
@section('content')
    <div class="container">
        <div class="row d-flex flex-wrap ">
            <h1 class="col-12 my-5 text-info">
                Elenco dei progetti: 
            </h1>
            @foreach ( $projects as $project )
          
                <div class="cta m-2">
                   <img src="https://picsum.photos/200/300" alt="">
                   <div class="text">
                      <h2>{{$project->title}}</h2>
                      <p>{{$project->content}}</p>
                      <div class="text-center">
                           <a href="" class="btn btn-md btn-square btn-warning">
                               <i class="fa-solid fa-pen"></i>
                           </a>
                           <a href="" class="btn btn-md btn-square btn-success">
                               <i class="fa-solid fa-plus"></i>
                           </a>
                           <form action="" method="POST" class="d-inline-block">
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-md btn-danger btn-square">
                                   <i class="fa-solid fa-trash"></i>
                               </button>
                           </form>
                       </div>
                   </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection