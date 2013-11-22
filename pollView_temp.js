(function () {
    var line1 = [];
    var m = 0;
    var plot;
    
    $(document).ready(function() {
       $.getJSON('http://localhost/FreeOnlinePoll/index.php/rest/polls', function(jd1) {
           $.each(jd1, function (i, item) {
               $('#label').append('<option>' + jd1[i].ShortTitle + '</option>')
           });
        });
    });
    
    //$(window).resize(function() {
		//plot.replot( { resetAxes: true } );
	//});

    ////// When a poll is selected, the detail of the poll should be displayed
    $(document).ready(function() {
        $("#label").change(function() {
            $('h4').html('');
            $('#table tr').remove();
            $('#chart1').html('');
            line1 = [];
            $.getJSON('http://localhost/FreeOnlinePoll/index.php/rest/polls/'+ $("select[name='label'] option:selected").index(), function(jd2) {
               //$('#result').append('<p>Selected: ' + $("select[name='label'] option:selected").index() + '</p><br>')
               $.each(jd2, function (i, item) {
                   //$('#table').append('<tr><td> Id: </td><td>' + jd2[i].id + '</td></tr>')
                   //$('h4').append('Short title: ' + jd2[i].ShortTitle + '</h4><br><br>')
                   $('h4').append('Question: ' + jd2[i].Question + '</h4>')
                   
                   $('#table').append('<tr><td> Answer </td><td> Result </td></tr>')
                   $('#table').append('<tr><td>' + jd2[i].Answer1 + '</td><td>' +jd2[i].Result1+ '</td></tr>')
                   line1.push([jd2[i].Answer1, jd2[i].Result1]);
                   m = jd2[i].Result1+1;
                   $('#table').append('<tr><td>' + jd2[i].Answer2 + '</td><td>' +jd2[i].Result2+ '</td></tr>')
                   line1.push([jd2[i].Answer2, jd2[i].Result2]);
                   if(m < jd2[i].Result2){
					   m = jd2[i].Result2+1;
				   }
                   if(jd2[i].Answer3 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer3 + '</td><td>' +jd2[i].Result3+ '</td></tr>')
                       line1.push([jd2[i].Answer3, jd2[i].Result3]);
                       if(m < jd2[i].Result3){
						   m = jd2[i].Result3+1;
					   }
                   }
                   if(jd2[i].Answer4 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer4 + '</td><td>' +jd2[i].Result4+ '</td></tr>')
                       line1.push([jd2[i].Answer4, jd2[i].Result4]);
                       if(m < jd2[i].Result4){
						   m = jd2[i].Result4+1;
					   }
                   }
                   if(jd2[i].Answer5 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer5 + '</td><td>' +jd2[i].Result5+ '</td></tr>')
                       line1.push([jd2[i].Answer5, jd2[i].Result5]);
                       if(m < jd2[i].Result5){
						   m = jd2[i].Result5+1;
					   }
                   }
                   if(jd2[i].Answer6 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer6 + '</td><td>' +jd2[i].Result6+ '</td></tr>')
                       line1.push([jd2[i].Answer6, jd2[i].Result6]);
                       if(m < jd2[i].Result6){
						   m = jd2[i].Result6+1;
					   }
                   }
                   if(jd2[i].Answer7 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer7 + '</td><td>' +jd2[i].Result7+ '</td></tr>')
                       line1.push([jd2[i].Answer7, jd2[i].Result7]);
                       if(m < jd2[i].Result7){
						   m = jd2[i].Result7+1;
					   }
                   }
                   if(jd2[i].Answer8 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer8 + '</td><td>' +jd2[i].Result8+ '</td></tr>')
                       line1.push([jd2[i].Answer8, jd2[i].Result8]);
                       if(m < jd2[i].Result8){
						   m = jd2[i].Result8+1;
					   }
                   }
                   if(jd2[i].Answer9 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer9 + '</td><td>' +jd2[i].Result9+ '</td></tr>')
                       line1.push([jd2[i].Answer9, jd2[i].Result9]);
                       if(m < jd2[i].Result9){
						   m = jd2[i].Result9+1;
					   }
                   }
                   if(jd2[i].Answer10 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer10 + '</td><td>' +jd2[i].Result10+ '</td></tr>')
                       line1.push([jd2[i].Answer10, jd2[i].Result10]);
                       if(m < jd2[i].Result10){
						   m = jd2[i].Result10+1;
					   }
                   }
                   if(jd2[i].Answer11 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer11 + '</td><td>' +jd2[i].Result11+ '</td></tr>')
                       line1.push([jd2[i].Answer11, jd2[i].Result11]);
                       if(m < jd2[i].Result11){
						   m = jd2[i].Result11+1;
					   }
                   }
                   if(jd2[i].Answer12 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer12 + '</td><td>' +jd2[i].Result12+ '</td></tr>')
                       line1.push([jd2[i].Answer12, jd2[i].Result12]);
                       if(m < jd2[i].Result12){
						   m = jd2[i].Result12+1;
					   }
                   }
                   if(jd2[i].Answer13 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer13 + '</td><td>' +jd2[i].Result13+ '</td></tr>')
                       line1.push([jd2[i].Answer13, jd2[i].Result13]);
                       if(m < jd2[i].Result13){
						   m = jd2[i].Result13+1;
					   }
                   }
                   if(jd2[i].Answer14 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer14 + '</td><td>' +jd2[i].Result14+ '</td></tr>')
                       line1.push([jd2[i].Answer14, jd2[i].Result14]);
                       if(m < jd2[i].Result14){
						   m = jd2[i].Result14+1;
					   }
                   }
                   if(jd2[i].Answer15 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer15 + '</td><td>' +jd2[i].Result15+ '</td></tr>')
                       line1.push([jd2[i].Answer15, jd2[i].Result15]);
                       if(m < jd2[i].Result15){
						   m = jd2[i].Result15+1;
					   }
                   }
                   if(jd2[i].Answer16 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer16 + '</td><td>' +jd2[i].Result16+ '</td></tr>')
                       line1.push([jd2[i].Answer16, jd2[i].Result16]);
                       if(m < jd2[i].Result16){
						   m = jd2[i].Result16+1;
					   }
                   }
                   if(jd2[i].Answer17 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer17 + '</td><td>' +jd2[i].Result17+ '</td></tr>')
                       line1.push([jd2[i].Answer17, jd2[i].Result17]);
                       if(m < jd2[i].Result17){
						   m = jd2[i].Result17+1;
					   }
                   }
                   if(jd2[i].Answer18 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer18 + '</td><td>' +jd2[i].Result18+ '</td></tr>')
                       line1.push([jd2[i].Answer18, jd2[i].Result18]);
                       if(m < jd2[i].Result18){
						   m = jd2[i].Result18+1;
					   }
                   }
                   if(jd2[i].Answer19 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer19 + '</td><td>' +jd2[i].Result19+ '</td></tr>')
                       line1.push([jd2[i].Answer19, jd2[i].Result19]);
                       if(m < jd2[i].Result19){
						   m = jd2[i].Result19+1;
					   }
                   }
                   if(jd2[i].Answer20 != 0){
                       $('#table').append('<tr><td>' + jd2[i].Answer20 + '</td><td>' +jd2[i].Result20+ '</td></tr>')
                       line1.push([jd2[i].Answer20, jd2[i].Result20]);
                       if(m < jd2[i].Result20){
						   m = jd2[i].Result20+1;
					   }
                   }
                   
               });
            });
        });
    });
    
    $(document).ready(function(){
         $("#driver").click(function() {
			 
            $('#chart1').html('');
            //$("#ui-widget-content").resizable();
            //$("#resizable").resizable();
			//$('#resizable').bind('resize', function(event, ui) {
			  //// pass in resetAxes: true option to get rid of old ticks and axis properties
			  //// which should be recomputed based on new plot size.
			  //plot.replot( { resetAxes: true } );
			//});
			
            plot = $('#chart1').jqplot([line1], {
				
                title: "Result of Poll",
                seriesDefaults:{
                    renderer:$.jqplot.BarRenderer,
                    rendererOptions: {
                        varyBarColor: true
                    },
                    
                },
                axes:{
                    xaxis:{
                        renderer: $.jqplot.CategoryAxisRenderer,
                    },
                    
                    yaxis: {
						min:0, max:m, 

						tickOptions: { 
							formatString: '%d' 
						} 
                    }
                }
            });
            
        });
    });

}());
    
    
