/**
 * Created by fatuma.mkima on 10/10/2018.
 */



$(function () {

    thismonth();


});

function thismonth()
{
    $.get('api/json/all/complaints/thismonth', function (data)
    {

        console.log("thismonth");

        $("#open-thismonth").append(data.open);
        $("#pending-thismonth").append(data.pending);
        $("#closed-thismonth").append(data.closed);
        $("#total-thismonth").append(data.closed+data.open+data.pending);


    });

}

