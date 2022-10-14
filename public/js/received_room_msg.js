function msgArrived(data) {
    $(document).ready(function(){
       console.log(data.message);
        console.log(data.time);
        console.log(data.user);
        console.log(data);

        let id = data.time.toString();
        id = id.replace(':','-');
        id = id.replace(':','-');
        id = id.replace('.','-');
        console.log(typeof id);

        jQuery('<div>', {
            id: id,
            class: 'bg-slate-200  rounded-lg mr-8 mt-8 p-2',
            title: id
        }).appendTo('#messages_block');
        jQuery('<div>', {
            id: 'msg-header'+id,
            class: 'flex justify-between border-b-4',
        }).appendTo('#'+id);
        console.log('#'+ id)

        jQuery('<a>', {
            id: 'author'+id,
            class: '',
            href: "/users/"+data.userid
        }).appendTo('#msg-header'+id);

        jQuery('<div>', {
            id: 'timestamp'+id,
            class: '',
        }).appendTo('#msg-header'+id);

        jQuery('<div>', {
            id: 'msg-body'+id,
            class: '',
        }).appendTo('#'+id);

        $("#msg-body"+id).append(data.message);
        $("#author"+id).append(data.name);
        $("#timestamp"+id).append(data.time);
    });
}
