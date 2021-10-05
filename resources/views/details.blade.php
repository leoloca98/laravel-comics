@extends('layouts.main')

@section('title', $comic['title'])

@section('cdns')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
@endsection

@section('content')
    @include('includes.info')
@endsection
