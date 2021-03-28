@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5"></div>
            <img
                src="https://instagram.fkwi2-2.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fkwi2-2.fna.fbcdn.net&_nc_ohc=NoLsLSZoKUEAX8bSYm_&ccb=7-4&oh=e349489676d4fcdf07026df0f57c8199&oe=60837F0F&_nc_sid=e2b730&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2-ccb7-4"
                class="rounded-circle" width="150" height="150">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ Auth::user()->username}}</h1>
                <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-4"><strong>153</strong> posts</div>
                <div class="pr-4"><strong>23k</strong> followers</div>
                <div class="pr-4"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ Auth::user()->profile->title }}</div>
            <div>
                {{ Auth::user()->profile->description }}
            </div>
            <div><a href="£">{{ Auth::user()->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-4">
            <img
                src="https://instagram.fkwi2-2.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fkwi2-2.fna.fbcdn.net&_nc_ohc=NoLsLSZoKUEAX8bSYm_&ccb=7-4&oh=e349489676d4fcdf07026df0f57c8199&oe=60837F0F&_nc_sid=e2b730&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2-ccb7-4">
            <div class="col-4">
                <img
                    src="https://instagram.fkwi2-2.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fkwi2-2.fna.fbcdn.net&_nc_ohc=NoLsLSZoKUEAX8bSYm_&ccb=7-4&oh=e349489676d4fcdf07026df0f57c8199&oe=60837F0F&_nc_sid=e2b730&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2-ccb7-4">
                <div class="col-4">
                    <img
                        src="https://instagram.fkwi2-2.fna.fbcdn.net/v/t51.2885-19/44884218_345707102882519_2446069589734326272_n.jpg?_nc_ht=instagram.fkwi2-2.fna.fbcdn.net&_nc_ohc=NoLsLSZoKUEAX8bSYm_&ccb=7-4&oh=e349489676d4fcdf07026df0f57c8199&oe=60837F0F&_nc_sid=e2b730&ig_cache_key=YW5vbnltb3VzX3Byb2ZpbGVfcGlj.2-ccb7-4">
                </div>
            </div>
        </div>
@endsection
