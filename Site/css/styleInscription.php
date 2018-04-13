@font-face {
    font-family: 'FontomasCustomRegular';
    src: url('fonts/fontomas-webfont.eot');
    src: url('fonts/fontomas-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/fontomas-webfont.woff') format('woff'),
         url('fonts/fontomas-webfont.ttf') format('truetype'),
         url('fonts/fontomas-webfont.svg#FontomasCustomRegular') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'FranchiseRegular';
    src: url('fonts/franchise-bold-webfont.eot');
    src: url('fonts/franchise-bold-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/franchise-bold-webfont.woff') format('woff'),
         url('fonts/franchise-bold-webfont.ttf') format('truetype'),
         url('fonts/franchise-bold-webfont.svg#FranchiseRegular') format('svg');
    font-weight: normal;
    font-style: normal;}

#container{
	 text-align: left;
	 padding: 0;
	 margin: 10 auto;

}



a.hiddenanchor{
	display: none;
}

#wrapper{
	width: 60%;
	right: 0px;
	min-height: 550px;
	margin: 100px auto;
	width: 550px;
	position: relative;
}

#wrapper a{
	color: rgb(95, 155, 198);
	text-decoration: underline;
}

#wrapper h1{
	font-size: 40px;
	color: rgb(6, 106, 117);
	padding: 2px 0 10px 0;

	font-weight: bold;
	text-align: center;
	padding-bottom: 0px;
}

#wrapper h1{
    background: -webkit-repeating-linear-gradient(-45deg,
	#333 ,
	#333 20px,
	#555 20px,
	#555 40px,
	#333 40px);
	-webkit-text-fill-color: transparent;
	-webkit-background-clip: text;
}

#wrapper p{
	margin-bottom:15px;
}
#wrapper p:first-child{
	margin: 0px;
}
#wrapper label{
  font-size: 18px;
	color: #333;
	position: relative;
}


::-webkit-input-placeholder  {
	color: rgb(190, 188, 188);
	font-style: italic;
}
input:-moz-placeholder,
textarea:-moz-placeholder{
	color: rgb(190, 188, 188);
	font-style: italic;
}
input {
  outline: none;
}

/* Boites de saisie */
#wrapper input:not([type="checkbox"]){
	width: 90%;
	margin-top: 7px;
	padding: 13px 5px 13px 32px;
	border: 1px solid rgb(178, 178, 178);
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	  -moz-box-sizing : content-box;
	       box-sizing : content-box;
	-webkit-border-radius: 3px;
	   -moz-border-radius: 3px;
	        border-radius: 3px;
	-webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	   -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	        box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.6) inset;
	-webkit-transition: all 0.2s linear;
	   -moz-transition: all 0.2s linear;
	     -o-transition: all 0.2s linear;
	        transition: all 0.2s linear;
}
#wrapper input:not([type="checkbox"]):active,
#wrapper input:not([type="checkbox"]):focus{
	border: 1px solid rgba(91, 90, 90, 0.7);
	background: rgba(238, 236, 240, 0.2);
	-webkit-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
	   -moz-box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
	        box-shadow: 0px 1px 4px 0px rgba(168, 168, 168, 0.9) inset;
}

/* Icones boites de saisies */
[data-icon]:after {
    content: attr(data-icon);
    font-family: 'FontomasCustomRegular';
    color: rgb(255, 127, 42);
    position: absolute;
    left: -5px;
    top: 39px;
	width: 30px;
}

/* Boutons */
#wrapper p.button input{
	width: 35%;
	cursor: pointer;
	background: #333;
	padding: 8px 5px;
	font-family: 'HarryP','Arial Narrow',Arial,sans-serif;
	color: #fff;
	font-size: 24px;
	border: 1px solid rgb(28, 108, 122);
	margin-bottom: 0px;
	text-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
	-webkit-border-radius: 3px;
	   -moz-border-radius: 3px;
	        border-radius: 3px;
	-webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	        0px 0px 0px 3px rgb(254, 254, 254),
	        0px 5px 3px 3px rgb(210, 210, 210);
	   -moz-box-shadow:0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	        0px 0px 0px 3px rgb(254, 254, 254),
	        0px 5px 3px 3px rgb(210, 210, 210);
	        box-shadow:0px 1px 6px 4px rgba(0, 0, 0, 0.07) inset,
	        0px 0px 0px 3px rgb(254, 254, 254),
	        0px 5px 3px 3px rgb(210, 210, 210);
	-webkit-transition: all 0.2s linear;
	   -moz-transition: all 0.2s linear;
	     -o-transition: all 0.2s linear;
	        transition: all 0.2s linear;
}
#wrapper p.button input:hover{
	background: rgb(255, 127, 42);
	border: 1px solid rgb(255, 127, 42);
}
#wrapper p.button input:active,
#wrapper p.button input:focus{
	background: rgb(255, 127, 42);
	position: relative;
	top: 1px;
	border: 1px solid rgb(255, 127, 42);
	-webkit-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
	   -moz-box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
	        box-shadow: 0px 1px 6px 4px rgba(0, 0, 0, 0.2) inset;
}
p.login.button,
p.signin.button{
	text-align: right;
	margin: 0px 0;
  width: 350px;
}


