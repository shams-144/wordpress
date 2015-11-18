</div> <!-- end of main -->
        
<div id="tooplate_footer_wrapper">
<div id="tooplate_footer">
    	
        Copyright © 2048 <a href="#">Company Name</a> - Design: <b><a href="http://www.tooplate.com"><span class="orange">too</span><span class="green">plate</span></a></b>

    
    </div> <!-- end of footer wrapper -->
</div> <!-- end of footer -->

   
       

<?php wp_footer(); ?>
<script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = '';
    $scope.email = '';
	$scope.message='';
	$scope.submitForm = function(isValid) 
	{
		
	alert('hi');	
	}
});
</script>
</body>
</html>