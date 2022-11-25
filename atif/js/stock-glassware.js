$(document).ready(function(){

// get value of id and values when action is edit and data-role=edit for updating data
$(document).on('click','a[data-role=edit]',function(){
	var id=$(this).data('id');
	var gname=$('#'+id).children('td[data-target=gname]').text();
	var gsize=$('#'+id).children('td[data-target=gsize]').text();
	var gstock=$('#'+id).children('td[data-target=gstock]').text();
	$('#Gname').val(gname);
	$('#Gsize').val(gsize);
	$('#Gstock').val(gstock);
	$('#Uid').val(id);
});
// get value of id when action is delete and data-role=delete for delete data
$(document).on('click','a[data-role=delete]',function(){
	var id=$(this).data('id');
	$('#Did').val(id);
});

	});