<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	
    <script src="js/youtube.js"></script>
	<script>
	function hide_video()
	{
			alert("inside");
		document.getElementById("youtube-player").remove();
	}
	</script>
</head>
<body>
    <div id="youtube-player"></div>
	<a href='javascript:void(0)' onclick='hide_video();'>Skip..</a>
	<div id='other data' style='display:none'>Some other data</div>
    <script type="text/javascript">
    $(document).ready(function(){
        window.$player = jQuery("#youtube-player").tubeplayer({
            width: 500,
            height: 400,
            initialVideo: "DkoeNLuMbcI",
            onPlayerLoaded: function(){
                this.tubeplayer("volume", 25);
                this.tubeplayer("seek", "0:01"); // Jump to T.I.
            },
            onPlayerEnded: function(){ 
                alert("that was awesome!"); 
            }
        });
		
    });
    </script>
</body>
</html>