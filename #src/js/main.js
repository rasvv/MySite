const menuitems = document.querySelectorAll('.header__item')

const clearActiveClasses = () => {
	menuitems.forEach((item) => {
		item.classList.remove('active') 
	})
}

menuitems.forEach((item) => {
	item.addEventListener('click', () => {
		clearActiveClasses()
		item.classList.add('active')
	})
})
