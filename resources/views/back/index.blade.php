<?php
foreach ($sets as $s){

    define($s->key,$s->value);
}

?>
@extends('layouts.backend')
@section('content')
    @include('partials.admin.navbar_admin')
    @include('partials.admin.navbar_lateral_admin')
    @include('partials.admin.main_admin')

@endsection