p.change_link{
	position: absolute;
	color: #333;
  margin-top: 75px;
	left: 0px;
	height: 20px;
	width: 555px;
	padding: 17px 30px 20px 30px;
	font-size: 22px	;
	text-align: right;
	border-top: 1px solid rgb(219, 229, 232);
	-webkit-border-radius: 0 0  5px 5px;
	   -moz-border-radius: 0 0  5px 5px;
	        border-radius: 0 0  5px 5px;
	background: rgb(225, 234, 235);
	background: -moz-repeating-linear-gradient(-45deg,
	rgb(247, 247, 247) ,
	rgb(247, 247, 247) 15px,
	rgb(225, 234, 235) 15px,
	rgb(225, 234, 235) 30px,
	rgb(247, 247, 247) 30px
	);
	background: -webkit-repeating-linear-gradient(-45deg,
	rgb(247, 247, 247) ,
	rgb(247, 247, 247) 15px,
	rgb(225, 234, 235) 15px,
	rgb(225, 234, 235) 30px,
	rgb(247, 247, 247) 30px
	);
	background: -o-repeating-linear-gradient(-45deg,
	rgb(247, 247, 247) ,
	rgb(247, 247, 247) 15px,
	rgb(225, 234, 235) 15px,
	rgb(225, 234, 235) 30px,
	rgb(247, 247, 247) 30px
	);
	background: repeating-linear-gradient(-45deg,
	rgb(247, 247, 247) ,
	rgb(247, 247, 247) 15px,
	rgb(225, 234, 235) 15px,
	rgb(225, 234, 235) 30px,
	rgb(247, 247, 247) 30px
	);
}
#wrapper p.change_link a {
	display: inline-block;
	font-weight: bold;
	background: rgb(247, 248, 241);
	padding: 2px 6px;
	color: rgb(255, 127, 42);
	margin-left: 10px;
	text-decoration: none;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	border: 1px solid rgb(255, 127, 42);
	-webkit-transition: all 0.4s linear;
	-moz-transition: all 0.4s  linear;
	-o-transition: all 0.4s linear;
	-ms-transition: all 0.4s  linear;
	transition: all 0.4s  linear;
}
#wrapper p.change_link a:hover {
	color: #fff;
	background: rgb(255, 127, 42);
	border: 1px solid rgb(255, 127, 42);
}
#wrapper p.change_link a:active{
	position: relative;
	top: 1px;
}

#register,
#login,
#logout{
	position: absolute;
	top: 0px;
	width: 100%;
  height: 100%;
	padding: 48px 6% 60px 6%;
	margin: 0px 0px 35px 0px;
	background: rgb(247, 247, 247);
	border: 1px solid rgba(147, 184, 189,0.8);
	-webkit-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	   -moz-box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	        box-shadow: 0pt 2px 5px rgba(105, 108, 109,  0.7),	0px 0px 8px 5px rgba(208, 223, 226, 0.4) inset;
	-webkit-box-shadow: 5px;
	-moz-border-radius: 5px;
		 border-radius: 5px;
}
#register{
	z-index: 21;
	opacity: 0;
}
#login{
	z-index: 22;
}

#toregister:target ~ #wrapper #register,
#tologin:target ~ #wrapper #login,
{
	z-index: 22;
	-webkit-animation-name: fadeInLeft;
	-moz-animation-name: fadeInLeft;
	-ms-animation-name: fadeInLeft;
	-o-animation-name: fadeInLeft;
	animation-name: fadeInLeft;

}
#toregister:target ~ #wrapper #login,
#tologin:target ~ #wrapper #register
{
	-webkit-animation-name: fadeOutLeft;
	-moz-animation-name: fadeOutLeft;
	-ms-animation-name: fadeOutLeft;
	-o-animation-name: fadeOutLeft;
	animation-name: fadeOutLeft;
}

/** the actual animation, credit where due : http://daneden.me/animate/ ***/
.animate{
	-webkit-animation-timing-function: ease;
	-webkit-animation-fill-mode: both;

	-moz-animation-timing-function: ease;
	-moz-animation-fill-mode: both;

	-o-animation-timing-function: ease;
	-o-animation-fill-mode: both;

	-ms-animation-timing-function: ease;
	-ms-animation-fill-mode: both;

	animation-timing-function: ease;
	animation-fill-mode: both;
}

/** yerk some ugly IE fixes 'cause I know someone will ask "why does it look ugly in IE?", no matter how many warnings I will put in the article */

.lt8 #wrapper input{
	padding: 10px 5px 10px 32px;
    width: 92%;
}
.lt8 #wrapper input[type=checkbox]{
	width: 10px;
	padding: 0;
}
.lt8 #wrapper h1{
	color: #066A75;
}
.lt8 #register{
	display: none;
}
.lt8 p.change_link,
.ie9 p.change_link{
	position: absolute;
	height: 90px;
	background: transparent;
}
