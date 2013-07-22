$(document).ready(function() {
	  $('#menu_bg1').hover(function() {
		 $('.dropWrapper1').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper1').addClass('hidden');
	  });
	  
	  $('#menu_bg2').hover(function() {
		 $('.dropWrapper2').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper2').addClass('hidden');
	  });
	  
	    $('#menu_bg3').hover(function() {
		 $('.dropWrapper3').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper3').addClass('hidden');
	  });
	  
	  $('.dropWrapper1').hover(function() {
		 $('.dropWrapper1').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper1').addClass('hidden');
	  });
	  
	   $('.dropWrapper2').hover(function() {
		 $('.dropWrapper2').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper2').addClass('hidden');
	  });
	   $('.dropWrapper3').hover(function() {
		 $('.dropWrapper3').removeClass('hidden');
	  }, function() {
		 $('.dropWrapper3').addClass('hidden');
	  });
	  
	  
	  $('.submenuwrapper1').hover(function() {
		 $('.submenuwrapper1').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper1').removeClass('submenuhover');
	  });
	  
	  $('.submenuwrapper2').hover(function() {
		 $('.submenuwrapper2').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper2').removeClass('submenuhover');
	  });
	  
	  $('.submenuwrapper3').hover(function() {
		 $('.submenuwrapper3').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper3').removeClass('submenuhover');
	  });
	  
	   $('.submenuwrapper4').hover(function() {
		 $('.submenuwrapper4').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper4').removeClass('submenuhover');
	  });
	  
	  $('.submenuwrapper5').hover(function() {
		 $('.submenuwrapper5').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper5').removeClass('submenuhover');
	  });
	  
	  $('.submenuwrapper6').hover(function() {
		 $('.submenuwrapper6').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper6').removeClass('submenuhover');
	  });
		  $('.submenuwrapper7').hover(function() {
		 $('.submenuwrapper7').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper7').removeClass('submenuhover');
	  });
	  
	  $('.submenuwrapper8').hover(function() {
		 $('.submenuwrapper8').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper8').removeClass('submenuhover');
	  });  
	  
	    $('.submenuwrapper9').hover(function() {
		 $('.submenuwrapper9').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper9').removeClass('submenuhover');
	  }); 
	    $('.submenuwrapper10').hover(function() {
		 $('.submenuwrapper10').addClass('submenuhover');
	  }, function() {
		 $('.submenuwrapper10').removeClass('submenuhover');
	  }); 
	  $('#StBttn1').click(function() {
		$('.color_18').html('About Us');
		$('#WRchTxt9').html('<p><span class="font_8">I\'m a paragraph. Click here to add your own text and edit me. It\'s easy. Just click "Edit Text" or double click me and you can start adding your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I\'m a great place for you to tell a story and let your users know a little more about you.<br><br>This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide. Tell your visitors the story of how you came up with the idea for your business and what makes you different from your competitors. Make your company stand out and show your visitors who you are. Tip: Add your own image by double clicking the image and clicking Change Imag</span></p>');
	  });
	  
	  $('.submenuwrapper1').click(function() {
			$('.color_18').html('Vision & Mission');
			$('#WRchTxt9').html('Vision & Mission');
	  });
		$('#StBttn2').click(function() {
			$('.color_18').html('Vision & Mission');
		    $('#WRchTxt9').html('Vision & Mission');
		});
		
		$('.submenuwrapper2').click(function() {
			$('.color_18').html('Our Services');
			$('#WRchTxt9').html('Our Services');
	  });
		$('#StBttn3').click(function() {
			$('.color_18').html('Our Services');
			$('#WRchTxt9').html('Our Services');
		});
		$('.submenuwrapper3').click(function() {
			$('.color_18').html('FAQs');
			$('#WRchTxt9').html('FAQs');
	    });
		$('#StBttn4').click(function() {
			$('.color_18').html('FAQs');
			$('#WRchTxt9').html('FAQs');
		});
		$('.submenuwrapper4').click(function() {
			$('.color_18').html('Income');
			$('#WRchTxt9').html('Income');
	    });
	  	$('.submenuwrapper5').click(function() {
			$('.color_18').html('Expenses');
			$('#WRchTxt9').html('Expenses');
	    });
	  
		$('.actionTitle').click(function(e) {
			$('.c-wrapper').dialog('open');
			e.preventDefault();
			return false;
		});

		$('.c-wrapper').dialog({
			autoOpen: false,
			modal: true,
			resizable: false,
			draggable: false
		});
		
		$('#loginBtn').click(function(e) {
			$('#loginform').removeClass('hidden');
			$('#registerform').addClass('hidden');
		});

		$('#registerBtn').click(function(e) {
			$('#registerform').removeClass('hidden');
			$('#loginform').addClass('hidden');
		});
		
		$('#lnForm').submit(function() {
			$.ajax({
				type: "POST",
				url: 'login.php',
				data: {
					email: $("#lnemail").val(),
					login: 'yes',
					password: $("#lnpassword").val()
				},
				success: function(data)
				{
					if (data == 0) {
						alert('Log In Successfully');
						$("#lnemail").val("");
						$("#lnpassword").val("");
						$('.c-wrapper').dialog('close');
						 window.location.href="index.php";
					}
					else {
						alert('Invalid Credentials');
					}
				}

			});
			return false;
		});
		
		$('#rgForm').submit(function() {
		
			$.ajax({
				type: "POST",
				url: 'login.php',
				data: {
					register: 'yes',
					email: $("#rgemail").val(),
					race: $("input[name='rgrace']:checked").val(),
					name: $("#rgname").val(),
					password: $("#rgpassword").val()
				},
				success: function(data)
				{
						$("#rgemail").val("");
						$("#rgrace").val("");
						$("#rgpassword").val("");
						$("#rgname").val("");
						alert('Register Successfully, you may now login.');
						$('#loginform').removeClass('hidden');
						$('#registerform').addClass('hidden');
					
				}
			});
			return false;
		});
	});