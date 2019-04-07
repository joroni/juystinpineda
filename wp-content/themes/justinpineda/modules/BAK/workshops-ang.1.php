
<div class="col-sm-6">
                    <div class="box-image-text blog same-height">


                            <div class="top">
                                <div class="image">
                                        <img src="https://d1r27dnp1fh4g5.cloudfront.net/img/pages/fe-thumb/admin-4-900x600_75f03dc07b971ba680578d14719cb606.png" data-src="https://d1r27dnp1fh4g5.cloudfront.net/img/pages/fe-thumb/admin-4-900x600_75f03dc07b971ba680578d14719cb606.png" alt="Bubbly - Admin template" class="img-responsive unveil" style="opacity: 1;">
                                </div>
                                <div class="bg"></div>
                                <div class="text">
                                    <p class="buttons">
                                        <a class="btn btn-template-transparent-primary" href="/p/bubbly-admin-template">View template</a>
                                    </p>
                                </div>

                                    <div class="ribbon sale">
                                        <div class="theribbon">Bootstrap 4</div>
                                        <div class="ribbon-background"></div>
                                    </div>



                            </div>
                            <div class="content">
                                <h4><a href="/p/bubbly-admin-template">Bubbly - Admin template</a></h4>
                                    <p class="intro">Bubbly is the newest member in Bootstrapious admin templates family.

Its design language follows the current design trends - pastel colours, subtle shadows, rounded corners.

This Bootstrap dashboard contains 5 responsive HTML pages, all of them in 6 colour variants.

Pages included in this template:


	 - Main dashboard with 10 different widget types, 
	 - Demo tables - 4 demo table styles, 
	 - Charts - Custom styled line charts, bar charts, doughnut, pie chart and more, 
	 - Forms screen -…</p>
                                <p class="read-more"><a class="btn btn-template-main" href="/p/bubbly-admin-template">View template</a>
                                </p>
                            </div>


                    </div>
                    <!-- /.box-image-text -->

                </div>
<div id="myApp" ng-app="myApp">
    <div class="row" ng-controller="peopleCtrl">
        <div class="col-4 col-12-medium">
            <section id="show-data2" ng-repeat="item in myVMdata  | filter:searchText | filter:theFilter | limitTo : 1"><header><h2>{{item.title.rendered}}</h2></header>
                <a href="text-content-hacking" class="image featured"><img src="{{item.attachment_url_images}}" alt=""></a>
                  <div class="row">
                      <div class="workshop-date col-7">
                        <p>{{ item.date.when[0].replace(" ","T")| date :  "MMM" }}. {{ item.date.when[0].replace(" ","T")| date :  "dd" }}, {{ item.date.when[0].replace(" ","T")| date :  "yyyy" }} @{{ item.date.when[0].replace(" ","T")| date :  "hh" }}:{{ item.date.when[0].replace(" ","T")| date :  "mm" }}</p>
                        <p><label>Instructor: </label>&nbsp;{{item.date.instructor[0]}}</p>
                       </div>
                    <input type="hidden" id="wsSelect" value="{{item.title.rendered}}" />
                      <div class="workshop-button col-5 text-right">
                        <button  class="btn btn-register" onclick="wsItem()"><i class="fa fa-pencil-square mr-1" aria-hidden="true"></i>Register</button>
                      </div>
                  </div>
              <hr/>
                  <div class="row">
                      <div class="workshop-content mb-5 col-12">
                     <p>
                        {{item.content.rendered | removeHTMLTags }}
                        </p>
                  </div>
                </div>
            </section>
        </div>
        <div class="col-8 p-0 col-12-medium">
            <section id="workshoplist">
                <ul class=" dates"  id="show-data">
                  <li ng-repeat="v in myVMdata | filter:searchText" ng-click="getID(v.title.rendered)" ng-selected="v == myVMdata.value" ng-model="theFilter" class="item-link">
                <span class="date">{{ v.date.when[0].replace(" ","T")| date :  "MMM" }} <strong>{{ v.date.when[0].replace(" ","T")| date :  "dd" }}</strong></span>
                  <h3><a href="#0">{{ v.title.rendered }}</a></h3>
                  <p>{{ v.date.instructor[0] }}</p>
                  </li>
                </ul> 
            </section>
        </div>                
    </div>
</div>


  <!--/.container-->
  <!-- /container -->
  <script data-require="angularjs@1.6.4" data-semver="1.6.4"
    src="https://code.angularjs.org/1.6.4/angular.min.js"></script>
  
  <script>
      var app = angular.module('myApp', []);
app.controller('controller', controller);

function controller() {
  var _this = this;
  //_this.hello = 'Hello There';
  var vmdata = JSON.parse(localStorage.getItem('people'));
  _this.value = _this.value;
  _this.values = vmdata;
  _this.change = function() {
    //  _this.sayHello = 'Hello';
    _this.sayHello = _this.value;

    console.log('this', _this.values);


    return _this.value;



  }
}






app.filter('removeHTMLTags', function() {
	return function(text) {
		return  text ? String(text).replace(/<[^>]+>/gm, '') : '';
	};
});
    
app.controller('peopleCtrl', function($scope, $http) {
 /* $http.get("<?php echo get_stylesheet_directory_uri();?>/js/user.json").then(function(response) {
    $scope.mockUserData = response.data.User;
    $scope.username = function(val) {
      console.log(val);
    };  
  })*/

  
  $http.get("<?php echo esc_url( home_url( '/' ) ); ?>/wp-json/wp/v2/workshops?_embed").then(function(response) {
    $scope.myData = response.data;
    localStorage.setItem('people', JSON.stringify($scope.myData));
    var vmdata = JSON.parse(localStorage.getItem('people'));
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
 
    var wsItem = function(){
      var selectedWS = document.getElementById("wsSelect").value;
      window.location = "./register?ws-item="+selectedWS;
      
    }
</script>
</div>

