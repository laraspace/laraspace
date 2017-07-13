$(document).ready(function () {
    var editor = ace.edit("environment");
    var textarea = $('textarea[name="environment"]').hide();
    textarea.val(editor.getSession().getValue());
    editor.getSession().setValue(textarea.val());
    editor.getSession().on('change', function(){
        textarea.val(editor.getSession().getValue());
    });
});