{{-- @extends('layouts.app')
@section('content')
    <!-- Hero background & content on top of hero background -->
    <div id="hero-container">
        <div class="hero-wrapper">
            <h1>About <br> <span class="line">Page</span> <span class="orange-txt">Developer</span></h1>

        

        </div>
    </div>


@endsection --}}

{{-- //control structures --}}
{{-- @[structure] --}}
{{-- inside we can write anything we want --}}
{{-- div, h1, h2, h3 etc --}}
{{-- @[endstructure] --}}
{{-- 
@if (5>10)
    <p>5 is smaller than 10</p>
@elseif (5<10)
    <p>5 is indeed smaller than 10</p>

@endif

@unless (empty($name))
    <h2>Name is not empty</h2>

@endunless

@empty($name)
<h2>Name is empty</h2>
@endempty

@isset($name)
    <h2>Name is available!</h2>
@endisset

@switch($name)
    @case('dary')
        <h2>Name is Dary</h2>
        @break
    @case('michael')
        <h2>Name is michael</h2>
        @break
    @case('Shakil')
        <h2>Name is Shakil</h2>
    @break
    @default
        <h2>Name is no match</h2>
        
@endswitch

@for ($i=0; $i<10; $i++)
        <h2>The number is {{ $i }}</h2>
@endfor --}}

{{-- @foreach ($names as $char )
    <h2>The name is {{ $char}} </h2>
@endforeach --}}

@forelse ($names as $name)
    <h2>The name is {{ $name }} </h2>    
    @empty
    <h2>There are no names</h2>

    
@endforelse

