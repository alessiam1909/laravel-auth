@extends('layouts.admin');
@section('content')
    <div class="container">
        <div class="row d-flex flex-wrap ">
            <h1 class="col-12 my-5 text-info">
                Elenco dei progetti: 
            </h1>
            @foreach ( $projects as $project )
            <div class="card border-info m-3 p-0" style="max-width: 250px">
                <div class="card-header">Titolo: {{$project->title}}</div>
                <div class="card-body text-info">
                  <h5 class="card-title text-dark">Slug: {{$project->slug}}</h5>
                  <p class="card-text">{{$project->content}}</p>
                </div>
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
            @endforeach
        </div>
    </div>
@endsection