@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center py-5">ユーザー情報</h1>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">ユーザーID</div>
        <div class="col-sm-4 col-5">xxx</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">氏名</div>
        <div class="col-sm-4 col-5">xxxx&nbsp;xxx</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">住所</div>
        <div class="col-sm-4 col-5">
        <p><span>〒</span>xxx-xxxx</p>
        <p>xxxxxxxxxxxxx</p>
        </div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">電話番号</div>
        <div class="col-sm-4 col-5">xxxxxxxxxxx</div>
    </div>
    <div class="row mb-5 h4">
        <div class="col-sm-4 col-5 text-center">メールアドレス</div>
        <div class="col-sm-4 col-5">example@example.com</div>
    </div>
    <div class="text-center col-auto px-3 my-3">
        <a href="#" class="btn btn-primary col-auto">修正/退会する</a>
    </div>
</div>
@endsection