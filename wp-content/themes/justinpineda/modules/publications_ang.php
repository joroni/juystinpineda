

  <div  id="myPub" ng-app="myPub">
    <div  ng-controller="pubCtrl">
  <section class="latest-blog-posts bg-white pt60 pb60">
	<div class="container-fluid" >
		<div id="owl-demo-2" class="owl-carousel owl-theme">



			<article ng-repeat="v in myVMdata" class="thumbnail item" itemscope="" itemtype="http://schema.org/CreativeWork">
				<a class="blog-thumb-img" href="/5-ways-baby-boomers-changing-healthcare/" title="">
					<img src="http://placehold.it/500x250" class="img-responsive" />
				</a>
				<div class="caption">
					<h4 itemprop="headline">
            <a href="#" rel="bookmark">{{v.title.rendered}}</a>
          </h4>
					<p itemprop="text" class="flex-text text-muted">{{v.content.rendered | removeHTMLTags }}</p>
				</div>
			</article>

			
		</div><!-- #owl-demo-2 -->	
        <div class="customNavigation">
                                <span class="pager-left"><a class="btn btn-link prev"><span class="fa fa-chevron-left"></span></a></span>
                                <span class="pager-right"><a class="btn btn-link next"><span class="fa fa-chevron-right"></span></a></span>
                            </div>		
	
	</div>
</section>
</div>
</div>


  <!-- /container -->
  <script data-require="angularjs@1.6.4" data-semver="1.6.4"
    src="https://code.angularjs.org/1.6.4/angular.min.js"></script>
  
  <script>
      var app = angular.module('myPub', []);
      app.controller('pubCtrl', function($scope, $http) {


  
$http.get("<?php echo esc_url( home_url( '/' ) ); ?>/wp-json/wp/v2/posts?categories=111").then(function(response) {
  $scope.myData = response.data;
  localStorage.setItem('publications', JSON.stringify($scope.myData));
  var vmdata = JSON.parse(localStorage.getItem('publications'));
  console.log('vmdata', vmdata);
 // console.log('date', vmdata.date);
  $scope.myVMdata = vmdata;
 
  $scope.messagingStat = function() {
    alert('Message Sent.');
  }



  $scope.getName = function(name) {
    console.log(name);
  }


  $scope.theFilter = '';
  $scope.getID = function(id) {
    $scope.searchText=  '';
    console.log('id: ',  id);
  
    $scope.theFilter = id;
    console.log( 'Filter: ',$scope.theFilter);


  }



  $scope.myfield = '';
  $scope.checkContent = function(){
      if($scope.myfield)//Check Empty Field
      {
          $scope.msg = "pls enter something";
      }else{
          $scope.msg = "Something Entered";
      }
  } 




});

});





app.filter('removeHTMLTags', function() {
	return function(text) {
		return  text ? String(text).replace(/<[^>]+>/gm, '') : '';
	};
});
    

</script>
</div>

