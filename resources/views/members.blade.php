@extends('layouts.master')

@section('contentHeading')
Registratie geslaagd!
@endsection

@section('content') 
<p>
Welkom, {{Auth::user()->first_name}}. Nu je registratie geslaagd is kan je beginnen met je wijnkelder! Hieronder kan je meteen beginnen met het invoeren van je wijn.
</p>
@endsection