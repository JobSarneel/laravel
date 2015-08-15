@extends('layouts.master')

@section('contentHeading')
Login
@endsection

@section('content')
<ul>
	     @foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	     @endforeach
</ul>
<form class="pure-form pure-form-aligned" method="POST" action="/auth/login">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<fieldset>
			<div class="pure-control-group">
				<label for="email">Email Address</label>
				<input id="email" name="email" type="email" value="{{ old('email') }}">
			</div>

			<div class="pure-control-group">
				<label for="password">Password</label>
				<input id="password" name="password" type="password">
			</div>    

			<div class="pure-controls">
				<button type="submit" class="pure-button pure-button-primary">Submit</button>
			</div>
		</fieldset>
</form>
@endsection

<!-- @section('sidebar')
	@parent
@endsection -->