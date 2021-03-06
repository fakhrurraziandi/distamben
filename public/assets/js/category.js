
$(function(){

    $('#table-category').bootstrapTable({
        classes: 'table table-striped table-no-bordered',
        toolbar: '#table-category-toolbar',
        url: base_url('kameng/category/json'),
        sidePagination: 'server',
        pagination: true,
        paginationLoop: true,
        pageList: [5, 10, 20, 50, 100, 200],
        search: true,
        showRefresh: true,
        checkbox: true,
        columns: [{
            field: 'id',
            title: 'Action',
            formatter: function(value, row, index){
                return `
                    <button type="button" class="btn btn-success btn-xs btn-edit-category" data-id="${value}"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-danger btn-xs btn-delete-category" data-id="${value}" data-identifier="${row.title}"><i class="fa fa-trash"></i></button>
                `;
            }
        }, {
            field: 'title',
            title: 'Title',
            sortable: true,
        }, {
            field: 'slug',
            title: 'Slug',
            sortable: true,
        }]
    });

    $('#btn-add-category').on('click', function(e){
        e.preventDefault();
        $('#modal-add-category').modal('show');
    });

    $('#form-add-category').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();

        $.ajax({
            url: base_url('kameng/category'),
            type: 'POST',
            data: form_data,
            success: function(result){

                if(result.status == 'success'){

                    toastr.success('Category has been successfully saved', 'Success');
                    $('#modal-add-category').modal('hide');
                    $('#table-category').bootstrapTable('refresh');
                    form.trigger('reset');
                }else{
                    $.each(result.messages, function(key, value){
                        value.forEach(function(message){
                            form.find('#' + key).after(`<p class="help-block">${value}</p>`).parent().addClass('has-error');
                        });
                    });
                }
            }
        });
    });

    $(document).on('click', '.btn-edit-category', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var form = $('#form-edit-category');
        $.ajax({
            url: base_url('kameng/category/find'),
            type: 'GET',
            data: {id: id},
            success: function(result){
                if($.isEmptyObject(result) === false){
                    $.each(result, function(key, value){
                        form.find('#' + key).val(value);
                    });
                    $('#modal-edit-category').modal('show');
                }
            }
        });
    });

    $('#form-edit-category').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var id = form.find('#id').val();
        var form_data = form.serialize();
        form_data += '&_method=PUT';

        $.ajax({
            url: base_url('kameng/category/' + id),
            type: 'POST',
            data: form_data,
            success: function(result){

                if(result.status == 'success'){

                    toastr.success('Category has been successfully updated', 'Success');
                    $('#modal-edit-category').modal('hide');
                    $('#table-category').bootstrapTable('refresh');
                    form.trigger('reset');
                }else{
                    $.each(result.messages, function(key, value){
                        value.forEach(function(message){
                            form.find('#' + key).after(`<p class="help-block">${value}</p>`).parent().addClass('has-error');
                        });
                    });
                }
            }
        });
    });

    $(document).on('click', '.btn-delete-category', function(e){
        e.preventDefault();

        var form       = $('#form-delete-category');
        var id         = $(this).data('id');
        var identifier = $(this).data('identifier');

        form.find('#id').val(id);
        form.find('#identifier').html(identifier);
        $('#modal-delete-category').modal('show');
    });

    $('#form-delete-category').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var id = form.find('#id').val();
        var form_data = '&_method=DELETE';

        $.ajax({
            url: base_url('kameng/category/' + id),
            type: 'POST',
            data: form_data,
            success: function(result){
                if(result.status === 'success'){
                    toastr.success('Category has been deleted successfully', 'Success');
                    $('#table-category').bootstrapTable('refresh');
                    $('#modal-delete-category').modal('hide');
                    form.trigger('reset');
                }
            }
        });
    });

});
