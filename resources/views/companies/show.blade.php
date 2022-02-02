@extends('layouts.app')
@section('content')
<h1 class="text-center">Tashkilot haqida to'liq malumot</h1>
<div class="row">
	<div class="col-md-6 offset-3">
		<div class="mb-3">
			<a class="nav-link" href="{{route('companies.index')}}">Ortga</a>
		</div>
		<table class="table table-bordered">
			<tr>
				<td>Tashkilot Nomi</td>
				<td>{{$company->name}}</td>
			</tr>
			<tr>
				<td>Tashkilot Manzili</td>
				<td>{{$company->address}}</td>
			</tr>
			<tr>
				<td>Tashkilot telfon raqami</td>
				<td>{{$company->phone}}</td>
			</tr>
			<tr>
				<td>Bazaga qo'shilgan vaqti</td>
				<td>{{$company->created_at}}</td>
			</tr>
		</table>
	</div>
</div>

@endsection