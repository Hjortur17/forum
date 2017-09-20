@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Forum Threads</div>

                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Body: </label>
                            <textarea type="text" name="title" class="form-control" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </form>
                    <ul>
                        @foreach ($tasks as $task)
                            @if($task['complete'] === 'true')
                                <li>
                                    <a href="{{ $task['anchor'] }}">
                                        <s style="margin: 0px">
                                            {{ $task['title'] }}
                                        </s>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href='$task["anchor"]'>
                                        <p style="margin: 0px">
                                            {{ $task['title'] }}
                                        </p>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
