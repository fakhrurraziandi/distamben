
var url = 'http://localhost:8000/';

function base_url(extend){
	return url + extend;
}


/*Modal wide*/
$(".modal-wide").on("show.bs.modal", function() {
  	var height = $(window).height() - 200;
  	$(this).find(".modal-body").css("max-height", height);
});


$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
