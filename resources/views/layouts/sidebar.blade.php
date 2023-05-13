@extends('layouts.app')
<div class="sidebar mt-5" id="sidebar">
    <ul><a class="sidebar_item active" href="#">नयाँ दर्ता</a></ul>
    <ul><a class="sidebar_item" href="#">दर्ता सुची</a></ul>
    <ul><a class="sidebar_item" href="#">सेटिङ्ग</a>
    <li>
        <a class="sidebar_item" href="{{route('fiscal.year')}}">आर्थिक बर्ष</a>
        <a class="sidebar_item" href="#">सेटिङ्ग</a>
        <a class="sidebar_item" href="#">सेटिङ्ग</a>
    </li>
    </ul>
</div>
<script>
var sidebarContainer = document.getElementById("sidebar");

var sidebar_item = sidebarContainer.getElementsByClassName("sidebar_item");

for (var i = 0; i < sidebar_item.length; i++) {
    sidebar_item[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
