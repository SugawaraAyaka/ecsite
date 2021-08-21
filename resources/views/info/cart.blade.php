
@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-sm-12">
            <div class="border border-dark mt-3">
                <p class="ml-1">お届け先</p>
                <p class="ml-3">
                    <span>〒</span>
                    郵便番号
                    &nbsp;
                    住所
                    &nbsp;
                    住所
                </p>
                <div>
                    <p class="offset-sm-4">
                        xxx
                        &nbsp;
                        xxx<span>様</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-11">
        <table class="table">
            <tr>
                <th>No</th>
                <th>商品名</th>
                <th>商品カテゴリ</th>
                <th>値段</th>
                <th>個数</th>
                <th>小計</th>
            </tr>
            <tr>
                <td>xx</td>
                <td>xxxxx</td>
                <td>xxxxx</td>
                <td>xx,xxx円</td>
                <td>xxxxxx<span>個</span></td>
                <td>xxx,xxx円</td>
                <td>
                    <form action="#" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>合計</td>
                <td>xx,xxx円</td>
                <td></td>
            </tr>
        </table>
    </div>

    <div class="row justify-content-center">
        <a href="#" class="btn btn-info">買い物を続ける</a>
        <div class="col-4 align-self-center">
        </div>
        <form action="#" method="post">
            @csrf
            <button type="submit" class="btn btn-primary">注文を確定する</button>
        </form>
    </div>
</div>
@endsection