@extends('index')
@section('body')
  <section class="page-section portfolio" id="portfolio">
    <div class="container">


{{$transaction->id}}
{{$transaction->title}}
{{$transaction->description}}
{{$transaction->amount}}
 </div>
  </section>

@endsection