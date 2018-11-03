@if(isset($large) && $large)
    <div class="profile-user-info">
            <a href="{{ route('profile', $user->username()) }}">
                <img class="img-circle" src="{{ $user->gravatarUrl($avatarSize ?? 150) }}" width="{{ $avatarSize ?? 150 }}" height="{{ $avatarSize ?? 150 }}">
            </a>
        <h2 class="profile-user-name">{{ $user->name() }}</h2>
        @if ($bio = $user->bio())
            <p class="profile-user-bio-large">
                {!! $bio !!}
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
@else
    <div class="profile-user-info">
        <a href="{{ route('profile', $user->username()) }}">
            <img class="img-circle" src="{{ $user->gravatarUrl($avatarSize ?? 150) }}" width="{{ $avatarSize ?? 150 }}" height="{{ $avatarSize ?? 150 }}">
        </a>
    <h2 class="profile-user-name">{{ $user->name() }}</h2>
    @if ($bio = $user->bio())
        <p class="profile-user-bio">
            {!! $bio !!}
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
@endif
