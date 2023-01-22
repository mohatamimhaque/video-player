<?php include 'include/header.php'; ?>
<div id="player">
  
</div>


<script>
    $(document).ready(function(){
        $.ajax({
            type: "GET",
            url: "ajax/player.php",
            async: false,
            success: function(data) {
                $('#player').html(data)
            }
        })
        
    });
    </script>
<?php include 'include/footer.php'; ?>