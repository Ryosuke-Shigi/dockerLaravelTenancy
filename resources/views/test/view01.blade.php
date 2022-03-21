@extends('layout.root')

<!--タイトル-->
@section('title')
タイトル
@endsection

<!--meta情報-->
@section('meta')
    <!-- ajax用 -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->
    <link href="{{ asset('css/root.css') }}" rel="stylesheet">
    <link href="{{ asset('css/view01.css') }}" rel="stylesheet">

@endsection

<!--コンテンツ部分-->
@section('contents')
    <div class="wrapper">
        <div class="container_A">
            <form method="POST" action="{{ route('test.zipUp') }}" enctype="multipart/form-data">
                @csrf
                <input type="file" accept=".zip" name="websight">
                <button type="submit">送信</button>
            </form>
        </div>
    </div>
@endsection
