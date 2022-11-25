$(document).ready(function(){

// get value of id and values when action is edit and data-role=edit for updating data
$(document).on('click','a[data-role=edit]',function(){
	var id=$(this).data('id');
	var cname=$('#'+id).children('td[data-target=cname]').text();
	var cunit=$('#'+id).children('td[data-target=cunit]').text();
	$('#cname').val(cname);
	$('#cunit').val(cunit);
	$('#cunit').text(cunit);
	$('#Uid').val(id);
});
// get value of id when action is delete and data-role=delete for delete data
$(document).on('click','a[data-role=delete]',function(){
	var id=$(this).data('id');
	$('#Did').val(id);
});

	});