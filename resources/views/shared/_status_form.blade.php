<form method="POST" action="{{route('statuses.store')}}">
	@include('shared._errors')

	{{csrf_field()}}
	<textarea name="content" class="form-control" rows="3" placeholder="聊聊新鲜事儿……">
		{{old('content')}}
	</textarea>
	<div class="text-right">
		<button type="submit" class="btn btn-primary mt-3">发布</button>
	</div>
</form>