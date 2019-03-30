
<div id="myApp" ng-app="myApp">
<div class="row" ng-controller="peopleCtrl">
                            <div class="col-4 col-12-medium">
                          
                               <section id="show-data2" ng-repeat="item in myVMdata  | filter:searchText | filter:theFilter | limitTo : 1"><header><h2>{{item.title.rendered}}</h2></header><a href="text-content-hacking" class="image featured"><img src="{{item.attachment_url_images}}" alt=""></a><div class="row"><div class="workshop-date col-7">Apr. 3rd, 2019 @2:00 pm<p></p><p><label>Instructor: </label> Justin Pineda</p></div><div class="workshop-button col-5 text-right"><button class="btn btn-register"><i class="fa fa-pencil-square mr-1" aria-hidden="true"></i>Join this</button></div></div></section>
                            </div>
                            <div class="col-8 col-12-medium">
                                <section id="workshoplist">
                                
                                    <ul class=" dates"  id="show-data">
                                        <li  ng-repeat="v in myVMdata | filter:searchText"ng-click="getID(v.title.rendered)" ng-selected="v == myVMdata.value"
                ng-model="theFilter"><span class="date">{{v.date.when[0]  | date : "dd-MM-yyyy"}} <strong>5th</strong></span><h3><a href="#0">{{ v.title.rendered }}</a></h3><p>{{ v.date.instructor[0] }}</p></li>
                                        </ul>
                                </section>
             
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



/*
app.controller('ctrl', function($scope) {
  $scope.max = 5;
  $scope.ratingVal = 5;
  $scope.readonly = false;
  $scope.onHover = function(val) {
    $scope.hoverVal = val;
  };
  $scope.onLeave = function() {
    $scope.hoverVal = null;
  }
  $scope.onChange = function(val) {
    $scope.ratingVal = val;
  }

});
 app.directive('star', function() {
  return {
    template: '<ul class="rating" ng-mouseleave="leave()">' +
      '<li ng-repeat="star in stars" ng-class="star" ng-click="click($index + 1)" ng-mouseover="over($index + 1)">' +
      '<i class="fa fa-star fa-1x"></i>' +
      '</li>' +
      '</ul>',
    scope: {
      ratingValue: '=',
      max: '=',
      readonly: '@',
      onHover: '=',
      onLeave: '='
    },
    controller: function($scope) {
      $scope.ratingValue = $scope.ratingValue || 0;
      $scope.max = $scope.max || 5;
      $scope.click = function(val) {
        if ($scope.readonly && $scope.readonly === 'true') {
          return;
        }
        $scope.ratingValue = val;
      };
      $scope.over = function(val) {
        $scope.onHover(val);
      };
      $scope.leave = function() {
        $scope.onLeave();
      }
    },
    link: function(scope, elem, attrs) {
      elem.css("text-align", "center");
      var updateStars = function() {
        scope.stars = [];
        for (var i = 0; i < scope.max; i++) {
          scope.stars.push({
            filled: i < scope.ratingValue
          });
        }
      };
      updateStars();

      scope.$watch('ratingValue', function(oldVal, newVal) {
        if (newVal) {
          updateStars();
        }
      });
      scope.$watch('max', function(oldVal, newVal) {
        if (newVal) {
          updateStars();
        }
      });
    }
  };
}); */


app.controller('ExampleController', ['$scope', function($scope) {
  $scope.name = 'Whirled';
}]);

app.controller('Test',  function($scope) {
    $scope.persons = [{ type: 1, name: 'Caio' }, { type: 2, name: 'Ary' }, { type: 1, name: 'Camila' }, { type: 3, name: 'Daniel' }];
    $scope.myFunction = function (val) {

        return (val.type != 2);
    };
});




app.controller('peopleCtrl', function($scope, $http) {
  $http.get("<?php echo get_stylesheet_directory_uri();?>/js/user.json").then(function(response) {
    $scope.mockUserData = response.data.User;
    $scope.username = function(val) {
      console.log(val);
    };
  })


 /* 
$scope.MyCtrl = function($scope) {
  
    $scope.people = [
        {id: 1, name: "Mark"},
        {id: 2, name: "John"},
        {id:3, name: "Joe"}
    ];
    $scope.myFilter = function(item){
        if(item.id === 2){
            return item;
        }
    };
} */
  
  $http.get("<?php echo esc_url( home_url( '/' ) ); ?>/wp-json/wp/v2/workshops?_embed").then(function(response) {
    $scope.myData = response.data;
   
    /* localStorage.setItem('user', JSON.stringify($scope.mockUserData));


    var vmuserdata = JSON.parse(localStorage.getItem('user'));
    console.log('vmuserdata', vmuserdata);
    $scope.userVMdata = vmuserdata; */


    //console.log('myData', $scope.myData);
    localStorage.setItem('people', JSON.stringify($scope.myData));


    var vmdata = JSON.parse(localStorage.getItem('people'));
    console.log('vmdata', vmdata);
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
  </script>
</div>

