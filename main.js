middle = document.querySelector('.middle');

var show = document.querySelector('.open');
show.addEventListener("click", function(event){
	event.preventDefault();

	var modal = document.querySelector('.middle')
	modal.classList.add('show');

	var close = document.querySelector('.open');
	close.addEventListener("click", function(event){
		event.preventDefault();

		var modal = document.querySelector('.middle')
		modal.classList.remove('show');
	});
});
