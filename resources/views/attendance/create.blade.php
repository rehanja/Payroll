@extends('employee.emplayout')
@section('title')
Add Employee | 
@endsection
@section('header')
Add Employee
@endsection
@section('headerContent')
<a class="btn btn-primary float-right btn-sm" href="{{ route('home') }}" role="button"  title="Back"><i class="fa fa-arrow-left"></i></a>
@endsection
@section('empContent')
	<form method="POST" action="/saveAttendance"  enctype="multipart/form-data">
	{{csrf_field()}}
		

		<div class="form-group row">
			<label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

				@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="nic" class="col-md-4 col-form-label text-md-right">{{ __('NIC') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" name="nic" value="{{ old('nic') }}" required autocomplete="nic" autofocus>

				@error('nic')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="nopay" class="col-md-4 col-form-label text-md-right">{{ __('Nopay') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="nopay" type="text" class="form-control @error('nopay') is-invalid @enderror" name="nopay" value="{{ old('nopay') }}" required autocomplete="nopay" autofocus>

				@error('nopay')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="OverTime1" class="col-md-4 col-form-label text-md-right">{{ __('OverTime1(OT1)') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="OverTime1" type="text" class="form-control @error('OverTime1') is-invalid @enderror" name="OverTime1" value="{{ old('OverTime1') }}" required autocomplete="OverTime1">

				@error('OverTime1')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="OverTime2" class="col-md-4 col-form-label text-md-right">{{ __('OverTime2(OT2)') }}<span>*</span></label>

			<div class="col-md-6">
				<input id="OverTime2" type="text" class="form-control @error('OverTime2') is-invalid @enderror" name="OverTime2" autocomplete="OverTime2">
			</div>
			@error('OverTime2')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
		</div>
	
		</div>

		<div class="form-group row">
			<label for="OverTime3" class="col-md-4 col-form-label text-md-right">{{ __('OverTime3(OT3)') }}<span>*</span></label>

			<div class="col-md-6">
				<input id="OverTime3" type="text" class="form-control @error('OverTime3') is-invalid @enderror" name="OverTime3" autocomplete="OverTime3">
			</div>
			@error('OverTime3')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
		</div>

		<div class="form-group row">
			<label for="EarlyLeave" class="col-md-4 col-form-label text-md-right">{{ __('Early Leave') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="EarlyLeave" type="text" class="form-control @error('EarlyLeave') is-invalid @enderror" name="EarlyLeave" value="{{ old('EarlyLeave') }}" required autocomplete="EarlyLeave" autofocus>

				@error('EarlyLeave')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row">
			<label for="LateLeave" class="col-md-4 col-form-label text-md-right">{{ __('LateLeave') }} <span>*</span></label>

			<div class="col-md-6">
				<input id="LateLeave" type="text" class="form-control @error('LateLeave') is-invalid @enderror" name="LateLeave" value="{{ old('LateLeav') }}" required autocomplete="LateLeave" autofocus>

				@error('LateLeave')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
		</div>

		<div class="form-group row mb-0">
			<div class="col-md-6 offset-md-4">
				<button type="submit" class="btn btn-primary">
					{{ __('Register') }}
				</button>
			</div>
		</div>
	</form>
@endsection
