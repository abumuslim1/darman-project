function testfunc(name) {
	const a = document.querySelectorAll(name);
	if (a.length == 1) {
		return(document.querySelector(name))
	}
	else{
		for (var i = 0; i < a.length; i++) {
		return(a);	
		}
	}
}

const close_btn_popup_catalog  = document.querySelector('.close-btn');
const product_item_open_popup = document.querySelectorAll('.product-item-btn');
let div ;
product_item_open_popup.forEach((item) =>{
	exit();
	console.log(item);
	item.addEventListener('click', function(e) {
		div = document.createElement('div');
		div.classList.add('product-item-popup-wrapper');
	const templ = `
	<div class="product-item-popup">
		<h2>Молоко пастеризованное 3,4%-4,5%</h2>
		<div class="flex-b-pop mt-4">
			<div class="product-item-popup-img">
		<div class="recommend-item">
				<div class="recommend-item-img">
					<img src="img/milssk.png" alt="">
				</div>
		</div>
			</div>
			<div class="row scroll-y">
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Наименование:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">Молоко питьевое пастеризованное «Дарман»</span>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Массовая доля жира:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">3,4%-4,5%</span>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Состав:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">молоко цельное, молоко обезжиренное</span>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Пищевая ценность:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">жиры – 3,4-4,5 г, белки – 3,0 г, углеводы – 4,7 г.</span>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Энергетическая ценность:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">257 кДж/61 ккал-297 кДж/71 ккал</span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Срок годности:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">17 суток</span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Условия хранения:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">при температуре (4±2) °С </span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Масса нетто:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">1900 г.</span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Стандарт качества:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">ГОСТ 31450-2013</span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Сертификаты соответствия:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">ГОСТ Р ИСО 22000-2007, стандарт «Халяль»</span><br>
				<b class="col-xl-6 col-lg-6 col-md-12 col-12">Тип упаковки:</b><span class="col-xl-6 col-lg-6 col-md-12 col-12">макси пак </span><br>
				<div class="but mt-3 give">
					<img src="img/shopping-cart.png" alt="">
					Заказать
				</div>
			</div>
		</div>
		<div class="close close-btn" onClick="close_popup()"></div>
	</div>`;
	div.innerHTML = templ;
document.querySelector('body').appendChild(div);
if (document.querySelector('.give')) {
	const btn = document.querySelector('.give');
	btn.addEventListener('click', function(e) {
		const el = document.createElement('div');
		el.classList.add('product-item-popup-wrapper');
		const templ = `<div class="popup-form-item fix-newd">
			<form action="" class="contacts-form-form">
				<h2 align="center">Заполните форму для заказа товара</h2>
				<input class="mt-lg-5 mt-xl-5" type="text" name="name" placeholder="Ваше имя">
				<input type="mail" name="mail" placeholder="Ваш email">
				<textarea type="text" name="message" placeholder="Ваше сообщение"></textarea>
				<button type="submit" class="but mt-lg-4 mt-xl-4">
				<div class="img-but">
					<img src="./img/paln.png" alt="">
				</div>
				<div class="link-but">
					Отправить сообщение
				</div>
				
				</button>
				
				
			</form>
			<div class="close close-btn" onClick="close_popup()"></div>
		</div>`;
		el.innerHTML = templ;
		testfunc('body').appendChild(el);

	});
}

});

})


