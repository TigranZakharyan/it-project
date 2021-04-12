<!-- <div id="status"></div> -->
<div id="merdiv"></div>
<script>

		window.fbAsyncInit = function() {
    FB.init({
      appId      : '224971942447884',
      cookie     : true,
      xfbml      : true,
      version    : 'v9.0'
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));  
  var z;
  var z2;
  window.onload = function(){
    setTimeout(function(){
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
    // logout
    z = function(){
      FB.logout(function(response){
        
      });
      window.location='fbexit.php';
    }
    // login
    z2 = function(){
    FB.login(function(response) {
    if (response.authResponse) {
     console.log('Welcome!  Fetching your information.... ');
     FB.api('/me', function(response) {
       console.log('Good to see you, ' + response.name + '.');
     });
    } else {
     console.log('User cancelled login or did not fully authorize.');
    }

  });
  }
    },2000);
  }
  //stugelu code
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
        FB.api('/me', function (response) {
        	merdiv.innerHTML = '<b onclick="z()">logOut</b>';
           <?php if(!isset($_SESSION['fbuser'])){ ?>
        	window.location="getFbData.php?name="+response.name+"&id="+response.id;
        	<? } ?>
    		console.log(response);
        });
    } else {
        merdiv.innerHTML = '<b onclick="z2()">Facebook Login</b>';
    }
  }
</script>

<!-- 
  onlogin="checkLoginState()"
 -->
