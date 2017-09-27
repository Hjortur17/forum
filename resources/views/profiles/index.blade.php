@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                    <h1>Hjörtur Freyr <span>Meðlimur í 5 mánuði</span></h1>
                    <hr>
                </div>
                <div class="col-md-8">
                    @foreach ($threads as $thread)
                        <div class="panel panel-default" >
                            <div class="panel-heading">
                                <div class="panel-body">
                                    <article>
                                        <div>
                                            <p><strong>{{ $thread['fullname'] }}</strong> publish <span class="blue_link">{{ $thread['text-head'] }}</span></p>
                                        </div>
                                        <hr>
                                        <div class="body">
                                            <p>{{ $thread['text-body'] }}</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4" style="height: 100%;">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <article>
                                    <div>
                                        <h4>Nafn</h4>
                                        <h5>Hjörtur Freyr Lárusson</h5>
                                        <h4>Netfang</h4>
                                        <h5 style="font-size: 13px;"><span class="blue_link">hjorturfreyr@hjorturfreyr.com</span></h5>
                                        <h4>Fjöldi þráða: <span class="blue_link">14</span></h4>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection