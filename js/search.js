
jQuery(document).ready(function(){



    $('#search').on('keyup',function(e){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });
        $.ajax({
            url: "/complaints/api/search",
            method: 'get',
            data: {
                fullsearch: $('#search').val()

            },
            success: function(result){

                $('#search-table-result').html(result);

                console.log(result);
            }});
    });


});