@extends('admin_base')
@section('content')
<form action="{{ route('productCategory.store') }}" method="POST">
    @csrf
    <input name="name"/><br/>
    <textarea name="description">

    </textarea>
    <input type="submit" value="Save"/>
</form>
@endsection
