<?php
	require_once('header.php');
?>



<div class="slide1" id="intro1">

<div class="row">
  <div class="large-4 columns left">

            <h4 align="left">Welcome to EventZ</h4>
            <h3 align="left">Find events</h3>
            <h2 align="left">Share events</h2>
            <h1 align="left">Create events</h1><br/>


<!-- Login with FB pop up window -->
<a class="button" href="<?php echo $login_url; ?>">Login With Facebook</a>

<!-- Shares a link to Facebook -->
<a href="https://www.facebook.com/dialog/feed?link=jspatterns.com&amp;app_id=570596709733222&display=popup&caption=Share%20this%20Event%20with%20your%20friends%20on%20Facebook!&link=http%3A%2F%2Feventzbeta.heroku.com%2F%2F&redirect_uri=http://eventzbeta.herokuapp.com/login/" class="button">Click Here to Share</a>

<!-- Share an open graph story on the users timeline -->
<a href="https://www.facebook.com/dialog/share_open_graph?app_id=570596709733222&display=popup&action_type=og.likes&action_properties=%7B%22object%22%3A%22https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2F%22%7D&redirect_uri=http://eventzbeta.herokuapp.com/login/" class="button">Click Here to Post to your Timeline</a>


  </div>
  <div class="large-2 columns center">
    &nbsp;
  </div>
  <div class="large-6 columns right">
    &nbsp;
  </div>

</div>

</div>




<?php
	require_once('footer.php');
?>
