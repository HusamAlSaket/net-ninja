<!-- attributes are for styling elements in html but props is more as react view stylings like highlight -->
<!-- and we often use $slot to put the content there -->
@props(['highlight' => false])
<div @class(['highlight' => $highlight,'card'])>
    {{$slot}}
    <a {{$attributes}} class ="btn">view details </a>
</div>

