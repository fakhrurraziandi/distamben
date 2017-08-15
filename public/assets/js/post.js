
$(function(){


    $('#post-table').bootstrapTable({
        classes: 'table table-striped table-no-bordered',
        toolbar: '#table-data-toolbar',
        url: 'kelas/json',
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
                    <button type="button" class="btn btn-success btn-xs btn-edit" data-id="${value}"><i class="fa fa-pencil"></i></button>
                    <button type="button" class="btn btn-danger btn-xs btn-delete" data-id="${value}" data-identifier="${row.kelas}"><i class="fa fa-trash"></i></button>
                `;
            }
        }, {
            field: 'tahunajaran',
            title: 'Tahun Ajaran',
            sortable: true,
        }, {
            field: 'kelas',
            title: 'Kelas',
            sortable: true,
        }, {
            field: 'walikelas',
            title: 'Walikelas',
            sortable: true,
        }]
    });
});
