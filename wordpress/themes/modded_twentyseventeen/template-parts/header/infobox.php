
    
<div class="infoboxContainer">
    <div class="alert alert-info alert-dismissible infobox">
        <i class="fa fa-info-circle infoboxIcon"></i>
        <?php dynamic_sidebar( 'cookie_banner' ); ?>
        
    
        <a href="#" class="close">&times;</a>
    </div>
    <div id="btnContainer">
        <button class="btn btn-info btn-xs toggleBtn" onclick="$('.alert-info').slideToggle('slow');; return false;">info box</button>
    </div>
</div>


<script>
    (function ($) {
        var cookie = Cookies.get('closedInfobox');
        
        if (cookie === "undefined" || cookie !== "true"){
        $('.infoboxContainer').css("display", "block");
        }
        $('.close').click(function( e ){
            
        Cookies.set('closedInfobox', 'true', { expires: 1});
        $('.infoboxContainer').css("display", "none");
                });
     })($);
</script>