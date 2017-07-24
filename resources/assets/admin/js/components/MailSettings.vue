<script>
    let mailgunComponent = {
        template: '#mailgun-template'
    }

    let sendgridComponent = {
        template: '#sendgrid-template'
    }

    let sparkPostComponent = {
        template: '#sparkpost-template'
    }

    let smtpComponent = {
        template: '#smtp-template'
    }

    export default {
        data() {
            return {
                currentView: 'mailgun',
            }
        },

        props: ['view'],

        mounted () {
            let views = ['mailgun','sendgrid','sparkpost','smtp']

            if(this.view && views.indexOf(this.view) > -1) {
                this.currentView = this.view
            }
        },

        components: {
            'mailgun': mailgunComponent,
            'sendgrid': sendgridComponent,
            'sparkpost': sparkPostComponent,
            'smtp' : smtpComponent
        }
    }
</script>