
$(function(){

    $('#table-post').bootstrapTable({
        classes: 'table table-striped table-no-bordered',
        toolbar: '#table-post-toolbar',
        url: base_url('kameng/post/json'),
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
            class: 'text-nowrap',
            formatter: function(value, row, index){
                return `
                    <button type="button" class="btn btn-success btn-xs btn-edit-post" data-id="${value}"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-danger btn-xs btn-delete-post" data-id="${value}" data-identifier="${row.title}"><i class="fa fa-trash"></i></button>
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
        }, {
            field: 'content',
            title: 'Content',
            sortable: true,
            formatter: function(value, row, index){
                return value.substring(0, 200) + ' .... ';
            }
        }]
    });

    $('#btn-add-post').on('click', function(e){
        e.preventDefault();
        $.ajax({
            url: base_url('kameng/category/json'),
            type: 'GET',
            success: function(result){
                var categories = result.rows;
                var form = $('#form-add-post');
                form.find('#category_id').find('option').remove().end().append('<option value=""></option>');

                if(categories.length > 0){
                    categories.forEach(function(value, index){
                        form.find('#category_id').append($('<option />').val(value.id).text(value.title));
                    });
                }

                $('#modal-add-post').modal('show');
            }

        });
    });

    $('#form-add-post').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var form_data = form.serialize();

        $.ajax({
            url: base_url('kameng/post'),
            type: 'POST',
            data: form_data,
            success: function(result){

                if(result.status == 'success'){

                    toastr.success('Category has been successfully saved', 'Success');
                    $('#modal-add-post').modal('hide');
                    $('#table-post').bootstrapTable('refresh');
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

    $(document).on('click', '.btn-edit-post', function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var form = $('#form-edit-post');
        $.ajax({
            url: base_url('kameng/post/find'),
            type: 'GET',
            data: {id: id},
            success: function(result){
                if($.isEmptyObject(result) === false){
                    $.each(result, function(key, value){
                        if(key == 'category_id' && value !== null){
                            $.ajax({
                                url: base_url('kameng/category/json'),
                                type: 'GET',
                                success: function(result){

                                    var categories = result.rows;

                                    form.find('#category_id').find('option').remove().end().append('<option value=""></option>');

                                    if(categories.length > 0){
                                        categories.forEach(function(category, index){

                                            if(category.id == value){
                                                console.log('sama');
                                                form.find('#category_id').append($('<option />').val(category.id).text(category.title).attr('selected', 'selected'));
                                            }else{
                                                console.log('tidak sama');
                                                form.find('#category_id').append($('<option />').val(category.id).text(category.title));
                                            }
                                        });
                                    }
                                }
                            });
                        }else{
                            form.find('#' + key).val(value);
                        }
                    });
                    $('#modal-edit-post').modal('show');
                }
            }
        });
    });

    $('#form-edit-post').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var id = form.find('#id').val();
        var form_data = form.serialize();
        form_data += '&_method=PUT';

        $.ajax({
            url: base_url('kameng/post/' + id),
            type: 'POST',
            data: form_data,
            success: function(result){

                if(result.status == 'success'){

                    toastr.success('Category has been successfully updated', 'Success');
                    $('#modal-edit-post').modal('hide');
                    $('#table-post').bootstrapTable('refresh');
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

    $(document).on('click', '.btn-delete-post', function(e){
        e.preventDefault();

        var form       = $('#form-delete-post');
        var id         = $(this).data('id');
        var identifier = $(this).data('identifier');

        form.find('#id').val(id);
        form.find('#identifier').html(identifier);
        $('#modal-delete-post').modal('show');
    });

    $('#form-delete-post').on('submit', function(e){
        e.preventDefault();
        var form = $(this);
        var id = form.find('#id').val();
        var form_data = '&_method=DELETE';

        $.ajax({
            url: base_url('kameng/post/' + id),
            type: 'POST',
            data: form_data,
            success: function(result){
                if(result.status === 'success'){
                    toastr.success('Category has been deleted successfully', 'Success');
                    $('#table-post').bootstrapTable('refresh');
                    $('#modal-delete-post').modal('hide');
                    form.trigger('reset');
                }
            }
        });
    });





});