function close_popup(){
	if (document.querySelector('.image-popup-wrapper')) {
	document.querySelector('.image-popup-wrapper').classList.remove('flex');
	}
	if (document.querySelector('.product-item-popup-wrapper')) {
	document.querySelectorAll('.product-item-popup-wrapper').forEach((it) =>{
		document.querySelector('body').removeChild(it);
	})
	}
	else {
		return;
	}
}
window.addEventListener('load', function(e) {
	if (document.querySelector('.wrapper')) {
	const sld = document.querySelector('.wrapper').offsetWidth ;
	document.querySelectorAll('.slider-item').forEach((it) =>{
		it.style.width = sld + 'px';
	});
	}
	if (document.querySelector('.ad-slider')) {
		const w = testfunc('.ad-slider').offsetWidth;
	document.querySelectorAll('.ad-slider-item').forEach((it) =>{
		if (testfunc('body').offsetWidth < 992) {
			it.style.width = w + 'px';
		}
		else{
			it.style.width = w / 3 - 40 + 'px';
		}
	})
	document.querySelectorAll('.material-dwn-slider-item').forEach((it) =>{
		it.style.width = w + 'px';
	})	}
	if (document.querySelector('.material-dwn-slider')) {
		const w = testfunc('.material-dwn-slider').offsetWidth;
	document.querySelectorAll('.material-dwn-slider-item').forEach((it) =>{
		if (testfunc('body').offsetWidth < 992) {
			it.style.width = w + 'px';
		}
		else{
			it.style.width = w / 3 - 40 + 'px';
		}
	})
	}
	if (document.querySelector('.production-slider-items')) {
	let item = document.querySelector('.production-slider-items').offsetWidth + 35;
	let el = document.querySelectorAll('.production-slider-items').length;
	let wrapper = document.querySelector('.production-slider-wrapper');
	let wrapperWidth = wrapper.offsetWidth;
	let sub = Math.round(wrapperWidth / item);
	let al = el - (el - sub);
	wrapper.style.width = item * al -1 + 'px';
	document.querySelector('.production-slider-items').classList.add('prod-active')
	}
	if (testfunc('body').offsetWidth > 769) {
	if (document.querySelector('.recommend-item')) {
	let item = document.querySelector('.recommend-item').offsetWidth + 45;
	let el = document.querySelectorAll('.recommend-item').length;
	let wrapper = document.querySelector('.recommend-items');
	let wrapperWidth = wrapper.offsetWidth;
	let sub = Math.round(testfunc('body').offsetWidth / item);
	let al = el - (el - sub);
	if (item * al > testfunc('body').offsetWidth) {
		console.log(testfunc('body').offsetWidth + 'px');
		wrapper.style.width = testfunc('body').offsetWidth -20  + 'px';
	}
	else{
	wrapper.style.width = item * al + 'px';
	console.log('anall');
	}
	}
	}
if (document.querySelector('.geo-slider-item')) {
	document.querySelectorAll('.geo-slider-item')[0].classList.add('active');
	}
});
window.addEventListener('resize', function(e) {
	console.log(e);
	if (document.querySelector('.image-popup-item')) {
	document.querySelectorAll('.image-popup-item').forEach((it) =>{
			it.children[0].setAttribute('style',`width:testfunc{document.querySelector('.image-popup-wrapper-main').offsetWidth}px`);
		})
	}
	if (document.querySelector('.wrapper')) {
	const sld = document.querySelector('.wrapper').offsetWidth;
	document.querySelectorAll('.slider-item').forEach((it) =>{
		it.style.width = sld + 'px';
	});
	}
	if (document.querySelector('.ad-slider')) {
		const w = testfunc('.ad-slider').offsetWidth;
	document.querySelectorAll('.ad-slider-item').forEach((it) =>{
		if (testfunc('body').offsetWidth < 992) {
			it.style.width = w + 'px';
		}
		else{
			it.style.width = w / 3 - 40 + 'px';
		}
	})
	document.querySelectorAll('.material-dwn-slider-item').forEach((it) =>{
		it.style.width = w + 'px';
	})	}
	if (document.querySelector('.material-dwn-slider')) {
		const w = testfunc('.material-dwn-slider').offsetWidth;
	document.querySelectorAll('.material-dwn-slider-item').forEach((it) =>{
		if (testfunc('body').offsetWidth < 992) {
			it.style.width = w + 'px';
		}
		else{
			it.style.width = w / 3 - 40 + 'px';
		}
	})
	}
});
if (document.querySelector('.burger')) {
const burger = document.querySelector('.burger');
burger.addEventListener('click', function(e) {
	if (burger.getAttribute('active') == 'off') {
		document.querySelector('.small-menu').style.top = '0';
		const divs = document.querySelectorAll('.burger div');
	for (var i = 0; i < divs.length; i++) {
		divs[0].style.transform = 'rotate(48deg) translate(10px)';
		divs[1].style.display ='none';
		divs[2].style.transform = 'rotate(311deg) translate(9px)';
		divs[0].style.background = '#000';
		divs[2].style.background = '#000';
	}
	burger.setAttribute('active','on');
	}
	else{
		document.querySelector('.small-menu').style.top = '-170vh';
	const divs = document.querySelectorAll('.burger div');
	for (var i = 0; i < divs.length; i++) {
		divs[0].style.transform = 'rotate(0) translate(0)';
		divs[1].style.display ='block';
		divs[2].style.transform = 'rotate(0) translate(0)';
		divs[0].style.background = '#fff';
		divs[2].style.background = '#fff';
	}
	burger.setAttribute('active','off');

	}
});
}
if (document.querySelector('.production-slider .prev')) {
const prodprev = document.querySelector('.production-slider .prev');
const prodnext = document.querySelector('.production-slider .next');
let a = 0;
prodprev.addEventListener('click', function(e) {
	const item = document.querySelector('.production-slider-items').offsetWidth + 35;
	const el = document.querySelectorAll('.production-slider-items').length;
	const wrapper = document.querySelector('.production-slider-wrapper');
	a--;
	if (a > el || a < 0) {
	a = 0;
	return;
}
	console.log(a);
	console.log(item);
	wrapper.scroll({
		top:0,
		left: item * a,
		behavior:'smooth'
	})
});
prodnext.addEventListener('click', function(e) {
	let item = document.querySelector('.production-slider-items').offsetWidth + 35;
	const el = document.querySelectorAll('.production-slider-items').length;
	const wrapper = document.querySelector('.production-slider-wrapper');
	const sub = Math.round(wrapper.offsetWidth / item);
	const qount = el - sub;
	a++;
	if (qount < a) {
		a = qount;
		return;
	}
	console.log(a);
	console.log(item * a);
	console.log(qount);
	console.log(wrapper);
	wrapper.scroll({
		top:0,
		left: item * a,
		behavior:'smooth'
	});
});
}
if (document.querySelector('.geo-prev')) {
const geop = document.querySelector('.geo-prev');
const geon = document.querySelector('.geo-next');
let b = 0;
geop.addEventListener('click', function(e) {
	let item = document.querySelector('.geo-slider-item').offsetWidth;
	const el = document.querySelectorAll('.geo-slider-item').length;
	const wrapper = document.querySelector('.geo-slider-items');
	b--;
	if (b > el || b < 0) {
	b = 0;
	return;
	}

	wrapper.scroll({
		top:0,
		left: item * b,
		behavior:'smooth'
	});
});
geon.addEventListener('click', function(e) {
	let item = document.querySelector('.geo-slider-item').offsetWidth;
	const el = document.querySelectorAll('.geo-slider-item').length;
	const wrapper = document.querySelector('.geo-slider-items');
	const sub = Math.round(wrapper.offsetWidth / item);
	const qount = el - sub;
	b++;
	if (qount < b) {
		b = qount;
		return;
	}
	wrapper.scroll({
		top:0,
		left: item * b,
		behavior:'smooth'
	});
});
if (document.querySelector('.geo-slider-item')) {
	const all = document.querySelectorAll('.geo-slider-item');
	for (var i = 0; i < all.length; i++) {
		all[i].addEventListener('click', function(e) {
			for (var i = 0; i < all.length; i++) {
				all[i].classList.remove('active');
			}
			e.target.classList.add('active');
			const contr = document.querySelector('.geo-country');
			if (e.target.getAttribute('data-country') == 'Махачкала') {
				contr.textContent = e.target.getAttribute('data-country') ;
				document.querySelectorAll('.map-item').forEach( function(element, index) {
					document.querySelector('.map-items').removeChild(element);
				});
				let f = 8;
				for (var i = 0; i < f; i++) {
					const div = document.createElement('div');
					div.classList.add('map-item');
					div.setAttribute('data-src',"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d382.65447458595224!2d47.51573289499165!3d42.96520916045215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea0ef7ed594c3%3A0x874c8d2e82568a34!2z0L_RgC4g0JPQsNC80LjQtNC-0LLQsCwgMjMsINCc0LDRhdCw0YfQutCw0LvQsCwg0KDQtdGB0L8uINCU0LDQs9C10YHRgtCw0L0sIDM2NzAxMw!5e0!3m2!1sru!2sru!4v1658915570230!5m2!1sru!2sru")
					const templ = `
						<div class="map-point cold1">Продуктовый павильон:</div>
						<div class="map-street cold-2">ул. Гамидова 23</div>
						<div class="map-ico cold3"><img src="img/path.png" alt=""></div>`;
					div.innerHTML = templ;
					document.querySelector('.map-items').appendChild(div);
				}
			}
			if (e.target.getAttribute('data-country') == 'Дербент') {
				contr.textContent = e.target.getAttribute('data-country') ;
				document.querySelectorAll('.map-item').forEach( function(element, index) {
					document.querySelector('.map-items').removeChild(element);
				});
				let f = 8;
				for (var i = 0; i < f; i++) {
					const div = document.createElement('div');
					div.classList.add('map-item');
					div.setAttribute('data-src',"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.926642312556!2d47.51638911509681!3d42.97981890372958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea08a0df7258d%3A0x8b07f1ce011ae2d8!2z0YPQuy4g0J_Rg9GI0LrQuNC90LAsIDIzLCDQnNCw0YXQsNGH0LrQsNC70LAsINCg0LXRgdC_LiDQlNCw0LPQtdGB0YLQsNC9LCAzNjcwMTM!5e0!3m2!1sru!2sru!4v1658915723692!5m2!1sru!2sru")
					const templ = `
						<div class="map-point cold1">Продуктовый павильон:</div>
						<div class="map-street cold-2">ул. Пушкина 23</div>
						<div class="map-ico cold3"><img src="img/path.png" alt=""></div>`;

					div.innerHTML = templ;
					document.querySelector('.map-items').appendChild(div);
				}
			}
			if (e.target.getAttribute('data-country') == 'Хасавюрт') {
				contr.textContent = e.target.getAttribute('data-country') ;
				document.querySelectorAll('.map-item').forEach( function(element, index) {
					document.querySelector('.map-items').removeChild(element);
				});
				let f = 8;
				for (var i = 0; i < f; i++) {
					const div = document.createElement('div');
					div.classList.add('map-item');
					div.setAttribute('data-src',"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2918.95170810661!2d47.48857231509671!3d42.9792909037635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x404ea045434fc1e9%3A0xd7e6f3bd9a436527!2z0YPQuy4g0J3QtdC60YDQsNGB0L7QstCwLCAyMywg0JzQsNGF0LDRh9C60LDQu9CwLCDQoNC10YHQvy4g0JTQsNCz0LXRgdGC0LDQvSwgMzY3MDA4!5e0!3m2!1sru!2sru!4v1658916144567!5m2!1sru!2sru");
					const templ = `
						<div class="map-point cold1">Продуктовый павильон:</div>
						<div class="map-street cold-2">ул. Некрасова 23</div>
						<div class="map-ico cold3"><img src="img/path.png" alt=""></div>`;
					div.innerHTML = templ;
					document.querySelector('.map-items').appendChild(div);
				}

			}
			if (document.querySelector('.map-ico img')) {
				document.querySelectorAll('.map-item').forEach((it) =>{
					it.addEventListener('click', function(e) {
						for (var i = 0; i < document.querySelectorAll('.map-ico img').length; i++) {
							document.querySelectorAll('.map-ico img')[i].setAttribute('src','img/path.png')
						}
						it.children[it.children.length - 1].children[0].setAttribute('src','img/ico-active.png');
						geoSetMap(it.getAttribute('data-src'));
						console.log(it.getAttribute('data-src'));
					});
				})
			window.addEventListener('load', function(e) {
				document.querySelector('.map-ico img').setAttribute('src','img/ico-active.png');
			});
			}

		});
	}
}
if (document.querySelector('.map-ico img')) {
				document.querySelectorAll('.map-item').forEach((it) =>{
					it.addEventListener('click', function(e) {
						for (var i = 0; i < document.querySelectorAll('.map-ico img').length; i++) {
							document.querySelectorAll('.map-ico img')[i].setAttribute('src','img/path.png')
						}
						console.log(it.children[it.children.length - 1]);
						it.children[it.children.length - 1].children[0].setAttribute('src','img/ico-active.png');
						geoSetMap(it.getAttribute('data-src'));
						console.log(it.getAttribute('data-src'));
					});
				})
			window.addEventListener('load', function(e) {
				document.querySelector('.map-ico img').setAttribute('src','img/ico-active.png');
			});
		}
}
function geoSetMap(src) {
	const el = document.querySelector('.geo-gelocate-map iframe');
	el.getAttribute('src');
	el.setAttribute('src',src);
}
if (document.querySelector('.main-prev')) {
	const len = testfunc('.slider-item').length;
	for (var i = 0; i < len; i++) {
		const div = document.createElement('div');
		div.classList.add('radius');
		document.querySelector('.radiuses').appendChild(div);
		document.querySelector('.radiuses').children[0].classList.add('radius-act')
	}
let c = 0;
	testfunc('.radius').forEach((it,id) =>{
		it.addEventListener('click', function(e) {
			let item = document.querySelector('.slider-item').offsetWidth;
			const el = document.querySelectorAll('.slider-item').length;
			testfunc('.radius').forEach((el) => {el.classList.remove('radius-act');})
			it.classList.add('radius-act');
			const wrapper = document.querySelector('.wrapper');
			c = id;
			if (c > el || c < 0) {
			c = 0;
			return;
			}
			console.log(c);
		wrapper.scroll({
		top:0,
		left: item * id,
		behavior:'smooth'
			});
		});
	})


const geopm = document.querySelector('.main-prev');
const geomn = document.querySelector('.main-next');
geopm.addEventListener('click', function(e) {
	let item = document.querySelector('.slider-item').offsetWidth;
	const el = document.querySelectorAll('.slider-item').length;
	const wrapper = document.querySelector('.wrapper');
	c--;
	if (c > el || c < 0) {
	c = 0;
	return;
	}

	wrapper.scroll({
		top:0,
		left: item * c,
		behavior:'smooth'
	});
	testfunc('.radius').forEach((el) => {el.classList.remove('radius-act');});
	document.querySelector('.radiuses').children[c].classList.add('radius-act');
});
geomn.addEventListener('click', function(e) {
	let item = document.querySelector('.slider-item').offsetWidth;
	const el = document.querySelectorAll('.slider-item').length;
	const wrapper = document.querySelector('.wrapper');
	c++;
	if (el - 1 < c) {
		c = el - 1;
		return;
	}
	wrapper.scroll({
		top:0,
		left: item * c,
		behavior:'smooth'
	});
	testfunc('.radius').forEach((el) => {el.classList.remove('radius-act');});
	document.querySelector('.radiuses').children[c].classList.add('radius-act');
});
}

