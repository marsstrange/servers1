//await ждет возвращения Promise от функции

async function getPosts() {
	let res = await fetch('http://localhost/files/news/index.php/posts');
	let posts = await res.json();


	posts.forEach((post) => {
		if (post['id'] % 2 == 1) {

			/*.all-news — место в html, куда нужно вставить скрипт*/
			document.querySelector('.all-news').innerHTML += `
			<div class="news-wrapper">
				<a href="" class="product">
					<div class="product-photo">
						<img src="${post.pic}" alt="Avatar" style="width:100%">
					</div>
					<p><i class="cards-date">${post.p_date}</i></p>
					<p><b class="cards-text">${post.title}</b></p>
										
				</a>

			</div>

			`
		}

		else {
			document.querySelector('.all-news').innerHTML += `
			<div class="news-wrapper">
				<a href="" class="product-1" position="top:">
					<div class="product-1-photo">
						<img src="${post.pic}" alt="Avatar" style="width:100%">
					</div>
						<p><i class="cards-date">${post.p_date}</i></p>
						<p><b class="cards-text">${post.title}</b></p>
				</a>

			</div>
							

			`

		}
		
	})
}

getPosts();