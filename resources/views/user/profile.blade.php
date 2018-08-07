@extends('layouts.app')

<style type="text/css">
	.profile-img{
		max-width: 150px;
		border: 5px solid #fff;
		border-radius: 100%;
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
</style>

@section('content')

	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card">
				<div class="card-body text-center">
					<img class="profile-img" src="https://thumbs.dreamstime.com/z/student-icon-vector-graduation-mortar-board-school-college-university-glyph-pictogram-male-person-profile-avatar-108392051.jpg">
					<h1>{{$user->name}}</h1>
					<h5>{{$user->email}}</h5>
					<h5>{{$user->dob->format('l j F Y')}} ({{$user->dob->age}} years old)</h5>
					<button class="btn btn-success">Follow</button>
				</div>
			</div>
		</div>
	</div>

@endsection