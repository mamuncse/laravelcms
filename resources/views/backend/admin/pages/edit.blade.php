@extends('layouts.app')

@section('title', '| Edit Page')

@section('content')
    <div class="content-wrapper" style="min-height: 700px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Post</h1>
            <hr>
            {{ Form::model($page, array('route' => array('pages.update', $page->id), 'method' => 'PUT')) }}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', null, array('class' => 'form-control')) }}<br>
                {{ Form::label('slug', 'Slug Field') }}
                {{ Form::text('slug', null, array('class' => 'form-control')) }}<br>
                {{ Form::label('body', 'Post Body') }}
                {{ Form::textarea('body', null, array('class' => 'form-control')) }}<br>
                <div class="form-group">
                    <label for="image">Upload Background</label>
                    <input type="file" id="background" name="background" value="">
                    <p class="help-block">PNG JPG IMAGE</p>
                </div>
                {{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
    </div>

@endsection