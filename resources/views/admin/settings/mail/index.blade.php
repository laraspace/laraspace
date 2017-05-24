@extends('admin.layouts.layout-basic')


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
                        <form method="post" action="{{route('admin.mail.create')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <select name="mailer" class="ls-select form-control" v-model="currentView">
                                    <option value="mailgun">Mailgun</option>
                                    <option value="sendgrid">SendGrid</option>
                                    <option value="sparkpost">SparkPost</option>
                                </select>
                            </div>
                            <component :is="currentView"></component>
                            <button class="btn btn-theme btn-large"><i class="fa fa-save"></i>Save
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
                <input type="text" name="m_domain" value="{{ get_setting('m_domain') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mailgun Secret</label>
                <input type="text" name="m_secret" value="{{ get_setting('m_secret') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="m_user" value="{{ get_setting('m_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="m_from" value="{{ get_setting('m_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
    <template id="sendgrid-template">
        <div>
            <div class="form-group">
                <label>SendGrid Host</label>
                <input type="text" name="sg_host" value="{{ get_setting('sg_host') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>SendGrid Username</label>
                <input type="text" name="sg_username" value="{{ get_setting('sg_username') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>SendGrid Password</label>
                <input type="text" name="sg_password" value="{{ get_setting('sg_password') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="sg_user" value="{{ get_setting('sg_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="sg_from" value="{{ get_setting('sg_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
    <template id="sparkpost-template">
        <div>
            <div class="form-group">
                <label>SparkPost Secret</label>
                <input type="text" name="sp_secret" value="{{ get_setting('sp_secret') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail Username</label>
                <input type="text" name="sp_user" value="{{ get_setting('sp_user') }}"
                       class="form-control">
            </div>
            <div class="form-group">
                <label>Mail From</label>
                <input type="text" name="sp_from" value="{{ get_setting('sp_from') }}"
                       class="form-control">
            </div>
        </div>
    </template>
@stop
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.3/vue.min.js"></script>
    <script>
        Vue.component('mailgun', {
            template: '#mailgun-template'
        });
        Vue.component('sendgrid', {
            template: '#sendgrid-template'
        });
        Vue.component('sparkpost', {
            template: '#sparkpost-template'
        });
        new Vue({
            el: "#mail-driver",

            data: {
                currentView:'mailgun',
            },
        });

    </script>
@stop