if (document.querySelector('.ad-prev')) {
const adpm = document.querySelector('.ad-prev');
const admn = document.querySelector('.ad-next');
let v = 0;
adpm.addEventListener('click', function(e) {
	let item ;
	if (testfunc('body').offsetWidth < 992) {
		item = document.querySelector('.ad-slider-item').offsetWidth;
	}
	else{
		item = document.querySelector('.ad-slider-item').offsetWidth  + 40;
	}

	const el = document.querySelectorAll('.ad-slider-item').length;
	const wrapper = document.querySelector('.ad-slider');
	v--;
	if (v > el || v < 0) {
	v = 0;
	return;
	}
	wrapper.scroll({
		top:0,
		left: item * v,
		behavior:'smooth'
	});
});
admn.addEventListener('click', function(e) {
	let item ;
	if (testfunc('body').offsetWidth < 992) {
		item = document.querySelector('.ad-slider-item').offsetWidth;
	}
	else{
		item = document.querySelector('.ad-slider-item').offsetWidth  + 40;
	}

	const el = document.querySelectorAll('.material-dwn-slider-item').length;
	const wrapper = document.querySelector('.ad-slider');
	const sub = Math.round(wrapper.offsetWidth / item);
	const qount = el - sub;
	v++;
	if (qount < v) {
		v = qount;
		return;
	}

	wrapper.scroll({
		top:0,
		left: item * v,
		behavior:'smooth'
	});
});
}


