class DataTableAjax {
    constructor($tables, options) {
        let _self = this;
        $tables.each(function () {
            let $current = $(this);
            if (!$current.closest('.table-container').hasClass('initialized')) {
                _self.initEachItem(this, options);
            }
        });
    }

    initEachItem(table, options) {
        let $table = $(table);
        let dataTableHelper = new Edutalk.DataTable($table, options);

        table.dataTableHelper = dataTableHelper;

        dataTableHelper.getTableWrapper().on('confirmed.bs.confirmation', '.table-group-action-submit', function (e) {
            e.preventDefault();
            let action = $(".table-group-action-input", dataTableHelper.getTableWrapper());
            if (action.val() != "" && dataTableHelper.getSelectedRowsCount() > 0) {
                dataTableHelper.setAjaxParam("customActionType", "group_action");
                dataTableHelper.setAjaxParam("customActionValue", action.val());
                dataTableHelper.setAjaxParam("id", dataTableHelper.getSelectedRows());
                dataTableHelper.getDataTable().ajax.reload();
                dataTableHelper.clearAjaxParams();
                dataTableHelper.getTableWrapper().find('input[name=group_checkable]').prop('checked', false);
                /*Cheat here to fix some bugs*/
                setTimeout(function () {
                    //dataTableHelper.getDataTable().ajax.reload();
                }, 0);
            } else if (action.val() == "") {
                Edutalk.showNotification('Please select an action', 'danger');
            } else if (dataTableHelper.getSelectedRowsCount() === 0) {
                Edutalk.showNotification('No record selected', 'warning');
            }
        });

        /**
         * Handle ajax link
         */
        dataTableHelper.getTableWrapper().on('confirmed.bs.confirmation', '.ajax-link', function (e) {
            e.preventDefault();
            let $current = $(this);
            $.ajax({
                url: $current.attr('data-ajax'),
                type: $current.attr('data-method') || 'POST',
                dataType: 'json',
                beforeSend: function () {
                    Edutalk.blockUI({
                        target: dataTableHelper.getTableWrapper()
                    });
                },
                success: function (data) {
                    if (options.ajaxActionsSuccess) {
                        options.ajaxActionsSuccess.call(undefined, $current, data);
                    }
                },
                complete: function (data) {
                    dataTableHelper.getTableWrapper().find('.blockUI').remove();
                    if (typeof data.responseJSON !== 'undefined') {
                        if (data.responseJSON.error) {
                            Edutalk.showNotification(data.responseJSON.messages, 'danger');
                        }
                        else {
                            Edutalk.showNotification(data.responseJSON.messages, 'success');
                        }
                    }
                    else {
                        Edutalk.showNotification('Some error occurred. View console log for more information', 'danger');
                    }
                    dataTableHelper.getDataTable().ajax.reload();
                }
            });
        });

        /**
         * When user press enter on filter's inputs, call filter
         */
        dataTableHelper.getTableWrapper().on('keyup', '.filter input', function (event) {
            if (event.which == 13) {
                dataTableHelper.getDataTableHelper().submitFilter();
            }
        });
    }
}

Edutalk.DataTableAjax = DataTableAjax;