@can('follow',$user) 
{{--第一个参数是策略，第二个参数是传入策略的参数--}}
{{--通过策略验证后，新增加的表单，包含一个按钮，写着关注，取消关注--}}
<div class="text-center mt-2 mb-4">
	@if(Auth::user()->isFollowing($user->id))
	<form method="POST" action="{{route('followers.destroy',$user->id)}}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit" class="btn btn-sm btn-outline-primary">取消关注</button>
	</form>
	@else
	<form method="POST" action="{{ route('followers.store',$user->id) }}">
		{{ csrf_field() }}
		<button type="submit" class="btn btn-sm btn-primary">关注</button>
	</form>
	@endif
</div>
@endcan