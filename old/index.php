<?
$user_id = "putyouruseridhere"; 
$num_to_display = "30";

?>

<style>
.instagram-placeholder {
float: left;
}
</style>

<h1>jQuery Instagram User Stream Display Really Easy with a json call</h1>
uses jQuery and json to get an instagram user feed and display it on your site.
<br/>
This is a feed from my buddy at <a href="http://midwestshades.com">MidwestShades.com</a>
<br/>
Source and idea from <a href="https://forrst.com/posts/Using_the_Instagram_API-ti5">forrst</a>
<br/>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<div class="instagram"></div>

<script>

//HELP FROM HERE...
//https://forrst.com/posts/Using_the_Instagram_API-ti5

// small = + data.data[i].images.thumbnail.url +
// resolution: low_resolution, thumbnail, standard_resolution

$(function() {
    $.ajax({
    	type: "GET",
        dataType: "jsonp",
        cache: false,
        url: "https://api.instagram.com/v1/users/<?=$user_id?>/media/recent/?access_token=18360510.f59def8.d8d77acfa353492e8842597295028fd3",
        success: function(data) {
            for (var i = 0; i < <?=$num_to_display?>; i++) {
        $(".instagram").append("<div class='instagram-placeholder'><a target='_blank' href='" + data.data[i].link +"'><img class='instagram-image' src='" + data.data[i].images.low_resolution.url +"' /></a></div>");   
      		}     
                            
        }
    });
});

</script>

