{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
    <h2 class="form-signup-heading">Users Sign-in</h2>
 
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
	<p>
    {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
	</p>
	<p>
    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
	</p>
	<p>
    {{ Form::submit('Sign-in', array('class'=>'btn btn-large btn-primary btn-block'))}}
	</p>
{{ Form::close() }}