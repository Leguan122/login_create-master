$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#sendMsg").click(function(e){

    e.preventDefault();

    var msg = $('#textarea').val();
    $('#textarea').val('');


    $.ajax({
        type:'POST',
        url:'/rooms/ajaxRequest',
        data:{msg},
        success:function(data){
            //alert(data.success);
        }
    });

});
