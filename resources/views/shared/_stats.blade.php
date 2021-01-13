{{--统计关注了多少人、有多少个粉丝、有多少篇微博。3个a标签--}}
<a href="#">
	<strong id="following" class="stat">
		{{ count($user->followings) }}
	</strong>
	关注
</a>

<a href="#">
	<strong id="followers" class="stat">
		{{ count($user->followers) }}
	</strong>
	粉丝
</a>

<a href="#">
	<strong>
		{{ $user->statuses()->count() }}
	</strong>
	微博
</a>