if (document.querySelector('.material-prev')) {
const matpm = document.querySelector('.material-prev');
const matmn = document.querySelector('.material-next');
let r = 0;
matpm.addEventListener('click', function(e) {
	let item ;
	if (testfunc('body').offsetWidth < 992) {
		item = document.querySelector('.material-dwn-slider-item').offsetWidth;
	}
	else{
		item = document.querySelector('.material-dwn-slider-item').offsetWidth  + 40;
	}
	const el = document.querySelectorAll('.material-dwn-slider-item').length;
	const wrapper = document.querySelector('.material-dwn-slider');
	console.log(item);
	r--;
	if (r > el || r < 0) {
	r = 0;
	return;
	}
	wrapper.scroll({
		top:0,
		left: item * r,
		behavior:'smooth'
	});
});
matmn.addEventListener('click', function(e) {
	let item ;
	if (testfunc('body').offsetWidth < 992) {
		item = document.querySelector('.material-dwn-slider-item').offsetWidth;
	}
	else{
		item = document.querySelector('.material-dwn-slider-item').offsetWidth  + 40;
	}
	const el = document.querySelectorAll('.material-dwn-slider-item').length;
	const wrapper = document.querySelector('.material-dwn-slider');
	const sub = Math.round(wrapper.offsetWidth / item);
	const qount = el - sub;
	r++;
	if (qount < r) {
		r = qount;
		return;
	}

	wrapper.scroll({
		top:0,
		left: item * r,
		behavior:'smooth'
	});
});
}
if (document.querySelector('.production-slider-items')) {
	testfunc('.production-slider-items').forEach((it) =>{
		it.addEventListener('click', function(e) {
			for (var i = 0; i < testfunc('.production-slider-items').length; i++) {
				testfunc('.production-slider-items')[i].classList.remove('prod-active');
			}
			it.classList.add('prod-active');
			const name = it.getAttribute('dataname');
			rmAll();
			let a = 6;
			for (var i = 0; i < a; i++) {
				const div = document.createElement('div');
				div.classList.add('recommend-item');
				div.innerHTML = templ(name);
				testfunc('.recommend-items').appendChild(div);
			}
		});
	})
}
function rmAll(argument) {
	if (testfunc('.recommend-item')) {
	if (testfunc('.recommend-item').length > 0) {
	testfunc('.recommend-item').forEach((it) => {
		testfunc('.recommend-items').removeChild(it);
	})
	}
	else {
		testfunc('.recommend-items').removeChild(testfunc('.recommend-item'));
	}
	}
}
function templ(name) {
	if (name == 'milk') {
	return(`
				<div class="recommend-item-img">
					<img src="img/milssk.png" alt="">
				</div>
				<p>Молоко Цельное Отборное 6%</p>
			`)
	}
	if (name == 'bread') {
	return(`
				<div class="recommend-item-img">
					<img src="img/milssk.png" alt="">
				</div>
				<p>Масло Цельное Отборное 12%</p>
			`)
	}

}
if (document.querySelector('.about-main-block-img')) {
	document.querySelector('.about-main-block-img').addEventListener('click', function(e) {
		const div = document.querySelector('.image-popup-wrapper');
		div.classList.toggle('flex');
		document.querySelectorAll('.image-popup-item').forEach((it) =>{
			console.log(it);
			it.children[0].setAttribute('style',`width:testfunc{document.querySelector('.image-popup-wrapper-main').offsetWidth}px`);
		})

	});
}

