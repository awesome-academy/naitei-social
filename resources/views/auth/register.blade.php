@extends('layouts.app')

@section('content')
<div class="container register">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"><div class="card-header text">@lang('register.register')</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" >
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="first_name">@lang('register.firstname')</label>
                                <input type="first_name" name="first_name" class="form-control" id="first_name" >
                            </div>
                            <div class="form-group col-md-6">
                                <label for="last_name">@lang('register.lastname')</label>
                                <input type="last_name" name="last_name" class="form-control" id="last_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">@lang('register.email')</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="password">@lang('register.password')</label>
                            <input type="password" name="password" class="form-control" id="password" >
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">@lang('register.repass')</label>
                            <input type="password" class="form-control" id="password-confirm" name="password_confirmation">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phone">@lang('register.phone')</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="datebirth">@lang('register.birth')</label>
                                <input type="text" name="birth_date" class="form-control datepicker" placeholder="DD-MM-YYYY">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="sex">@lang('register.sex')</label>
                                <select id="sex" class="form-control" name="sex">
                                    <option selected value ="Male">@lang('register.male')</option>
                                    <option value="Female">@lang('register.female')</option>
                                </select>
                            </div>
                            <input type="hidden" name="status" value="1">
                            <input type="hidden" name="avatar" value="https://bit.ly/2YIxiGg">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">@lang('register.agree')</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">@lang('register.sign_in')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('js/datepicker.js') }}"></script>
@endsection
