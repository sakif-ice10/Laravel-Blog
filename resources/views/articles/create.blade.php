@extends('layouts.app');
@section('content')
<div class="row">
	<div class="col-md-6 offset-md-3">
		<div class="card">
			<div class="card-header">
				Create Article
			</div>
			<div class="card-body">
				<form action="{{url('articles')}}" method="post">
					@csrf

					<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

					<div class="form-group">
						<label for="content">Content</label>
						<textarea name="content" class="form-control"></textarea>
					</div>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="live"> Live
						</label>
					</div>
					<div class="form-group">
						<label class="post_on">Post on</label>
						<input type="datetime-local" name="post_on" class="form-control">
					</div>
					<input type="submit" class="btn btn-success pull-right">
				</form>
			</div>
		</div>
	</div>
</div>
@endsection