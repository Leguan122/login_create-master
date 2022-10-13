$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#sendMsg").click(function(e){

    e.preventDefault();

    var msg = $('#textarea').val();
    $('#textarea').val('');

    let url = "/rooms/"
    url = url.concat(id)

    $.ajax({
        type:'POST',
        url:url,
        data:{msg},
        success:function(data){
            // getData();
        }
    });
    console.log(url)
});

$("#textarea").keypress(function (e) {
    if(e.which === 13 && !e.shiftKey) {
        e.preventDefault();

        var msg = $('#textarea').val();
        $('#textarea').val('');

        $.ajax({
            type:'POST',
            url:'/rooms/ajaxRequest',
            data:{msg},
            success:function(data){
                getData();
            }
        });
    }
});
