var suc_id = $('#SUC_IDx').val();


$.post("../../controller/compra.php?op=listartopproducto",{suc_id:suc_id},function(data){
    $("#listtopcompraproducto").html(data);
})

$.post("../../controller/venta.php?op=listartopproducto",{suc_id:suc_id},function(data){
    $("#listtopventaproducto").html(data);
})