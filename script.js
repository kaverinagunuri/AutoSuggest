$(document).ready(function(){
    $('.autosuggest').keyup(function(){
       // alert('ok');
        var search_term=$(this).val();
         $.post('search.php',{search_term:search_term},function(data)
         {
            //alert(data); 
            $('.result').html(data);
            $('.result li').click(function(){
                var result_value=$(this).text();
                //alert(result_value);
                $('.autosuggest').val(result_value);
                
            });
         });
        //alert(search_term);
    });
    
    
});