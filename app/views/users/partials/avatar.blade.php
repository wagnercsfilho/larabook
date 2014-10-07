<a class="pull-left social-users-avatars" href="{{ route('profile_path', $user->username) }}">
	<img class="media-object img-circle avatar" src="{{ $user->present()->avatarFb(isset($size) ? $size : '') }}" alt="{{ $user->username }}">
</a>