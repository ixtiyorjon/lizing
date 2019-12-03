$('#calculation').click(function(){
	var muddat = $('#muddat').val();
	var yillik_foiz = $('#yillik_foiz').val();
	var avans = $('#avans').val();
	var tex_narxi = $('#tex_narxi').val();
	var avans_summ = $('#avans_summ').val();
	var datetime = $('#datetime').val();

	if (tex_narxi=='') {
		console.log('tanlanmadi');
		return false;
	}
	else{
		$('#exportBtn').css('display','block');
		$('#clearCalc').css('display','block');
		var s = HomeCalc(datetime,muddat,tex_narxi,avans,avans_summ);
	}

	$('#t_body').html(s);
});

function HomeCalc(datetime,data,tex_narxi,avans,avans_summ) {
	var month = data * 12;
	var payment = ThreePonthPayment(month,tex_narxi,avans,avans_summ);

	var value = '', j = 1, qoldiqSumma = 0, marja = 0, asosiyQarz = 0, summ = 0, allMarja=0, allasosiyQarz=0, payments=0;

	for (var i = 1; i <= month; i++) {

		if (i%3==0) {
			
			qoldiqSumma = sumFunction(j,tex_narxi,avans_summ,qoldiqSumma,asosiyQarz);
			marja = marjaFunction(qoldiqSumma,avans);
			asosiyQarz = DebtFunction(marja,payment);

			value += '<tr><td scope="row">'+ j +'</td><td>'+ dateFunction(i,datetime) +'</td><td>'+qoldiqSumma.toLocaleString() +' </td><td>'+ asosiyQarz.toLocaleString() +'</td><td>'+ marja.toLocaleString() +'</td><td>'+payment.toLocaleString()+'</td></tr>';

			summ+=qoldiqSumma; allMarja+=marja; allasosiyQarz+=asosiyQarz; payments+=payment; j++;
		}
	}
	value += '<tr><td scope="row">ИТОГ </td><td></td><td>'+summ.toLocaleString() +' </td><td>'+allasosiyQarz.toLocaleString() +'  </td><td>'+allMarja.toLocaleString() +' </td><td>'+payments.toLocaleString() +' </td></tr>';

	return value;
}

function sumFunction(i,tex_narxi,avans_summ,qoldiqSumma,asosiyQarz){
	var val=0;
	if (i==1) {
		val = tex_narxi-avans_summ;
	}else{
		val = qoldiqSumma-asosiyQarz;
	}
	return Math.round(val);
}

function dateFunction(monthNumber,datetime){
	const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

	var date = (datetime!='') ? new Date(datetime) : new Date() ;

	var now = new Date(date.getFullYear(),date.getMonth()-1, date.getDate());

	now.setMonth(now.getMonth() + monthNumber);

	newData = new Date(now);
	return date.getDate() +' '+ monthNames[newData.getMonth()] + ' ' + newData.getFullYear();
}

function ThreePonthPayment(month,tex_narxi,avans,avans_summ){
	var one_pament_sum = tex_narxi - avans_summ;
	var one_pament_percent = avans / (100 * 4);
	var quarterly_payment = month / 3;

	var payment = one_pament_sum * (one_pament_percent+one_pament_percent/( Math.pow((1+one_pament_percent),quarterly_payment)-1));

	return Math.round(payment);
}

function marjaFunction(qoldiqSumma,avans){

	var one_pament_percent = avans / (100 * 4);

	var val = qoldiqSumma * one_pament_percent;
	return Math.round(val);
}

function DebtFunction(marja,payment){
	var val = payment-marja;
	return Math.round(val);
}


$('#clearCalc').click(function(){
	$('#exportBtn').css('display','none');
	$('#clearCalc').css('display','none');
	$('.category_id').val('') ;
	$('#texnics_id').val('') ;
	$('#delivery').val('') ;
	$('#datetime').val('') ;
	$('#muddat').val('') ;
	$('#yillik_foiz').val('') ;
	$('#avans').val('') ;
	$('#tex_narxi').val('') ;
	$('#avans_summ').val('') ;
	$('#datetime').val('') ;
	$('#t_body').html('');
});


function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('headerTable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}