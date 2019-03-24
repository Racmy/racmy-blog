@extends('layouts.admin.app')
@section('title') RacmyBlog管理画面
@endsection

@section('breadcrumb')
<!-- Breadcrumb-->
<ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fas fa-chart-line"></i> Dashboard</li>
    <li class="breadcrumb-item active"><i class="fas fa-chart-line"></i> 記事投稿</li>
</ol>
@endsection

@section('contents')
    <h1>記事投稿</h1>
    <div id="example">
    </div>
@endsection
