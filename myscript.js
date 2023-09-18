$("#signupbtn").click( function() {
		  if( $("#username").val() == "" || $("#password").val() == "" )
			$("#ack").html("Hello World");
		  else
			$.post( $("#MyForm").attr("action"),
					$("#MyForm :input").serializeArray(),
					function(data) {
					$("#ack").html(data);
					}
			);
		 
		$("#MyForm").submit( function() {
			 return false;
		});
		});
		
		




$(document).ready(function(){
	$('#loginbtn').click(function() {
		var username = $('#username').val();
		var password = $('#password').val();
		
		if( username == "" || password == "")
			$("#ack").html("Hello World");
		else
			$.ajax({
				url: "login-check.php",
				method: "POST",
				data: {
					username: username,
					password: password,
				},
				cache: false,
				// success: function(data){
					$("body").load(home.php)
				// }
			});
	});
})

$(document).ready(function () {
  $("MyForm").submit(function (event) {
    var formData = {
      name: $("#name").val(),
      password: $("#password").val(),
    };

    $.ajax({
      type: "POST",
      url: "signup-check.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});

$(document).ready(function () {
			$("#signupbtn").click( function() {
			  if( $("#username").val() == "" || $("#password").val() == "" )
				$("#ack").html("Hello World");
			  else
				$("MyForm").submit(function () {
					var formData = {
					  name: $("#name").val(),
					  password: $("#password").val(),
					};

					$.ajax({
					  type: "POST",
					  url: "signup-check.php",
					  data: formData,
					  dataType: "json",
					  encode: true,
					})
					// .done(function (data) {
					  // $("#ack").html(data);
					// });

					// event.preventDefault();
				  });
			});
		});