if (document.querySelector('.popup-prev')) {
const matpm = document.querySelector('.popup-prev');
const matmn = document.querySelector('.popup-next');
let r = 0;
matpm.addEventListener('click', function(e) {
	const item = document.querySelector('.image-popup-item').offsetWidth  + 60;
	const el = document.querySelectorAll('.image-popup-item').length;
	const wrapper = document.querySelector('.image-popup-wrapper-main');
	console.log(item);
	r--;
	if (r > el || r < 0) {
	r = 0;
	return;
	}
	wrapper.scroll({
		top:0,
		left: item * r,
		behavior:'smooth'
	});
});
matmn.addEventListener('click', function(e) {
	const item = document.querySelector('.image-popup-item').offsetWidth + 60;
	const el = document.querySelectorAll('.image-popup-item').length;
	const wrapper = document.querySelector('.image-popup-wrapper-main');
	const sub = Math.round(wrapper.offsetWidth / item);
	const qount = el - sub;
	r++;
	if (qount < r) {
		r = qount;
		return;
	}
	console.log(item);
	wrapper.scroll({
		top:0,
		left: item * r,
		behavior:'smooth'
	});
});
}

//
// const langbtni = document.querySelectorAll('.act');
// langbtni.forEach((langbtn) =>{
//
// 	const coock = localStorage.getItem('lang');
// 	let unvisiblelang;
//
// 	if (coock) {
// 		langbtn.setAttribute('language',coock);
// 	}
// 	if (langbtn.getAttribute('language') == 'RU') {
// 		unvisiblelang = {class:'eng-l',text:'ENG'};
// 		langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>RU</p>
// 					<div class="sel-btn"></div>
// `;
// 	}
// 	if (langbtn.getAttribute('language') == 'ENG') {
// 		unvisiblelang = {class:'ru-l',text:'RU'};
// 		langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>ENG</p>
// 					<div class="sel-btn"></div>
// `;
// 	}
// 	if (langbtn.getAttribute('language') == 'RU' && langbtn.classList[2] == 'act-foot') {
// 		unvisiblelang = {class:'eng-l',text:'ENG'};
// 		langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>Руский язык</p>
// 					<div class="sel-btn"></div>
// `;
// 	}
// 	if (langbtn.getAttribute('language') == 'ENG' && langbtn.classList[2] == 'act-foot') {
// 		unvisiblelang = {class:'ru-l',text:'RU'};
// 		langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>Английский язык</p>
// 					<div class="sel-btn"></div>
// `;
// 	}
// 	langbtn.addEventListener('click', function(e) {
// 		if (langbtn.getAttribute('language') == 'RU') {
// 			unvisiblelang = {class:'eng-l',text:'ENG'};
// 		}
// 		if (langbtn.getAttribute('language') == 'ENG') {
// 			unvisiblelang = {class:'ru-l',text:'RU'};
// 		}
// 		if (langbtn.getAttribute('language') == 'RU' && langbtn.classList[2] == 'act-foot') {
// 			unvisiblelang = {class:'eng-l',text:'Английский язык'};
// 		}
// 		if (langbtn.getAttribute('language') == 'ENG' && langbtn.classList[2] == 'act-foot') {
// 			unvisiblelang = {class:'ru-l',text:'Руский язык'};
// 		}
//
// 		testfunc('.languages').forEach((it) => {it.classList.toggle('block');it.innerHTML = `<div class="testfunc{unvisiblelang.class} fle"><img src="img/languaage.svg" alt=""><span>testfunc{unvisiblelang.text}</span></div>`})
// 		if (testfunc('.eng-l')) {
// 			testfunc('.eng-l').forEach((it) =>{
// 				it.addEventListener('click', function(e) {
// 					langbtn.setAttribute('language','ENG');
// 					localStorage.setItem('lang','ENG')
// 					testfunc('.languages').forEach((it) => {it.classList.remove('block');})
// 					if (langbtn.getAttribute('language') == 'ENG') {
// 						langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>ENG</p>
// 					<div class="sel-btn"></div>
// 			`;
// 					}
// 					if (langbtn.getAttribute('language') == 'ENG' && langbtn.classList[2] == 'act-foot') {
// 						langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>Английский язык</p>
// 					<div class="sel-btn"></div>
// 			`;
// 					}
// 				});
// 			})
// 		}
// 		if (testfunc('.ru-l')) {
// 			testfunc('.ru-l').forEach((it) =>{
// 				it.addEventListener('click', function(e) {
// 					langbtn.setAttribute('language','RU');
// 					localStorage.setItem('lang','RU')
// 					testfunc('.languages').forEach((it) => {it.classList.remove('block');})
// 					if (langbtn.getAttribute('language') == 'RU') {
// 						langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>RU</p>
// 					<div class="sel-btn"></div>
// 				`;
// 					}
// 					if (langbtn.getAttribute('language') == 'RU' && langbtn.classList[2] == 'act-foot') {
// 						langbtn.innerHTML = `<img src="img/languaage.svg" alt="">
// 					<p>Руский язык</p>
// 					<div class="sel-btn"></div>
// 				`;
// 					}
// 				});
// 			})
// 		}
// 	});
//
// });
//
//
//
//
//




