var Users = function () {


    var handleTables = function(){
        $('#users-datatable').DataTable({
            responsive : true
        });
    };

    var handleConfirmation = function() {

        $('[data-confirmation="notie"]').on('click',function(){
            $this = $(this);
            notie.confirm('Are you sure?', 'Yes! Delete this User', 'Cancel', function() {
                deleteUser($this);
            });
            return false;
        });

    };

    var deleteUser = function($this){
        var url = $this.attr('href'),token = $this.data('token');
        console.log(url);
        $.ajax({
            type: 'POST',
            data : {_method : 'delete' , _token : token},
            url: url,
            success: function (data) {
                toastr['success']('User Deleted', "Success");
                window.setTimeout('location.reload()', 500);
            },
            error: function (data) {
                toastr['error']('There was an error', "Error");
            }
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleTables();
            handleConfirmation();
        }
    };

}();

jQuery(document).ready(function() {
    Users.init();
});