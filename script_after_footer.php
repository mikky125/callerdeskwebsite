<script>
function ValidateEmail(mail) 
{
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(mail.match(mailformat)){
		return true;
	}
	return false;
}

$("#talktoexpert_btn").click(function (e){
	var email = $("#contact_email").val();
	var name = $("#name").val();
	var phone = $("#contact").val();
	if(ValidateEmail(email) && name !='' && phone !=''){
		$.ajax({url: "ajax_talk_to_expert.php", type:'POST', data:{'email' : email, 'name' : name,'phone' : phone}, success: function(result){
		$("#tte_message").html(result);
	  }});
	}
	else{
		$("#tte_message").val("Invalid Data");
	}
});

$("#subscribe_newsletter").click(function (e){
	var email = $("#subscriber_email").val();
	if(ValidateEmail(email)){
		$.ajax({url: "ajax_newsletter.php", type:'POST', data:{'email' : email}, success: function(result){
		$("#subscribe_message").html(result);
	  }});
	}
	else{
		$("#subscribe_message").val("Invalid Email Id");
	}
}); 
</script>