@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 style="margin-bottom: 50px;">Forum Threads</h2>
        </div>
        @foreach($threads as $thread)
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <article>
                            <div>
                                <h4>{{ $thread->title }}</h4>
                            </div>
                            <div class="body">
                                {{ $thread->body }}
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <hr>
        @endforeach
    </div>
</div>
@endsection