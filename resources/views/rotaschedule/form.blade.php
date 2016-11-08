<div class="form-group {{ $errors->has('rotaid') ? 'has-error' : ''}}">
    {!! Form::label('rotaid', 'Rotaid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('rotaid', null, ['class' => 'form-control']) !!}
        {!! $errors->first('rotaid', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('daynumber') ? 'has-error' : ''}}">
    {!! Form::label('daynumber', 'Daynumber', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('daynumber', null, ['class' => 'form-control']) !!}
        {!! $errors->first('daynumber', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('staffid') ? 'has-error' : ''}}">
    {!! Form::label('staffid', 'Staffid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('staffid', null, ['class' => 'form-control']) !!}
        {!! $errors->first('staffid', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('slottype') ? 'has-error' : ''}}">
    {!! Form::label('slottype', 'Slottype', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('slottype', null, ['class' => 'form-control']) !!}
        {!! $errors->first('slottype', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('starttime') ? 'has-error' : ''}}">
    {!! Form::label('starttime', 'Starttime', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'starttime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('starttime', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('endtime') ? 'has-error' : ''}}">
    {!! Form::label('endtime', 'Endtime', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::input('time', 'endtime', null, ['class' => 'form-control']) !!}
        {!! $errors->first('endtime', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('workhours') ? 'has-error' : ''}}">
    {!! Form::label('workhours', 'Workhours', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('workhours', null, ['class' => 'form-control']) !!}
        {!! $errors->first('workhours', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('premiumminutes') ? 'has-error' : ''}}">
    {!! Form::label('premiumminutes', 'Premiumminutes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('premiumminutes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('premiumminutes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('roletypeid') ? 'has-error' : ''}}">
    {!! Form::label('roletypeid', 'Roletypeid', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('roletypeid', null, ['class' => 'form-control']) !!}
        {!! $errors->first('roletypeid', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('freeminutes') ? 'has-error' : ''}}">
    {!! Form::label('freeminutes', 'Freeminutes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('freeminutes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('freeminutes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('seniorcashierminutes') ? 'has-error' : ''}}">
    {!! Form::label('seniorcashierminutes', 'Seniorcashierminutes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('seniorcashierminutes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('seniorcashierminutes', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('splitshifttimes') ? 'has-error' : ''}}">
    {!! Form::label('splitshifttimes', 'Splitshifttimes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('splitshifttimes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('splitshifttimes', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>