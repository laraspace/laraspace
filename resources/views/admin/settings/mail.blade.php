@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{mix('/assets/admin/js/pages/settings/mail.js')}}"></script>
    <script src="/assets/admin/js/pages/validation.js"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Mail</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.mail.index')}}">Mail</a></li>
            </ol>
        </div>
        <div class="row" id="mail-driver">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-block">
                        <form method="post" action="{{route('admin.mail.create')}}" enctype="multipart/form-data"
                              id="validateForm">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Mail Driver</label>
                                <select name="mailer" class="ls-select form-control" v-model="currentView">
                                    <option value="mailgun">Mailgun</option>
                                    <option value="sendgrid">SendGrid</option>
                                    <option value="sparkpost">SparkPost</option>
                                </select>
                            </div>
                            <component :is="currentView"></component>
                            <button class="btn btn-primary btn-large"><i class="fa fa-save"></i>Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <template id="mailgun-template">
        <div>
            <div class="form-group">
                <label>Mailgun Domain</label>
                <input type="text" name="mail_mailgun_domain" value="{{ get_setting('mail_mailgun_domain') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mailgun Secret</label>
                <input type="text" name="mail_mailgun_secret" value="{{ get_setting('mail_mailgun_secret') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="mail_mailgun_user" value="{{ get_setting('mail_mailgun_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="mail_from" value="{{ get_setting('mail_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
    <template id="sendgrid-template">
        <div>
            <div class="form-group">
                <label>SendGrid Host</label>
                <input type="text" name="mail_sendgrid_host" value="{{ get_setting('mail_sendgrid_host') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>SendGrid Username</label>
                <input type="text" name="mail_sendgrid_username" value="{{ get_setting('mail_sendgrid_username') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>SendGrid Password</label>
                <input type="text" name="mail_sendgrid_password" value="{{ get_setting('mail_sendgrid_password') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="mail_sendgrid_user" value="{{ get_setting('mail_sendgrid_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="mail_from" value="{{ get_setting('mail_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
    <template id="sparkpost-template">
        <div>
            <div class="form-group">
                <label>SparkPost Secret</label>
                <input type="text" name="mail_sparkpost_secret" value="{{ get_setting('mail_sparkpost_secret') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="mail_sparkpost_user" value="{{ get_setting('mail_sparkpost_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="mail_from" value="{{ get_setting('mail_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
@stop

