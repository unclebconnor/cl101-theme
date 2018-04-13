(function( $ ) {
	var lpDrop = $('#lp-dropdown');
	var formCountDrop = $('#form-count-dropdown');
	var cmUp = $('#cm-up');
	var cmDn = $('#cm-dn');
	var cwUp = $('#cw-up');
	var cwDn = $('#cw-dn');
	var countMen = $('#count-men');
	var countWomen = $('#count-women');
	var countTotal = $('#count-total');
	var countMenDisp = $('#count-men-display');
	var countWomenDisp = $('#count-women-display');
	var countTotalDisp = $('#count-total-display');
	var calcMen = parseInt(countMen.attr('value'));
	var calcWomen = parseInt(countWomen.attr('value'));
	var calcTotal = calcMen + calcWomen;
	var formPg1 = $('#form-page-1');
	var formPg2 = $('#form-page-2');
	var formPg3 = $('#form-page-3');
	var iconPg1 = $('#icon-pg-1');
	var iconPg2 = $('#icon-pg-2');
	var iconPg3 = $('#icon-pg-3');
	var toPg1 = $('.to-pg-1');
	var toPg2 = $('.to-pg-2');
	var toPg3 = $('.to-pg-3');
	var pageName= $('#page-name').text();

	
	(function(){
		$('#choose-a-city').find($('#' + pageName)).attr('selected','selected');
	})()


	var goToPg1 = function(){
		formPg1.show();
		formPg2.hide();
		formPg3.hide();
		iconPg1.css('opacity',1.0);
		iconPg2.css('opacity',0.3);
		iconPg3.css('opacity',0.3);
	}

	var goToPg2 = function(){
		formPg1.hide();
		formPg2.show();
		formPg3.hide();
		iconPg1.css('opacity',0.3);
		iconPg2.css('opacity',1.0);
		iconPg3.css('opacity',0.3);
	}

	var goToPg3 = function(){
		formPg1.hide();
		formPg2.hide();
		formPg3.show();
		iconPg1.css('opacity',0.3);
		iconPg2.css('opacity',0.3);
		iconPg3.css('opacity',1.0);
	}

	goToPg1();


	var updateCounts = function(){
		countMen.val(calcMen);
		countWomen.val(calcWomen);
		countTotal.val(calcTotal)
		countMenDisp.text(calcMen);
		countWomenDisp.text(calcWomen);
		countTotalDisp.text(calcTotal);
	}

	toPg1.click(function(){goToPg1();});
	toPg2.click(function(){goToPg2();});
	toPg3.click(function(){goToPg3();});


	//increase count of men
	cmUp.click(function(){
		calcMen += 1;
		calcTotal += 1;
		updateCounts();
	});

	cmUp.hover(function() {
        $(this).css('cursor','pointer');
    });

	//increase count of women
    cwUp.click(function(){
		calcWomen += 1;
		calcTotal += 1;
		updateCounts();
	});

	cwUp.hover(function() {
        $(this).css('cursor','pointer');
    });

	//decrease count of men
    cmDn.click(function(){
    	if(calcMen>0){
    		calcMen -= 1;
    		calcTotal -= 1;
			updateCounts();
    	}
	});

	cmDn.hover(function() {
        $(this).css('cursor','pointer');
    });

	//decrease count of women
    cwDn.click(function(){
    	if(calcWomen>0){
    		calcWomen -= 1;
    		calcTotal -= 1;
			updateCounts();
    	}
	});

	cwDn.hover(function() {
        $(this).css('cursor','pointer');
    });

	//dropdown menus
	lpDrop.on('click', function(){
		lpDrop.toggleClass('is-active');
	});

	formCountDrop.on('click', function(e){
		e.preventDefault();
		formCountDrop.parent().toggleClass('is-active');
	});

	//datepicker settings
	const arrDate = datepicker('#arrival-date',{
		minDate: new Date(),
		formatter: function(el, date) {
    		el.value = date.toLocaleDateString();
  		}
	});

	const depDate = datepicker('#departure-date',{
		minDate: new Date(),
		formatter: function(el, date) {
    		el.value = date.toLocaleDateString();
  		}
	});

}) (jQuery);

