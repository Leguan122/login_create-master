function getData(){
    console.log('data')
    $(document).ready(function(){
        $.get("general_data", function(data, status){
            //alert("Data: " + data.user + "\nStatus: " + status);
            $.each(data[0], function(i, item) {
                console.log(item.message);
                jQuery('<div>', {
                    id: i,
                    class: 'bg-slate-200  rounded-lg p-3',
                    title: 'now this div has a title!'
                }).appendTo('#messages_block');
                $("#"+i).append(item.message);
            });
        });
    });
}

getData();


