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