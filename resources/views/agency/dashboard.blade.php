@extends('agency.layout.main')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                @if(!$profile)
                <div class="box-header with-border">
                    <h2>Please fill your profile</h2>
                    <form action="{{url('/agency/profile')}}" method="post">
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="last_name" placeholder="Dart">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Vader">
                        </div>
                        <div class="form-group">
                            <label for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Vader corp.">
                        </div>
                        <div class="form-group">
                            <label for="phone">Business Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="1 234 56 78">
                        </div>
                        <div class="form-group">
                            <label for="business_url">Website</label>
                            <input type="text" class="form-control" id="business_url" name="business_url" placeholder="http://example.com">
                        </div>
                    </form>
                </div>
                @else
                    <p>Hi, {{ $profile->first_name . ' ' . $profile->last_name  }}</p>
                @endif
            </div>
        </div>
    </div>
@endsection
