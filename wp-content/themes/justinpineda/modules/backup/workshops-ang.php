<div id="myApp" ng-app="myApp">
    <div class="row" ng-controller="peopleCtrl">
<div id="accordion">

  <div class="card" ng-repeat="v in myVMdata | filter:searchText">
    <div class="card-header" id="heading{{v.id}}">
      <h5 class="mb-0  dates" data-toggle="collapse" data-target="#collapse{{ v.id }}" aria-expanded="true" aria-controls="collapse{{ v.id }}">
      <div class="ws date" >{{ v.date.when[0].replace(" ","T")| date :  "MMM" }} <strong>{{ v.date.when[0].replace(" ","T")| date :  "dd" }}</strong></div>
      <div class="ws title truncate">{{v.title.rendered}}</div>
      </h5>
    </div>


    <div id="collapse{{v.id}}" ng-class='{show :$first}' class="collapse" aria-labelledby="heading{{v.id}}" data-parent="#accordion">
      <div class="card-body">
        <div class="row">
            <div class="col-md-7 col-sm-12">
              <h3>{{v.title.rendered}}</h3>
              <p> {{v.content.rendered | removeHTMLTags }}</p>
                <div class="workshop-date row">
                    <div class="ng-binding col-md-6">{{ v.date.when[0].replace(" ","T")| date :  "MMM" }}. {{ v.date.when[0].replace(" ","T")| date :  "dd" }}, {{ v.date.when[0].replace(" ","T")| date :  "yyyy" }} @{{ v.date.when[0].replace(" ","T")| date :  "hh" }}:{{ v.date.when[0].replace(" ","T")| date :  "mm" }}</div>
                    <div class="ng-binding col-md-6"><label>Instructor: </label>&nbsp;{{v.date.instructor[0] }} </div>
                
                </div>       
            </div>
              <div class="col-md-5 col-sm-12">
                <img src="{{v.attachment_url_images}}" alt="">
                <div class="mt-4">
                  <input type="hidden" value="{{ v.title.rendered }}" class="select-val" />
                 <button class="btn btn-register" id="btn{{v.id}}" value="{{ v.title.rendered }}" onclick="wsItem(this);"><i class="fa fa-pencil-square mr-1" aria-hidden="true"></i>Register</button>
                    </div>
              </div>  
         </div>
      </div>
   </div>
  

</div>
</div>
</div>

  <!--/.container-->
  <!-- /container 
  <script data-require="angularjs@1.6.4" data-semver="1.6.4"
    src="https://code.angularjs.org/1.6.4/angular.min.js"></script>-->
  
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
   /* 
app.controller('peopleCtrl', function($scope, $http) {
  $http.get("<?php echo get_stylesheet_directory_uri();?>/js/user.json").then(function(response) {
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
 var theBtn =document.querySelector(".show .btn-register");
    function wsItem(theBtn){
      var selectedWS = theBtn.value;
    //  alert(theBtn.value);
      window.location = "./register?ws-item="+selectedWS;
      
    }
</script>
</div>

