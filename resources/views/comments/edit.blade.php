@extends('layouts.app')

@section('content')
    {!! Form::model($comment, ['method' => 'PATCH', 'action' => ['CommentsController@update', $comment->id]]) !!}
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="pull-left">
                @if ($commentfor == "SkeletalElement")
                    <a href="{{ URL::route('skeletalelements.edit', ['id' => $skeletalelement->id, 'method' => 'GET']) }}" class="btn btn-info"><i class="fa fa-btn fa-backward"></i>Back</a>
                @endif
            </div>
            <div class="pull-right">
                {!! Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
            </div>
            @if ($commentfor == 'SkeletalElement')
                <div><h3>Edit Comment - for SkeletalElement - {{ $skeletalelement->accession_number }}</h3></div>
            @else
                <div><h3>Edit Comment</h3></div>
            @endif
        </div>

        @include ('comments.partial', ['CRUD_Action' => 'Update'])
    </div>
    {!! Form::close() !!}
@stop

@section('footer')
    <style>
        .table td { border: 0px !important; }
    </style>
@stop
