var NestableLists = function () {

    var updateOutput = function (e) {
        var list = e.length ? e : $(e.target), output = list.data('output');

        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    var handleLists = function(){
        // activate Nestable for list 1
        $('#nestable').nestable({group: 1}).on('change', updateOutput);

        // activate Nestable for list 2
        $('#nestable2').nestable({group: 1}).on('change', updateOutput)

        // Draggable
        $('#nestable3').nestable();
    };

    var handleOutput = function(){
        updateOutput($('#nestable').data('output', $('#nestable-output')));
        updateOutput($('#nestable2').data('output', $('#nestable2-output')));
    };

    var handleOutputActions = function(){
        $('.actions').on('click', function (e) {
            var target = $(e.target), action = target.data('action');

            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });
    }

    return {
        //main function to initiate the module
        init: function () {
            handleLists();
            handleOutput();
            handleOutputActions();
        }
    };

}();

jQuery(document).ready(function() {
    NestableLists.init();
});

