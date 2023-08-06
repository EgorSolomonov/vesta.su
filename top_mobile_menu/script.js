
window.onload = function(event) {

	var mass_search_click_menu = [] // список якорей с меню

	var elem_to_scrol_menu = document.getElementsByClassName('header_fixed_menu_item')

	for (var i = 0; i < elem_to_scrol_menu.length; i++) {
		if (elem_to_scrol_menu[i].dataset.href.indexOf('#') !== -1) {
			elem_to_scrol_menu[i].href = 'javascript:void(0);';
			elem_to_scrol_menu[i].id = elem_to_scrol_menu[i].dataset.href;
			mass_search_click_menu.push(elem_to_scrol_menu[i].dataset.href)
		}
	}


	for (var i = 0; i < mass_search_click_menu.length; i++) {

		var elem_to_scrol_menu_dsgs = document.getElementById(mass_search_click_menu[i])

		elem_to_scrol_menu_dsgs.onclick = function (e) {
			var vrem_id_hran = e.target.dataset.href.replace('#', '')
			var elem_to_scrol = document.getElementById(vrem_id_hran)
			if ((elem_to_scrol.getBoundingClientRect().top + pageYOffset) > elem_to_scrol.offsetHeight) {
				var otstup_block = (elem_to_scrol.getBoundingClientRect().top + pageYOffset) - ((window.screen.height - elem_to_scrol.offsetHeight) / 2)
			}
			window.scrollTo({top: otstup_block, behavior: 'smooth'})
		}
	}
}