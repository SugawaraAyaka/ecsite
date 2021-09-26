@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="text-center py-5">ユーザー情報修正</h1>
    <form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <div class="form-group row">
        <label name="name" class="col-sm-2 text-sm-center offset-sm-1">氏名</label>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">姓</label>
        <input name="last_name" type="text" class="col-sm-2" value="{{ $user->last_name }}"/>
        <label class="col-sm-1 text-sm-right col-2 col-form-label">名</label>
        <input name="first_name" type="text" class="col-sm-2" value="{{ $user->first_name }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 text-sm-center col-12 col-form-label offset-sm-1">住所</label>
        <label class="col-sm-1 text-right col-2 col-form-label">〒</label>
        <input name="zipcode" type="text" class="col-sm-3 col-8" value="{{ $user->zipcode }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">都道府県</label>
        <input name="prefecture" type="text" class="col-sm-4" value="{{ $user->prefecture }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">市町村区</label>
        <input name="municipality" type="text" class="col-sm-4" value="{{ $user->municipality }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">番地</label>
        <input name="address" type="text" class="col-sm-4" value="{{ $user->address }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-right">マンション部屋番号</label>
        <input name="apartments" type="text" class="col-sm-4" value="{{ $user->apartments }}"/>
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">メールアドレス</label>
        <input name="email" type="text" class="col-sm-6" value="{{ $user->email }}">
    </div>
    <div class="form-group row">
        <label class="col-sm-4 col-form-label text-sm-center">電話番号</label>
        <input name="phone_number" type="text" class="col-sm-6" value="{{ $user->phone_number }}">
    </div>
    <div class="d-flex justify-content-around py-5 col-sm-8 col-auto container">
        <input type="submit" class="btn btn-primary" value="修正">
    </form>
    <form method="post" action="{{ route('users.delete', $user->id) }}">
    @method('DELETE')
    @csrf
        <input type="submit" class="btn btn-danger " value="退会">
    </form>
    </div>
</div>

@endsection
