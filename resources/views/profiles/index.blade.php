@extends('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div>
                        <h1>Hjörtur Freyr Lárusson <span>Meðlimur í 5 mánuði</span></h1>
                        <hr>
                    </div>
                </div>
                <div class="col-md-8">
                    @foreach ($threads as $thread)
                        <div class="panel panel-default">
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
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <article>
                                    <div>
                                        <h2>Nafn</h2>
                                        <h4>Hjörtur Freyr Lárusson</h4>
                                        <h2>Netfang</h2>
                                        <h4><span class="blue_link">hjorturfreyr@hjorturfreyr.com</span></h4>
                                        <h2>Fjöldi þráða: <span class="blue_link">14</span></h2>
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