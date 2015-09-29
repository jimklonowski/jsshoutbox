$(document).ready(function(){
	$('#submit').on('click', function(){
		//Get the input
		var name = $('#name').val();
		var shout = $('#shout').val();
		var date = getDate();
		var dataString = 'name='+name+'&shout='+shout+'&date='+date;

		//Validation
		if(name == '' || shout == ''){
			alert('Please fill in all fields.');
		}else{
			$.ajax({
				type:"POST",
				url:"../jsshoutbox/shoutbox.php",
				data:dataString,
				cache:false,
				//on success, run this function to insert html without requiring refresh
				success:function(html){
					$('#shouts ul').prepend(html);
				}
			});
		}
		return false;
	});
});


//Format date like MySQL data
function getDate(){
	var date = new Date();
	date = date.getUTCFullYear()+'-'+
		('00'+(date.getUTCMonth() + 1)).slice(-2)+'-'+
		('00'+date.getUTCDate()).slice(-2)+' '+
		('00'+date.getUTCHours()).slice(-2)+':'+
		('00'+date.getUTCMinutes()).slice(-2)+':'+
		('00'+date.getUTCSeconds()).slice(-2);
		return date;
}