@extends('app')

@section('htmlheader_title')
{{ _('Home') }}
@endsection


@section('main-content')
<!-- <div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
 -->			<div class="panel panel-default">
				<div class="panel-heading">{{ _('Home') }}</div>

				<div class="panel-body">
					You are logged in!
					<?php if (Auth::viaRemember()) { ?>
						via Remember Token
					<?php } ?>
				</div>
			</div>
<!-- 		</div>
	</div>
</div>43£
 -->@endsection
