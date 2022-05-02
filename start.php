<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<title>Movie</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<!-- CSS only -->
  
	<style>
	[data-pagination],
[data-pagination] *,
[data-pagination] *:before,
[data-pagination] *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-kerning: auto;
}
[data-pagination] {
  font-size: 8pt;
  line-height: 1;
  font-weight: 400;
  font-family: 'Open Sans', 'Source Sans Pro', Roboto, 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', 'Myriad Pro', 'Segoe UI', Myriad, Helvetica, 'Lucida Grande', 'DejaVu Sans Condensed', 'Liberation Sans', 'Nimbus Sans L', Tahoma, Geneva, Arial, sans-serif;
  -webkit-text-size-adjust: 100%;
  margin: 1em auto;
  text-align: center;
  transition: font-size .2s ease-in-out;
  
}
[data-pagination] ul {
  list-style-type: none;
  display: inline;
  font-size: 100%;
  margin-top:100px;
  padding: .5em;
}
[data-pagination] ul li {
  display: inline-block;
  font-size: 100%;
  width: auto;
  border-radius: 3px;
}
[data-pagination] > a {
  font-size: 140%;
}
[data-pagination] a {
  color: #777;
  font-size: 100%;
  padding: .5em;
}
[data-pagination] a:focus,
[data-pagination] a:hover {
  color: #f60;
}
[data-pagination] li.current {
  background: rgba(0,0,0,.1)
}
/* Disabled & Hidden Styles */
[data-pagination] .disabled,
[data-pagination] [hidden],
[data-pagination] [disabled] {
  opacity: .5;
  pointer-events: none;
}
@media (min-width: 350px) {
  [data-pagination] {
    font-size: 10pt;
  }
}
@media (min-width: 500px) {
  [data-pagination] {
    font-size: 12pt;
  }
}
@media (min-width: 700px) {
  [data-pagination] {
    font-size: 14pt;
  }
}
@media (min-width: 900px) {
  [data-pagination] {
    font-size: 16pt;
  }
}

input.nosubmit {
  width: 260px;
  border: 1px solid #555;
  display: block;
  padding: 9px 4px 9px 40px;
  background: white url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat 13px center;
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}


.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

ul{
margin-top: 0px;
color: #000;
}
li{
padding: 5px;
cursor: pointer;
color: black;
}
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;

}
</style>

</head>
<body>