<!-- User Id Field -->
    <input name="user_id" type="hidden" value="{{ \Auth::id() }}">
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    @hasrole('user')
    <a href="{{ route('home') }}" class="btn btn-light">Cancel</a>
    @else
    <a href="{{ route('posts.index') }}" class="btn btn-light">Cancel</a>
    @endhasrole
</div>
