@extends('index')
@section('body')
<!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <table class="table table-bordered">
        <caption>All Transactions</caption>
        <thead class="thead-dark">
          <tr>
            <th>S.N</th>
            <th>Title</th>
            <!-- <th>Description</th> -->
            <th>Amount</th>
            <th>Type</th>
            <th>Create at</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody><?php $sum = 0;
        $sn = 1?>
          @foreach($transactions as $transaction)


          <?php  if($transaction->type == "income"){
            $sum = $sum + $transaction->amount; }
            else{
              $sum = $sum - $transaction->amount; 
            }
            ?>

    <tr class="{{ $transaction->btn }}">
      <td> {{$sn}}</td>
      <td> {{$transaction->title}}</td>
      <!-- <td> {{$transaction->description}}</td> -->
      <td> {{$transaction->amount}}</td>
      <td> {{$transaction->type}}</td>
      <td> {{$transaction->human_date}}</td>
      <td> 
        <a href="/transactions/{{$transaction->id}}" >
          <i class="fas fa-eye"></i>
          <ion-icon name="trash"></ion-icon> 
        </a>
         &nbsp &nbsp &nbsp &nbsp
         <a href="/transactions/{{$transaction->id}}/edit">
          <i class="far fa-edit"></i>
        </a>
        &nbsp &nbsp &nbsp &nbsp
        <a href="/transactions/{{$transaction->id}}/delete" >
    
          <i class="fas fa-trash"></i>
          <ion-icon name="trash"></ion-icon> 
        </a>          
      </td>
    <tr>
      <?php $sn = $sn + 1; ?>
  
  @endforeach
  <?php 
  if ($sum >= 0)
  {
  $class_value = 'success';
  }
  else
  {
    $class_value = 'danger';
  }
  ?>
  <tr class = "alert alert-{{$class_value}}">
        <td>Total</td>
        <td></td>
        <!-- <td></td> -->
        <td>{{$sum}}</td>
        <td></td>
        <td></td>
         <td></td>
      </tr>
        </tbody>
      </table>


      {{ $transactions->links() }}

    </div>
  </section>
  @endsection