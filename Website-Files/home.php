<!DOCTYPE html>
<html>
<div class="container1" style="margin-bottom: 14em;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
            body {
 
            }
            #banner {
                position: absolute;
                top: 0px;
                left: 0px;
                right: 0px;
                width: 100%;
                height: 200px;
                z-index: -1;
            }
        </style>
    </head>
    <body>
        <img id="banner" src="banner.png" alt="Banner Image"/>
	<p align="right">
	<input type="button" name="Login" value="Login" style="height:25px">
	<input type="button" name="Register" value="Register" style="height:25px">
	</p>
    </body>
</div>

<div>
<style>
	a {
		color: black;
	}
	ul {
		border: 1px solid black;
		float: left;
		padding: 0;
		margin: 0;
		width: 70px;
		background: #ccc;
	}
	li {

		float: left;
		display: inline;
		position: relative;
		list-style: none;
	}
	ul ul {
		position: absolute;
		left: 0;
		top: 100%;
		background: #ccc;
		display: none;
	}
	ul ul ul {
		border: 1px solid black;
		left: 100%;
		top: 0;
		background: #ccc;
	}
	li:hover > ul {
		display: block;
	}
	
	p {
		clear: left;
		padding-top: 1em;
	}
</style>
<ul>
	<li>
	<a href="">All Movies</a>
	<ul>
		<li><a href="">Movies</a></li>
		<li><a href="">TV Shows</a></li>
		<li><a href="">Editor Choice</a></li>
		<li><a href="">Top Sellers</a></li>
		<li><a href="">Top Rated</a></li>
		<li><a href="">New Arrivals</a></li>
		<li>
		<a href="">Award Winners</a>
		<ul>
			<li><a href="">Academy Award</a></li>
			<li><a href="">Grammy</a></li>
			<li><a href="">Emmy</a></li>
			<li><a href="">Tony</a></li>
		</ul>
		</li>
		<li>
		<a href="">Genres</a>
		<ul>
			<li><a href="">Comedy</a></li>
			<li><a href="">Horror</a></li>
			<li><a href="">Adventure</a></li>
			<li><a href="">Animated</a></li>
			<li><a href="">Children</a></li>
			<li><a href="">Documentary</a></li>
			<li><a href="">Drama</a></li>
			<li><a href="">Romance</a></li>
			<li><a href="">Sci-Fi</a></li>
		</ul>
		</li>
		<li>
		<a href="">Studios</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Years</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Actor</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Actress</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
		<li>
		<a href="">Medium</a>
		<ul>
			<li><a href="">None</a></li>
		</ul>
		</li>
	</ul>
	</li>
</div>
  <input type="text" name="firstname" value="Search" style="font-size:18pt;height:25px;width:1000px;"><input type="button" value="Search" style="height:30px;" />
</p>
</div>
<div>	
<input type="button" name="All" value="All" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('All')"/>
<input type="button" name="Movies" value="Movies" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Movies')"/>
<input type="button" name="TV Shows" value="TV Shows" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('TV Shows')"/>
<input type="button" name="Editor Choice" value="Editor Choice" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Editor Choice')"/>
<input type="button" name="Top Sellers" value="Top Sellers" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Top Sellers')"/>
<input type="button" name="Top Rated" value="Top Rated" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Top Rated')"/>
<input type="button" name="New Arrivals" value="New Arrivals" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('New Arrivals')"/>
<input type="button" name="Academy Award" value="Academy Award" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Academy Award')"/>
<input type="button" name="Grammy" value="Grammy" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Grammy')"/>
<input type="button" name="Emmy" value="Emmy" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Emmy')"/>
<input type="button" name="Comedy" value="Comedy" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Comedy')" />
<input type="button" name="Horror" value="Horror" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Horror')"/>
<input type="button" name="Adventure" value="Adventure" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Adventure')"/>
<input type="button" name="Animated" value="Animated" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Animated')"/>
<input type="button" name="Children" value="Children" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Children')"/>
<input type="button" name="Documentary" value="Documentary" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Documentary')"/>
<input type="button" name="Drama" value="Drama" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Drama')"/>
<input type="button" name="Romance" value="Romance" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Romance')"/>
<input type="button" name="Sc-Fi" value="Sc-Fi" style="height:250px;width:250px;background-color: red;color:white;font-size: 40px;white-space: normal;" onclick="openNew('Sc-Fi')"/>
</div>

<div>
<footer>
  <p><font size="2px"> Site created by HelloWord </font></p>
  <p><font size="2px"> Contact information: <a href="mailto:support@helloword.com">
  support@helloworld.com</a>.</font></p>
</footer>
</div>
<script>
function openNew(cat) {
     document.location.href = 'search.php?cat=' + cat;
}
</script>
</html>