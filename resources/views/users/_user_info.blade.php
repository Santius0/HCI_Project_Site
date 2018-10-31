<div class="profile-user-info">
        <a href="{{ route('profile', $user->username()) }}">
            <img class="img-circle" src="{{ $user->gravatarUrl($avatarSize ?? 150) }}">
        </a>
    <h2 class="profile-user-name">{{ $user->name() }}</h2>
    @if ($bio = $user->bio())
        <p class="profile-user-bio">
            {{ $bio }}
        </p>
    @else
        <p class="profile-user-bio">
            Insert Bio Here
        </p>
    @endif

    <div class="profile-social-icons">
        @if ($user->githubUsername())
            <a href="https://github.com/{{ $user->githubUsername() }}">
                <i class="fa fa-github"></i>
            </a>
        @endif
    </div>
</div>
