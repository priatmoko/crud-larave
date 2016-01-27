@extends('layouts.app')
@section('content')
<div class="container">
	<div class="col-sm-offset-2 col-sm-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				Create New Books
			</div>

			<div class="panel-body">
				<a href="{{url('books')}}" class="btn btn-xs btn-default pull-right">back to list</a>
				<div class="clearfix"></div>
				
				@include('common.errors')
				
				
				<form route="{{url('books/'.$books->id.'/edit')}}" method="POST" class="form-horizontal">
				
					{{ csrf_field() }}
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">ISBN</label>
						<div class="col-sm-6">
							<input type="text" name="bk_isbn" id="bk_isbn" class="form-control" value="{{$books->bk_isbn}}">
						</div>
					</div>		
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Title</label>
						<div class="col-sm-7">
							<input type="text" name="bk_title" id="bk_title" class="form-control" value="{{$books->bk_title}}">
						</div>
					</div>		
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Author</label>
						<div class="col-sm-7">
							<input type="text" name="bk_author" id="bk_author" class="form-control" value="{{ $books->bk_author}}">
						</div>
					</div>
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Publisher</label>
						<div class="col-sm-7">
							<input type="text" name="bk_publisher" id="bk_publisher" class="form-control" value="{{ $books->bk_publisher}}">
						</div>
					</div>
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Jumlah</label>
						<div class="col-sm-3">
							<input type="text" name="bk_count" id="bk_count" class="text-right form-control" value="{{ $books->bk_count}}">
						</div>
					</div>
					
					<div class="form-group">
						<label for="task-name" class="col-sm-3 control-label">Description</label>
						<div class="col-sm-7">
							<textarea name="bk_desc" id="bk_desc" class="form-control">{{ $books->bk_desc}}</textarea>
						</div>
					</div>
					
					<div class="form-group">
						
						<div class="col-sm-offset-3 col-sm-7 offset"><button class="btn btn-default" type="submit">save books</button></div>
					</div>		
					
				</form>
				
			</div>
		</div>
	</div>
</div>
@endsection