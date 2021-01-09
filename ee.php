<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		
		.animate-show-hide.ng-hide {
  opacity: 0;
}

.animate-show-hide.ng-hide-add,
.animate-show-hide.ng-hide-remove {
  transition: all linear 0.5s;
}

.check-element {
  border: 1px solid black;
  opacity: 1;
  padding: 10px;
}
	</style>

<script >
	it('should check ngShow', function() {
  var checkbox = element(by.model('checked'));
  var checkElem = element(by.css('.check-element'));

  expect(checkElem.isDisplayed()).toBe(false);
  checkbox.click();
  expect(checkElem.isDisplayed()).toBe(true);
});

</script>
<style>
div {
  transition: all linear 0.5s;
  background-color: lightblue;
  height: 100px;
  width: 100%;
  position: relative;
  top: 0;
  left: 0;
}

.ng-hide {
  height: 0;
  width: 0;
  background-color: transparent;
  top:-200px;
  left: 200px;
}
</style>
</style>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-animate.js"></script>

</head>
<body ng-app="ngAnimate">

Show: <input type="checkbox" ng-model="checked" aria-label="Toggle ngShow"><br />
<div class="check-element animate-show-hide" ng-show="checked">
  I show up when your checkbox is checked.
</div>
</body>
</html>
