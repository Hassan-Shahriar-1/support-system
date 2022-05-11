@extends('users.layouts.layout')


@section('content')

<div>
<form action="/user/token/submit" method="post">
@csrf
<div class="form-group">
    <lebel class="text-dark  ">Title</lebel>
    <input type="text" class="form-control bg-dark" name="title" />
</div>

<div class="text-dark form-group">
    <lebel class="text-dark ">Select Game</lebel>
    <select class="form-control bg-dark" name="gameid">
   
    @foreach($gm_list as $gm)
    <option value="{{$gm->id}}">{{$gm->name}}</option>
    @endforeach
    </select>


    
</div>
<div class="form-group">
    <lebel class="text-dark">Select Category</lebel><br>
    <select name="category" class="form-control bg-dark">

                <option value="" class="text-dark">holla2</option>
                @foreach($category as $cat)

                <option value="{{$cat->id}}" class="text-dark">{{$cat->name}}</option>
                @endforeach
    </select>
</div>
<div class="col-12 text-center">

<button class="btn btn-success" type="submit" >Generate Token</button>

</div>
</form>

</div>


@endsection