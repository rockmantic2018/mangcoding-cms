<?PHP $sg = Request::segment(2) ?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-md-8"> 
			<h1 class="page-header">{{ $sg=="add" ? 'Add Member' : 'Edit Member' }}</h1>			
			<!--Form fields-->
            @if( isset($members) )
                {!! Form::model($members, ['action' => ['Admin\Members@update', $members->memberid], 'files' => true]) !!}
            @else
                {!! Form::open(['files' => true]) !!}
            @endif
            @if ($alert = Session::get('message'))
                @if (is_object($alert))
                    <div class="alert alert-danger">
                        @foreach ($alert->all() as $msg)
                        {{ $msg."<br />" }}
                        @endforeach
                    </div>
                @else
                    <div class="alert alert-success">
                        {{ $alert }}
                    </div>
                @endif
            @endif 
			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif 
			<fieldset>
                 <div class="form-group">
                    <label>IdMember</label>
                    {!! Form::text('idMember', Input::old('idMember'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Gelar Depan</label>
                    {!! Form::text('prefix', Input::old('prefix'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Name</label>
                    {!! Form::text('fullName', Input::old('fullName'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Gelar Belakang</label>
                    {!! Form::text('subfix', Input::old('subfix'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Email</label>
                    {!! Form::text('email', Input::old('email'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    {!! Form::text('fullName', Input::old('fullName'), ['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    {!! Form::text('phone', Input::old('phone'), ['class'=>'form-control']) !!}
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-primary btn-success">Save</button>
            </fieldset>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<br class="clear" />