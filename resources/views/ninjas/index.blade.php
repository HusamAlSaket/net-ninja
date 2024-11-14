<x-layout>


<h2>Currently Available Ninjas</h2>

<!-- if directive to render things depend on the statement -->
<!-- :highlight often use to access dynamic data such as boolean which is not string -->

<ul>
    @foreach($ninjas as $ninja)
        <li>
<x-card href="{{route('ninjas.show',$ninja->id)}}" :highlight="$ninja['skill'] > 70 "> 
<div>
<h3>{{$ninja->name}}</h3>
<p>{{$ninja->dojo->name}}</p>
</div>
</x-card>
        </li>
    @endforeach

</ul>

{{$ninjas->links('pagination::bootstrap-4')}}







</x-layout>
