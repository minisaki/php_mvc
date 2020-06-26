$("#check_all").change(function(){
    var checked = $(this).prop('checked');
    $(".data-table input[type='checkbox']").prop("checked", checked);
})

function submitForm(link){
    var form = $("#frmData");
    form.attr('action', link);
    form.submit();
}