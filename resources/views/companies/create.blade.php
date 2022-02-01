@extends('layouts.app')
@section('content')
<h1 class="text-center">Tashkilot qo'shish</h1>
<div class="row">
	<div class="col-md-6 offset-3">
		@if ($errors->any())
		    <div class="alert alert-success">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
        @endif
		<form method="post" action="{{route('companies.store')}}">
			@csrf
		  <div class="mb-3">
		    <label for="name" class="form-label">Tashkilot Nomi</label>
		    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
		  </div>
		  <div class="mb-3">
		    <label for="address" class="form-label">Tashkilot Manzili</label>
		    <input type="text" class="form-control" id="address" name="address" value="{{old('address')}}">
		  </div>
		  <div class="mb-3">
		    <label class="form-check-label" for="phone">Tashkilot Tel Raqami</label>
		    <input type="text" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
        </form>
	</div>
</div>

@endsection