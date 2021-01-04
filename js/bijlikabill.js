var sum = 0,
    gst = 0,
    net = 0;



function dototal() {
    unit = document.frm.txtunit.value;O
    load = document.frm.txtload.value;

    var unitB = isNaN(unit);
    var loadB = isNaN(load);

    if (unitB == true)
        document.frm.txtunit.style.backgroundColor = "red"
    else

        document.frm.txtunit.style.backgroundColor = "white"

    if (loadB == true)
        document.frm.txtload.style.backgroundColor = "red"
    else

        document.frm.txtload.style.backgroundColor = "white"

    if (unitB == false && loadB == false)
        sum = parseFloat(unit) * parseFloat(load);
    document.frm.txttotal.value = sum;
    //else
    // alert("ghonchu number daal");
    document.frm.btngst.disabled = false;

}

function dogst() {
    document.frm.txtunit.value = sum;
    gst = sum * 18 / 100;
    document.frm.txtgst.value = gst;
    document.frm.btnnet.disabled = false;
}

function donet() {
    document.frm.txtunit.value = sum;
    document.frm.txtgst.value = gst;
    net = sum + gst;
    document.frm.txtnet.value = net;
}

function donew() {
    document.frm.txtunit.value = "";
    document.frm.txtload.value = "";
    document.frm.txttotal.value = "";
    document.frm.txtgst.value = "";
    document.frm.txtnet.value = "";
    document.frm.btngst.disabled=true;
    document.frm.btnnet.disabled=true;
    

}
