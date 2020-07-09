<style type="text/css" rel="stylesheet">
	* { margin: 0;
		padding: 0;
	    box-sizing: border-box;
	    font-family: 'Muli', sans-serif;

	}
	.nav-style{
		background-color:#000!important;
		opacity:0.7;
	}
	.nav-style a{
		color:white;
	}
	.nav-style a:hover{
		color:orange;
	}
	.main{
		height: 450px;
		width:100%;
	}
	.right-side{
		font-size: 2rem;
	}
	.corona-animation img{
		animation: gocorona 2s linear infinite;

	}
	@keyframes gocorona{
		0%{transform:rotate(0);}
		100%{transform:rotate(360deg);}
	}
	.left-side img{ 
		animation: corona-animation 3s linear infinite;
	 }
	 @keyframes corona-animation{
	 	0%{transform:scale(.75);}
	 	20%{transform:scale(1);}
	 	40%{transform:scale(.75);}
	 	60%{transform:scale(1);}
	 	80%{transform:scale(.75);}
	 	100%{transform:scale(.75);}
	 } 
	  .corona-update{
	  	margin:0 0 30px 0;
	  }
	  .corona-update h3{
	  	color:red;
	  }
	  .sub-section{
	  	color:rgb(200,70,100);
	  	font-weight: bold;
	  	
	  }
	  .prevent-back{
	  	background-color: rgba(50,200,50,0.1);

	  }
	  .footer-style{
	  		background-color:black !important;
	  		opacity:0.6;
	  		color:white;

	  }
	  .fa:hover{
	  	color:red !important;
	  }
	  .btn-animation{
	  	color:white;
	  	animation:gototop 2s linear infinite;
	  }
	  @keyframes gototop{
	  	0%{transform:rotate(0);}
	  	40%{transform:rotate(10deg);}
	  	80%{transform:rotate(0);}
	  	100%{transform:rotate(10deg);}
	  }
	  /* responsive*/
	  @media(max-width: 780px)
	  {
	  	.main{ height:700px;text-align:center; }
	  	.main h1{
	  		text-align:center;font-size:30px;
	  		margin:20px;
	  	}
	  }
</style>