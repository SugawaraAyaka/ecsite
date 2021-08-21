@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p-3 border rounded-lg">
        <h3>お届け先</h3>
        <p>〒xxx-xxxx</p>
        <p>xxxxxxxxxxxxx</p>
        <p>xxxx　xxx様</p>
        発送状況xxxx
    </div>
    <div class="py-3">
        <p>注文番号：xxxxxxx</p>
        <p>注文番号：xxxxx</p>
    </div>
    <div class="text-right px-3 my-3">
        <form action="#" method="post" onsubmit="return checkText()">
        @csrf
            <button type="submit" id="add_delete" class="btn btn-danger">注文をキャンセルする</button>
        </form>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">NO</th>
                <th class="text-center">商品名</th>
                <th class="text-center">商品カテゴリー</th>
                <th class="text-center">値段</th>
                <th class="text-center">個数</th>
                <th class="text-center">小計</th>
                <th class="text-center">備考</th>
            </tr>
        </thead>
        <tbody class="text-center border-bottom">
            <tr>
                <th scope="row">xxxxxx</th>
                <td>xxxxxxxx</td>
                <td>xxxxx</td>
                <td>xx,xxx円</td>
                <td>xx個</td>
                <td>xxx,xxx円</td>
                <td>商品状態：xxxxx</td>
            </tr>
        </tbody>
        <tbody class="text-center">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td> xxx,xxx円</td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="text-right px-3 my-3">
        <a href="#" class="btn btn-primary">注文履歴に戻る</a>
    </div>
</div>
@endsection
