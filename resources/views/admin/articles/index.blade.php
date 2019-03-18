@extends('layouts.admin.app')
@section('title') RacmyBlog管理画面
@endsection

@section('breadcrumb')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active"><i class="fas fa-chart-line"></i> Dashboard</li>
</ol>
@endsection

@section('css')
    <style>
        .card table th {
            border-top: 0px;
        }
    </style>
@endsection

@section('contents')

    @include('layouts.admin.components.article-search-form')

    <div class="card">
        <div class="card-body">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <table class="table table-responsive-md table-hover">
            <thead>
                <tr>
                    <th>記事名</th>
                    <th>カテゴリ</th>
                    <th>タグ</th>
                    <th>著者</th>
                    <th>更新日時</th>
                    <th>PV数</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>React.js入門</td>
                    <td>JavaScript</td>
                    <td>React.js</td>
                    <td>Yuto</td>
                    <td>2019/03/01/12:12</td>
                    <td>123456PV</td>
                    <td>
                        <button class="btn btn-success">編集</button>
                        <button class="btn btn-danger">削除</button>
                    </td>
                </tr>
                <tr>
                    <td>Vue.js入門</td>
                    <td>JavaScript</td>
                    <td>Vue.js</td>
                    <td>Tomo</td>
                    <td>2019/03/01/12:12</td>
                    <td>123456PV</td>
                    <td>
                        <button class="btn btn-success">編集</button>
                        <button class="btn btn-danger">削除</button>
                    </td>
                </tr>

            </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

@endsection
