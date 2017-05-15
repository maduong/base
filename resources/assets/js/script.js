$(document).ready(function(){
    /**
     * Detect IE
     */
    Edutalk.isIE(function(){
        /**
         * Callback
         */
    });

    /**
     * Add csrf token to ajax request
     */
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
    });

    /**
     * Handle select media box
     */
    Edutalk.handleSelectMediaBox();

    Edutalk.tabChangeUrl();

    /**
     * Init layout
     */
    Edutalk.initAjax();

    Edutalk.fixedTopFormActions();
});

$(window).load(function () {
    Edutalk.hideLoading();
});
