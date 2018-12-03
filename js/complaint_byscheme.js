/**
 * Created by fatuma.mkima on 10/12/2018.
 */

$(function () {

    summaryByScheme();


});

function summaryByScheme()
{
    $.get('api/json/summary/byscheme', function (data)
    {

        console.log("summmary");

        for(var i = 0; i<data.length; i++)
        {
            var id = "scheme-data-"+i;

            $("#summarybyscheme ").append('<tr id="'+id+'"><td>'+(i+1)+'</td></tr>');

            for(var x = 0; x<5; x++)
            {
                $("#"+id).append('<td>'+data[i][x]+'</td>');
            }
        }
    });

}

