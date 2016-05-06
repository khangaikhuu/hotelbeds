@extends('layouts.app')

@section('content')
<form action="sendFrom" method="post">
    <div class="container" id="oneline-sb-background">
        <div class="row">
            <div class="col-md-12 col-md-offset-1" >
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div>
                                        Destination, Hotel and Apartment
                                    </div>
                                    <div class="ui-widget">
                                        <input id="tags">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        Check-In
                                    </div>
                                    <div>
                                        <input type="text"  id="checkin" name="checkin">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        Check-Out
                                    </div>
                                    <div>
                                        <input type="text"  id="checkout" name="checkout">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        Guests
                                    </div>
                                    <div>
                                        <div class="dropdown">
                                            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
                                                <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">HTML</a></li>
                                                <li><a href="#">CSS</a></li>
                                                <li><a href="#">JavaScript</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
