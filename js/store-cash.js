	var sum = 0;
	function addCost(dish){
		var temp = dish.getAttribute("data-cost");
		sum=sum+parseInt(temp);
		document.getElementById("sumcash").value = sum;
	}