$(document).ready(function(){

$("#cname").change(function(){
        var cid = $(this).val();

        $.ajax({
            url: 'others/chemical_unit.php',
            type: 'post',
            data: {cid:cid},
            dataType: 'json',
            success:function(response){

                var len = response.length;

                $("#cunit").empty();
                for( var i = 0; i<len; i++){
                    var id = response[i]['id'];
                    var name = response[i]['name'];
                    
                    $("#cunit").append("<option value='"+id+"'>"+name+"</option>");

                }
            }
        });
    });

// get value of id and values when action is edit and data-role=edit for updating data
$(document).on('click','a[data-role=edit]',function(){
    var id=$(this).data('id');
    var name=$('#'+id).children('td[data-target=name]').text();
    
    $('#name').val(name);
    $('#userid').val(id);
});
// get value of id when action is delete and data-role=delete for delete data
$(document).on('click','a[data-role=delete]',function(){
    var id=$(this).data('id');
    $('#id').val(id);
});

	});