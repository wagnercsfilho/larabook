<div class="media">
    <a class="pull-left" href="#">
        @include ('users.partials.avatar', ['user' => $comment->owner, 'size' => 30])
    </a>
    <div class="media-body">
        <strong>{{ $comment->owner->username }}</strong> {{ $comment->body }}<br>
        <small><span class="muted">Today at 7:36am</span></small> <strong style="cursor:pointer">Like</strong>
    </div>
</div>