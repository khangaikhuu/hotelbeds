@extends('layouts.app')

@section('footer')
<div class="container-fluid">
  <h1>Hello World!</h1>
  <div class="row">
    <div class="col-xs-6 col-sm-3" style="background-color:lavender;">
      Column 1<br>
      Resize the browser window to see the effect. Also try to remove the div clearfix line and see what happens.
    </div>
    <div class="col-xs-6 col-sm-3" style="background-color:lavenderblush;">Column 2</div>
    <!-- Add clearfix for only the required viewport -->
    <div class="clearfix visible-xs"></div>
    <div class="col-xs-6 col-sm-3" style="background-color:lightcyan;">Column 3</div>
    <div class="col-xs-6 col-sm-3" style="background-color:lightgray;">Column 4</div>
  </div>
</div>
@endsection