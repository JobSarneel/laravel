@extends('layouts.master')

@section('contentHeading')
Register
@endsection

@section('content') 
<form class="pure-form pure-form-aligned" method="POST" action="register">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <fieldset>
         <div class="pure-control-group">
            <label for="first_name">First Name</label>
            <input id="first_name" name="first_name" type="text">
         </div>

         <div class="pure-control-group">
            <label for="last_name">Last Name</label>
            <input id="last_name" name="last_name" type="text">
         </div>

         <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" name="email" type="email">
         </div>

         <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" name="password" type="password">
         </div>    

         <div class="pure-control-group">
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" name="password_confirmation" type="password">
         </div>       

         <div class="pure-controls">
            <button type="submit" class="pure-button pure-button-primary">Submit</button>
         </div>
      </fieldset>
   </form>
@endsection