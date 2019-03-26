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
    <div style="display:flex; justify-content:space-around">
        @include('layouts.admin.components.category-search-form')
        @include('layouts.admin.components.tag-search-form')
    </div>
@endsection
