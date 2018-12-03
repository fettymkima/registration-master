/**
 * Created by fatuma.mkima on 10/10/2018.
 */

$(function () {


    $.get('api/complaints/count',function (datacount) {

        console.log(datacount);

        var open = datacount.open;
        var pending = datacount.pending;
        var closed = datacount.closed;
        var total = open + pending + closed;

        $("#open").append(open);
        $("#pending").append(pending);
        $("#closed").append(closed);
        $("#total").append(total);


    });
});