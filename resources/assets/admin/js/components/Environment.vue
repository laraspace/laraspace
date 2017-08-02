<script>
    export default {

        data(){
            return {
                editor:"",
                textarea:"",
            }
        },

        mounted () {
            let vm = this;
            let editor = vm.editor = ace.edit("environment");
            vm.textarea = editor.getSession().getValue();
            editor.getSession().setValue(vm.textarea);
            editor.getSession().on('change', function(){
                vm.textarea = editor.getSession().getValue();
            });
        },

    }
</script>