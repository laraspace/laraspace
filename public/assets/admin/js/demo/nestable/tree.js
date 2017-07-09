var NestableTree = function () {

    //js for container 1
    var handleSimpleTree = function(){
        $('#container').jstree();
        $("#s").submit(function(e) {
            e.preventDefault();
            $("#container").jstree(true).search($("#q").val());
        });
    };

    //js for Tree With Drag & Drop
    var handleDragAndDropTree = function(){
        $('#container2').jstree({
            "core" : { "check_callback" : true }, // so that operations work
            "plugins" : ["dnd"]
        });
    };

    // js for Tree With SearchBox
    var handleTreeWithSearchBox = function(){
        $('#container3').jstree({
            "plugins" : ["search"]
        });
    };

    //js for With Icons
    var handleTreeWithIcons = function(){
        $('#container4').jstree({
            "types" : {
                "default" : {
                    "icon" : "fa fa-user"
                },
                "demo" : {
                    "icon" : "fa fa-users"
                }
            },
            "plugins" : ["types"]
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleSimpleTree();
            handleDragAndDropTree();
            handleTreeWithSearchBox();
            handleTreeWithIcons();
        }
    };

}();

jQuery(document).ready(function() {
    NestableTree.init();
});
