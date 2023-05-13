@extends('layouts.app')
<style>
    body {
        margin: 0;
        font-family: "Lato", sans-serif;
    }

    .sidebar {
        margin: 0;
        padding: 0;
        width: 250px;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;
        overflow: auto;
    }

    .sidebar a {
        display: block;
        color: black;
        padding: 16px;
        text-decoration: none;
    }

    .sidebar a.active {
        background-color: #000000;
        color: white;
    }

    .sidebar a:hover:not(.active) {
        background-color: #555;
        color: white;
    }

    div.content {
        margin-left: 200px;
        padding: 1px 16px;
        height: 1000px;
    }

    @media screen and (max-width: 700px) {
        .sidebar {
            width: 100%;
            height: auto;
            position: relative;
        }

        .sidebar a {
            float: left;
        }

        div.content {
            margin-left: 0;
        }
    }

    @media screen and (max-width: 400px) {
        .sidebar a {
            text-align: center;
            float: none;
        }
    }
</style>
<div class="sidebar mt-5">
    <a id="sidebar_item" href="#home" onclick="addActiveClass()">नयाँ दर्ता</a>
    <a id="sidebar_item" href="#news" onclick="addActiveClass()">दर्ता सुची</a>
    <a id="sidebar_item" href="#about" onclick="addActiveClass()">सेटिङ्ग</a>
</div>
@section('content')
@endsection
<script>
    function addActiveClass() {
        var element = document.getElementById("sidebar_item");
        element.classList.toggle("active");
    }
</script>
