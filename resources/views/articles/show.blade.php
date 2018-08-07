@extends('layouts.app');
@section('content')
<div class="row">
	<div class="col-md-4 offset-md-4" style="margin-bottom:20px;">
		<div class="card">
			<div class="card-header" style="background: #fff;">
				<span>
					{{Auth::user()->name}}
					<small>
						<a href="{{ url('articles/' . $article->id . '/edit') }}">Edit</a>
					</small>
				</span>

				<span style="float: right;">
					{{$article->created_at->diffForHumans()}}
				</span>
			</div>
			<div class="card-body">
				{{$article->content}}
			</div>
			<div class="card-footer text-right"  style="background: #fff;">
				<i class="fa fa-heart"></i>
			</div>
		</div>
	</div>
</div>
@endsection