@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('containers.tags')
            </div>
            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-body">

                        @if ( $questions->isEmpty() )
                            <p>No New Questions</p>
                        @else

                            <div id="questions">
                                <legend class="text-left">
                                    <h1>New Questions</h1>
                                </legend>
                            </div>

                            <P>
                                <a href="/questions/new" class="btn btn-primary btn-rounded btn-large {{$sort == 'new' ? 'disabled' : ''}}" role="button"><i class="fa fa-angle-right" style="color: white;"></i> <b>New</b></a>
                                <a href="/questions/top" class="btn btn-primary btn-rounded btn-large {{$sort == 'top' ? 'disabled' : ''}}" role="button"><i class="fa fa-angle-right" style="color: white;"></i> <b>Top</b></a>
                            </P><br>

                            @foreach( $questions as $question )
                                @include('containers.question')
                                @if($questions->last() != $question)
                                    <hr>
                                @endif
                            @endforeach

                            {{ $questions->links() }}

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection