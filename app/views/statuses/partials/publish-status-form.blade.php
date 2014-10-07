@include('layouts.partials.errors')

{{ Form::open(['route' => 'statuses_path']) }}
    <!-- Composer -->
    <!-- BEGIN COMPOSER -->
    <div class="media social-box social-composer ">

        <!-- BEGIN USER PICTURE -->
        <a class="pull-left social-users-avatars" href="#">
            <img class="nav-gravatar" src="{{ $currentUser->present()->avatarFb() }}" alt="{{ $currentUser->username }}">
        </a>
        <!-- END USER PICTURE -->
        <!-- BEGIN COMPOSER FORM -->
            <div class="media-body social-body">
                {{ Form:: textarea('body', null, ['class'=>'span12', 'rows' => 3, 'placeholder' => 'Whats on your mind?'])}}
                <div class="social-footer">
                    <div class="btn-group">
                        <a class="btn" data-original-title=""><i class="icon-map-marker"></i></a>
                        <a class="btn" data-original-title=""><i class="icon-camera"></i></a>
                    </div>
                    {{ Form::submit('Post Status', ['class' =>'btn btn-primary pull-right']) }}
                </div>
            </div>
        <!-- END COMPOSER FORM -->
    </div>
    <!-- END COMPOSER -->

{{ Form::close() }}