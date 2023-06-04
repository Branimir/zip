@extends('admin_base')

@section('content')
    @foreach($productCategories as $pc)
        <p>{{$pc->name}}</p>
    @endforeach
@endsection

@section('sidebar')
    Test Sidebar
@endsection
