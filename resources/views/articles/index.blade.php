@extends('layouts.app');
@section('content')
<div class="row">
	@forelse($articles as $article)
		<div class="col-md-4 offset-md-4" style="margin-bottom:20px;">
			<div class="card">
				<div class="card-header" style="background: #fff;">
					<span>{{Auth::user()->name}}</span>
					<span style="float: right;">
						{{$article->created_at->diffForHumans()}}
					</span>
				</div>
				<div class="card-body">
					{{$article->shortContent}}
					<a href="{{url('articles/'.$article->id)}}">Read More</a>
				</div>
				<div class="card-footer text-right"  style="background: #fff;">
					@if($article->user_id == Auth::id())
						<form action="{{ url('articles/' . $article->id) }}" style="float: right; margin-left:25px;" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button class="btn btn-sm btn-danger">
								Delete
							</button>
						</form>
					@endif
					<i class="fa fa-heart"></i>
				</div>
			</div>
		</div>

	@empty
		No Article
	@endforelse
	
</div>
<div class="row">
	<div class="col-md-4 offset-md-4">
		{{$articles->links()}}
	</div>
</div>
@endsection