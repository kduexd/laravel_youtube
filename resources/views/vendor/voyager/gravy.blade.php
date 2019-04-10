@extends('voyager::master')
@section('page_header')
    <h1 class="page-title">
        <i class="voyager-play"></i> {{ __('voyager::generic.settings') }}
    </h1>
@stop
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <div class="panel" style="margin-top:10px;">
        <div class="panel-body">
                <div class="panel-body no-padding-left-right">
                    <p>網址:</p>
                    <form action="{{action('YoutubeController@run')}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="col-md-10 no-padding-left-right">
                            <input type="text" class="form-control" name="url" value="">
                        </div>
                        <div class="col-md-2 no-padding-left-right">
                            <button type="submit" class="btn btn-primary pull-right">Save Settings</button>
                        </div>
                    </form>
                </div>
        </div>

    </div>
@stop