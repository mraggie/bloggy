@extends('main')

@section('title', '- Nieuw post')

@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <h1>Nieuwe Post</h1>
        <hr>

        {{ Form::open(array('route' => 'posts.store')) }}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control')) }}

            {{Form::label('slug', 'Slug')}}
        {{ Form::text('slug', null, array('class' => 'form-control')) }}

        {{Form::label('category', 'Categorie')}}
        <select class="form-control" name="category">
            @foreach($categories as $category)
                <option value='{{ $category->id }}'>{{ $category->name }}</option>
                @endforeach
        </select>


            {{ Form::label('body', "Post Body:" ) }}
            {{ Form::textarea('body', null, array('class' => 'form-control' )) }}

            {{ Form::submit('Maak aan', array('class' => 'btn btn-success')) }}
        {{ Form::close() }}

    </div>
</div>

@endsection
