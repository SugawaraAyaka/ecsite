@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <h2><span class="panel-heading badge badge-secondary mt-3 mb-2">直近3か月の注文を表示</span></h2>
        <div class="panel-body">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>注文番号</th>
                    <th>お届け先</th>
                    <th>備考</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>xxxx</td>
                    <td>xxxxxx</td>
                    <td>
                        <p>〒xxx-xxxx</p>
                        <p>xxxxx&nbsp;xxxxx</p>
                        <p>xxx&nbsp;xxxx  様</p>
                    </td>
                    <td>
                        <p>注文日時: xxxx</p>
                        <p>注文状態：発送済</p>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="#">詳細</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
