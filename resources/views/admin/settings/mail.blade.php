@extends('admin.layouts.layout-basic')

@section('scripts')
    <script src="{{asset('/assets/admin/js/settings/validation.js')}}"></script>
@stop

@section('content')
    <div class="main-content">
        <div class="page-header">
            <h3 class="page-title">Mail</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Settings</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.settings.mail.index')}}">Mail</a></li>
            </ol>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Set Mail Driver</h6>
                    </div>
                    <div class="card-body">
                        <mail-settings inline-template view="{{get_setting('mailer')}}">
                            <form id="mailDriverForm" method="post" action="{{route('admin.settings.mail.post')}}" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label>Mail Driver</label>
                                    <select name="mailer" class="ls-select custom-select" v-model="currentView">
                                        <option value="mailgun">Mailgun</option>
                                        <option value="sendgrid">SendGrid</option>
                                        <option value="sparkpost">SparkPost</option>
                                        <option value="smtp">SMTP</option>
                                    </select>
                                </div>
                                <component :is="currentView"></component>
                                <button class="btn btn-primary btn-large"><i class="icon-fa icon-fa-save"></i>Save
                                </button>
                            </form>
                        </mail-settings>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h6>Send Test Email</h6>
                    </div>
                    <div class="card-body">
                        <form id="testForm" method="post" action="{{route('admin.settings.mail.send')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>To</label>
                                <input type="text" name="to" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary btn-large"><i class="icon-fa icon-fa-save"></i>Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/x-template" id="mailgun-template">
        <div>
            <div class="form-group">
                <label>Mailgun Host</label>
                <input type="text" name="mail_mailgun_host" value="{{ get_setting('mail_mailgun_host') }}"
                       class="form-control">
            </div>
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
                <label>From Name</label>
                <input type="text" name="mail_from_name" value="{{ get_setting('mail_from_name') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>From Email Address</label>
                <input type="text" name="mail_from_email" value="{{ get_setting('mail_from_email') }}"
                       class="form-control">
            </div>
        </div>
    </script>

    <script type="text/x-template" id="sendgrid-template">
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
                <label>From Name</label>
                <input type="text" name="mail_from_name" value="{{ get_setting('mail_from_name') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>From Email Address</label>
                <input type="text" name="mail_from_email" value="{{ get_setting('mail_from_email') }}"
                       class="form-control">
            </div>
        </div>
    </script>

    <script type="text/x-template" id="sparkpost-template">
        <div>
            <div class="form-group">
                <label>SparkPost Secret</label>
                <input type="text" name="mail_sparkpost_secret" value="{{ get_setting('mail_sparkpost_secret') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>From Name</label>
                <input type="text" name="mail_from_name" value="{{ get_setting('mail_from_name') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>From Email Address</label>
                <input type="text" name="mail_from_email" value="{{ get_setting('mail_from_email') }}"
                       class="form-control">
            </div>
        </div>
    </script>

    <script type="text/x-template" id="smtp-template">
        <div>
            <div class="form-group">
                <label>SMTP Host</label>
                <input type="text" name="mail_smtp_host" value="{{ get_setting('mail_smtp_host') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="mail_smtp_username" value="{{ get_setting('mail_smtp_username') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" name="mail_smtp_password" value="{{ get_setting('mail_smtp_password') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Encryption</label>
                <input type="text" name="mail_smtp_encryption"
                       value="{{ get_setting('mail_smtp_encryption') ?: config('mail.encryption') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Port</label>
                <input type="text" name="mail_smtp_port"
                       value="{{ get_setting('mail_smtp_port') ?: config('mail.port') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>From Name</label>
                <input type="text" name="mail_from_name" value="{{ get_setting('mail_from_name') }}" class="form-control">
            </div>
            <div class="form-group">
                <label>From Email Address</label>
                <input type="text" name="mail_from_email" value="{{ get_setting('mail_from_email') }}" class="form-control">
            </div>
        </div>
    </script>
@stop

