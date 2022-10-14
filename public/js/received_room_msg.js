function msgArrived(data) {
    $(document).ready(function(){
       console.log(data.message);
        console.log(data.time);
        console.log(data.user);
        console.log(data);

        jQuery('<div>', {
            id: data.time,
            class: 'bg-slate-200  rounded-lg mr-8 mt-8 p-2',
            title: data.time
        }).appendTo('#messages_block');
        jQuery('<div>', {
            id: 'msg-header'+data.time,
            class: 'flex justify-between border-b-4',
        }).appendTo('#'+ data.time);
        console.log('#'+ data.time)

        jQuery('<a>', {
            id: 'author'+data.userid,
            class: '',
        }).appendTo('#msg-header'+data.time);
        $("#author"+data.userid).attr("href","/users/"+data.userid);

        jQuery('<div>', {
            id: 'timestamp'+data.time,
            class: '',
        }).appendTo('#msg-header'+data.time);

        jQuery('<div>', {
            id: 'msg-body'+data.time,
            class: '',
        }).appendTo('#'+data.time);

        $("#msg-body"+data.time).append(data.message);
        $("#author"+data.time).append(data.name);
        $("#timestamp"+data.time).append(data.time);
    });
}
