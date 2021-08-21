@extends('layouts.app')


@section('content')

<div>
    <div class="row mt-4">
        <div class="col-lg-12 text-center">
            <h1>商品検索画面</h1>
        </div>
    </div>

    <form method="get" action="#">
        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2 class="mr-4">商品名</h2>
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary ml-4">検索</button>
                </span>
            </div>
        </div>

        <div class="row">
            <div class="input-group mt-4 col-md-7 offset-2">
                <h2>商品カテゴリ</h2>
                <select class="ml-2" style="width:50%; text-align-last:center;">
                    <option value="">未選択</option>
                    <option value="">カテゴリー1</option>
                    <option value="">カテゴリー2</option>
                </select>
            </div>
        </div>
    </form>

    <p>全xx件</p>
    <table border="1" class="table" style="border-collapse: collapse">
    <thead class="bg-warning">
        <tr>
            <th>商品名</th>
            <th>商品カテゴリ</th>
            <th>価格</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>xxxx</td>
            <td>xxxx</td>
            <td>xxx円</td>
            <td name="name">
                <a href="#" class="btn btn-primary">商品詳細</a>
            </td>
        </tr>
    </tbody>
    </table>
</div>

@endsection
