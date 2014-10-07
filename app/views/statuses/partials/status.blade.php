<div class="media social-box">
    <!-- BEGIN USER PICTURE -->
        @include ('users.partials.avatar', ['user' => $status->user, 'size' => 55])
    <!-- END USER PICTURE -->
    <!-- BEGIN BODY SECTION -->
    <div class="media-body social-body">
        <h4>{{ $status->user->username }}</h4>
        <p>{{ $status->body }}</p>
        <p>{{ $status->present()->timesincepublished() }}</p>
        <!-- BEGIN FOOTER SECTION -->
        <div class="social-footer">
            <div class="social-controls">
                <span><i class="icon-thumbs-up "></i> Like</span>
                <span><i class="icon-comment"></i> Comment</span>
                <span><i class="icon-share-alt"></i> Share</span>
            </div>
            <div class="social-info-users">
                <strong>Yadra Abels, Lechsinska Donell</strong> and <strong>349 others</strong> like this.
            </div>
            <!-- BEGIN COMMENTS -->
            <div class="social-comments">

                 @if ($signedIn)
                    {{ Form::open(['route' => ['comment_path', $status->id], 'class' => 'comments__create-form']) }}
                    {{ Form::hidden('status_id', $status->id) }}

                    <!-- BEGIN COMMENT -->
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" width="30" height="30" src="/assets/img/avatar-30.png" alt="You">
                        </a>
                        <div class="media-body">
                            {{ Form::textarea('body', null, ['class' => 'input-block-level', 'rows' => 1, 'placeholder' => 'Write a comment...']) }}
                        </div>
                    </div>
                    <!-- END COMMENT -->

                    {{ Form::close() }}
                @endif

                @unless ($status->comments->isEmpty())

                    @foreach ($status->comments as $comment)
                        @include ('statuses.partials.comment')
                    @endforeach

                @endunless
            </div>
            <!-- END COMMENTS -->
        </div>
        <!-- END FOOTER SECTION -->
    </div>
    <!-- END BODY SECTION -->
</div>
<!-- END SHARED TEXT SECTION -->