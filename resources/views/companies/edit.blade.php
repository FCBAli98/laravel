@extends('layouts.app')
@section('content')
<h1 class="text-center">tashkilot malumotlarni o'zgartrish</h1>
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
		<form method="post" action="{{route('companies.update', ['company' => $company->id])}}">
			@method('PUT')
			@csrf
		   	@include('companies.form')
        </form>
	</div>
</div>

@endsection