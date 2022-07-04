@props(['tags'])

@php
$tagsExplode = explode(',', $tags);
@endphp

@foreach($tagsExplode as $tag)
        <span class="badge badge-primary" style="padding: 5px;"><a href="/?tag={{trim($tag)}}" style="color: white; font-size: 140%;">{{trim($tag)}}</a></span>
@endforeach

