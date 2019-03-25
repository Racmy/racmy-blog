@extends('layouts.admin.app')
@section('title') RacmyBlog管理画面
@endsection

@section('breadcrumb')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fas fa-chart-line"></i> Dashboard</li>
    <li class="breadcrumb-item active"><i class="fas fa-list"></i> カテゴリ・タグ管理</li>
</ol>
@endsection

@section('contents')
    @include('layouts.admin.components.category-search-form')
    <div style="display:flex; justify-content:space-around;">
        <div class="card col-md-5">
            <div class="card-body">
                <div class="text-right mb-3">
                    <button class="btn btn-behance">カテゴリ登録</button>
                </div>
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
                            <th>カテゴリ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>PHP</td>
                            <td class="text-right">
                                <button class="btn btn-success">編集</button>
                                <button class="btn btn-danger">削除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td class="text-right">
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
        <div class="card col-md-5">
            <div class="card-body">
                <div class="text-right mb-3">
                    <button class="btn btn-behance">タグ登録</button>
                </div>
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
                            <th>タグ</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Laravel</td>
                            <td class="text-right">
                                <button class="btn btn-success">編集</button>
                                <button class="btn btn-danger">削除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Vue.js</td>
                            <td class="text-right">
                                <button class="btn btn-success">編集</button>
                                <button class="btn btn-danger">削除</button>
                            </td>
                        </tr>
                        <tr>
                            <td>React.js</td>
                            <td class="text-right">
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
    </div>
@endsection
