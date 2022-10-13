function getData(){
    console.log('data')
    $(document).ready(function(){
        $.get("general_data", function(data, status){
            //alert("Data: " + data.user + "\nStatus: " + status);
            $.each(data[0], function(i, item) {
                console.log(item.message);
                if (!$('#'+i).length) {
                    jQuery('<div>', {
                        id: i,
                        class: 'bg-slate-200  rounded-lg mr-8 mt-8 p-2',
                        title: item.created_at
                    }).appendTo('#messages_block');
                    jQuery('<div>', {
                        id: 'msg-header'+i,
                        class: 'flex justify-between border-b-4',
                    }).appendTo('#'+i);
                    jQuery('<a>', {
                        id: 'author'+i,
                        class: '',
                    }).appendTo('#msg-header'+i);
                    $("#author"+i).attr("href","/users/"+item.userid);
                    jQuery('<div>', {
                        id: 'timestamp'+i,
                        class: '',
                    }).appendTo('#msg-header'+i);
                    jQuery('<div>', {
                        id: 'msg-body'+i,
                        class: '',
                    }).appendTo('#'+i);
                    $("#msg-body"+i).append(item.message);
                    $("#author"+i).append(item.name);
                    $("#timestamp"+i).append(item.created_at);
                    console.log(item);
                }
            });
        });
    });
}
// getData();
//
//
//
// setInterval(getData, 6000);
