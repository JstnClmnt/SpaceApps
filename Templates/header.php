<?php
	function initialize_header() {
		echo "<title>Template 1</title>";
		echo "<link rel='stylesheet' href='css/style.css'>";
		echo "<link rel='stylesheet' href='css/bootstrap.css'>";
		echo "<link rel='icon' type='image/x-icon' href='img/tab-logo.png'>";
		echo "<script src='https://code.jquery.com/jquery-3.3.1.min.js'></script>";
		echo "<script src='js/smoothscroll.js'></script>";
		echo "<script>";
		echo "$(document).ready(function(){";
		echo "	  $('a').on('click', function(event) {";
		echo "	    if (this.hash !== '') {";
		echo "	      event.preventDefault();";
		echo "	      var hash = this.hash;";
		echo "	      $('html, body').animate({";
		echo "	        scrollTop: $(hash).offset().top";
		echo "	      }, 800, function(){";
		echo "	        window.location.hash = hash;";
		echo "	      });";
		echo "	    }";
		echo "	  });";
		echo "	});";
		echo "</script>";
		echo "<script>";
		echo "	function forceNumeric(){";
		echo "		var $input = $(this);";
		echo "		$input.val($input.val().replace(/[^\d]+/g,''));";
		echo "	}";
		echo "	$('body').on('propertychange input', 'input[type='number']', forceNumeric);";
		echo "</script>";
		echo "<script>";
		echo "	$(document).ready(function() {";
		echo "	$('input[type=number]').on('focus', function() {";
		echo "	    $(this).on('keydown', function(event) {";
		echo "	        if (event.keyCode === 38 || event.keyCode === 40) {";
		echo "	            event.preventDefault();";
		echo "	        }";
		echo "	     });";
		echo "	   });";
		echo "	});";
		echo "</script>";
		echo "</head>";
		echo "<body>";
	}
?>