@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">User</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<img src="https://randomuser.me/api/portraits/men/12.jpg" alt="user" class="img-circle">
					</div>
					<div class="col-md-8">
						<strong>Name:</strong> {{$user->name}}
					</div>
				</div>
			</div>		
		</div>
	</div>
</div>	
@endsection