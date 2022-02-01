@extends('layouts.app')
@section('content')
	<h2 class="text-center">bu tashkilot ro'yhati</h2>
	<div class="d-grid gap-2 d-md-flex justify-content-md-end">
		<a href="{{route('companies.create')}}"><button class="btn btn-primary" type="button">Tashkilot qo'shish</button></a>
    </div>

	<br>

	<table class="table table-bordered">
		<thead>
			<tr>
				<td>T/R</td>
				<td>Tashkilot nomi</td>
				<td>Tashkilot manzili</td>
				<td>Tashkilot tel raqami</td>
			</tr>
			<tbody>
				@foreach($companies as $company)

				<tr>
					<td>{{ (($companies->currentpage()-1)*$companies->perpage() + ($loop->index+1))}}</td>
					<td>{{$company->name}}</td>
					<td>{{$company->address}}</td>
					<td>{{$company->phone}}</td>
			    </tr>
			    @endforeach
			</tbody>
		</thead>
	</table>
	{{$companies->links()}}
@endsection