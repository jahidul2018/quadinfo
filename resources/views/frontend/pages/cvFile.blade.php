@extends('frontend.layouts.master')
@section('content')


<section class="ls s-py-50 c-gutter-60">
  <div class="container">
    <div class="row">
      <div class="divider-70 d-none d-lg-block"></div>

<div class="container">
  <h2>Condensed Table</h2>
  <p>The .table-condensed class makes a table more compact by cutting cell padding in half:</p>            
  <table class="table table-condensed">
    <thead>
     
        {{-- expr --}}
    
      <tr>
        <th>Name</th>
       
        <th>Email</th>
        <th>Message</th>
         <th>Position</th>
        <th>File</th>
      </tr>
    </thead>
    <tbody>
       @foreach ($careers as $c)
      <tr>
        <td>{{ $c->name }}</td>
        <td>{{ $c->email }}</td>
        <td>{{ $c->message }}</td>
        <td>{{ $c->position }}</td>
        <td><a href="{{asset('files/'.$c->file) }}" title="">View</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


      <div class="divider-80 d-none d-xl-block"></div>

    </div>
  </div>
</div>

</section>



@endsection 

 