@extends('layouts.app')

@section('title','Load File')

@section('content')

<div class="container-fluid text-info">
<h3>Upload File</h3>
  <form class="form-inline" action="loadcsv" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    {{ csrf_field() }}
      <label for="file">Choose File: </label>
      <input class="form-control" type="file" name="file">
      <input class="btn btn-primary" type="submit" name="submit" value="Upload file">
    </div>
      
  </form>
</div>


  @endsection