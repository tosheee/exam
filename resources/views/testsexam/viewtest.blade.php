@extends('layouts.default')
@section('content')
    <div id="wrapper-test">
    @foreach($item as $it)

       <h2>{{$it->test_title}}</h2>
           <?php break; ?>
     @endforeach
     <?php $j=1;$i=1; ?>
@foreach($item as $key=>$quest)
       <h4>{{$key+1}}. {{$quest->question}}</h4>
       <form id="step{{ $j }}" action="/result" method="GET">
       <?php $j++; ?>
       <input type="radio" id="a{{$i}}" name="a[]" value="{{$i}}"><label>a) </label> {{$quest->ans_a}}<br>
       <?php $i++; ?>
       <input type="radio" id="a{{$i}}" name="a[]" value="{{$i}}"><label>б) </label> {{$quest->ans_b}}<br>
       <?php $i++; ?>
       <input type="radio" id="a{{$i}}" name="a[]" value="{{$i}}"><label>в) </label> {{$quest->ans_c}}<br>
        <?php $i++; ?>
       <input type="radio" id="a{{$i}}" name="a[]" value="{{$i}}" ><label>г) </label> {{$quest->ans_d}}<br>
       <?php $i++; ?>
       </form>
       <hr>
       @endforeach

<button id="testId" name="{{ $it->id }}" class="final-submit" >Провери</button>
           <div id="result">
          </div>
</div>
@stop