@extends('layouts.app')

@section('title','Report Form')

@section('content')



<div class="container" align="center">
<div><h2>Account for system</h2></div></br>

<table class="table">
  <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Username</th>
        <th scope="col">Email</th>
      
  <tbody>
    @foreach($users as $user)
    <tr>    
        <th>{{ $user->id }}</th>
        <th>{{ $user->name }}</th>
        <th>{{ $user->username}}</th>
        <th>{{ $user->email}}</th>  
    </tr>
    @endforeach
  </tbody> 
</table>
<div class="pagination justify-content-center">
{{ $users -> links()}}
</div>