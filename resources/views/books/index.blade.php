@extends('layouts.app')
@section('content')

<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Books List
					
			</div>

			<div class="panel-body">
				<p class="text-right"><a href="{{url('books/create')}}" class="btn btn-xs btn-default">create new</a><p>
				@if (count($books)>0)
				<table class="table table-bordered table-stripped">
					<thead>
						<tr>
							<th>ISBN</th>
							<th>Title</th>
							<th>Author</th>
							<th>Publisher</th>
							<th>Count</th>
							<th>Desc</th>
							<th style="width:80px;"></th>
						</tr>
					</thead>
					<tbody>
						
						@foreach($books as $book)
							<tr>
								<td>{{$book->bk_isbn}}</td>
								<td>{{$book->bk_title}}</td>
								<td>{{$book->bk_author}}</td>
								<td>{{$book->bk_publisher}}</td>
								<td>{{$book->bk_count}}</td>
								<td>{{$book->bk_desc}}</td>
								<td class="text-center">
									<a href="{{url('books/'.$book->id.'/edit')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
									<a href="{{url('books/'.$book->id.'/delete')}}" class="btn btn-danger  btn-xs"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				@endif
				
			</div>
		</div>
	</div>
</div>

@endsection