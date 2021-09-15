window.onscroll = function showHheader()  {
	var header = document.querySelector ('.header');

	if(window.pageYOffset > 200){
		header.classlist.add('header_fixed');
	}
}