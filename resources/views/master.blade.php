@extends('layout.mainLayout')
@section('pageContent')
	<div class="wrapper">
		<div class="left">
			<div class="search">
			 	<form action="#" id="searchPosts">
			 		<div class="form-group">
			 			<input type="text" class="form-control" name="searchPost" placeholder="Search Post">
			 			<button class="btn btn-sm btn-primary"  id="searchPost">search post</button>
			 		</div>
			 	</form>
			</div>
			<div class="sidePostLink">
				<div class="postLinkLayout">
					<a href="/" class="postLinkTitle">Post number 1</a>
					<span class="postLinkLayoutTime">
						<small>2019-10-21</small>
					</span>
				</div>
				<div class="postLinkLayout">
					<a href="/" class="postLinkTitle">Post number 2</a>
					<span class="postLinkLayoutTime">
						<small>2019-10-21</small>
					</span>
				</div>
				<div class="postLinkLayout">
					<a href="/" class="postLinkTitle">Post number 3</a>
					<span class="postLinkLayoutTime">
						<small>2019-10-21</small>
					</span>
				</div>
				<div class="postLinkLayout">
					<a href="/" class="postLinkTitle">Post number 4</a>
					<span class="postLinkLayoutTime">
						<small>2019-10-21</small>
					</span>
				</div>
				<div class="postLinkLayout">
					<a href="/" class="postLinkTitle">Post number 5</a>
					<span class="postLinkLayoutTime">
						<small>2019-10-21</small>
					</span>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="postLayout">
				<div class="upperArea">
					<div class="heading">
						<h4>Lorem ipsum dolor sit amet.</h4>
					</div>
					<div class="posterArea">
						<div class="posterImage">
							<img src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-9/58571075_1223973651099371_1076724996614651904_n.jpg?_nc_cat=109&_nc_ht=scontent.fktm8-1.fna&oh=5efcf165f24624f7a7ee75b063cb9b12&oe=5D6F92DA" alt="">
						</div>
						<div class="posterName">
							<span>
								sandesh Pokharel
							</span>
							<span class="posterEmail">
								<a href="/">saandesh32@gmail.com</a>
							</span>
						</div>
					</div>
				</div>
				<div class="postImage">
					<img src="https://images.unsplash.com/photo-1557264351-1de591f88634?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjF9&auto=format&fit=crop&w=1950&q=80" alt="">
				</div>
				<div class="postBody">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempora architecto sit a repellat dignissimos consequatur mollitia qui consequuntur, recusandae numquam, voluptate maiores non cumque!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quaerat, eius, consectetur nostrum numquam impedit!</p>
				</div>
				<div class="postedDate">
					<small>2019-10-19</small>
				</div>
			</div>
			<div class="postLayout">
				<div class="upperArea">
					<div class="heading">
						<h4>Lorem ipsum dolor sit amet.</h4>
					</div>
					<div class="posterArea">
						<div class="posterImage">
							<img src="https://scontent.fktm8-1.fna.fbcdn.net/v/t1.0-9/35431337_1888402384559714_4317400395518312448_n.jpg?_nc_cat=105&_nc_ht=scontent.fktm8-1.fna&oh=ea7e480f22885ddd7f49338498eb0663&oe=5D603990" alt="">
						</div>
						<div class="posterName">
							<span>
								jeevan karki
							</span>
							<span class="posterEmail">
								<a href="/">jeevanKarki@gmail.com</a>
							</span>
						</div>
					</div>
				</div>
				<div class="postImage">
					<img src="https://images.unsplash.com/photo-1556998897-30cb5fc5fac6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
				</div>
				<div class="postBody">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis tempora architecto sit a repellat dignissimos consequatur mollitia qui consequuntur, recusandae numquam, voluptate maiores non cumque!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et quaerat, eius, consectetur nostrum numquam impedit!</p>
				</div>
				<div class="postedDate">
					<small>2019-10-19</small>
				</div>
			</div>
		</div>
	</div>
@endsection