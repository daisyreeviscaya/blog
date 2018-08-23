@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Clients' Money in Bank-Premiums
        </button>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text-center">
            <h2><strong>Clients' Money in Bank-Premiums</strong></h2>                
        </div>
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Bank Name') }}</label>

                <div class="col-md-6">
                    <input id="bank_name" type="text" class="form-control{{ $errors->has('bank_name') ? ' is-invalid' : '' }}" name="email" value="{{ old('bank_name') }}" required autofocus>

                    @if ($errors->has('bank_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('bank_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('Account Number') }}</label>

                <div class="col-md-6">
                    <input id="account_number" type="text" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}" name="account_number" required>

                    @if ($errors->has('account_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="account_balance" class="col-md-4 col-form-label text-md-right">{{ __('Account Balance') }}</label>

                <div class="col-md-6">
                    <input id="account_balance" type="text" class="form-control{{ $errors->has('account_balance') ? ' is-invalid' : '' }}" name="account_balance" required>

                    @if ($errors->has('account_balance'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_balance') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
  <br>
  <div class="card">
    <div class="card-header" id="headingTwo">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Clients' Money in Bank - Claims
        </button>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <div class="text-center">
            <h2><strong>Clients' Money in Bank - Claims</strong></h2>                
        </div>
        <br>
        <form method="" action="" aria-label="#" return false>
            @csrf
            <div class="form-group row">
                <label for="account_balance" class="col-md-4 col-form-label text-md-right">{{ __(' Balance') }}</label>
                <div class="col-md-6">
                    <input id="account_balance" type="text" class="form-control{{ $errors->has('account_balance') ? ' is-invalid' : '' }}" name="account_balance" required>
                    @if ($errors->has('account_balance'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_balance') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>


@endsection

