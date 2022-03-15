function submitForm(){
	jQuery('#contactForm').on('submit', function(e){
		jQuery.ajax({
			url:'submit.php',
			type:'post',
			data:jQuery('#contactForm').serialize(),
			success:function(result){
				alert(result);
			}
		});
		e.preventDefault();
	});
}