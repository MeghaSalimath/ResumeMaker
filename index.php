<!DOCTYPE html>
<html>
	<head>
		<title>Resume Builder</title>
		
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>
			var flag;
			var project="project1";
			var achievement="achievement1";
			var skill="skill1";
			var interest="interest1";
			
			$(document).ready(function() {
				$("fieldset:not('#div1')").hide();
				$("#back").hide();
				flag="div1";
				//changeColor();
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='none';
			});
			
			
			function show(division){
				$(document).ready(function(){
					flag=division;
					$("fieldset:not(#"+division+")").hide();
					$("#"+division).show();
					showButton();
					//changeColor();
				});
							
			}
			function showButton(){
				$(document).ready(function(){
					if(flag!='div1')
				{
					$("#back").show();
				}
				
				else
				{
					$("#back").hide();
				}
				
				if(flag=='div9')
				{
					$("#next").hide();
				}
				
				else
				{
					$("#next").show();
				}
				});
							
			}
		
		
		function nextPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i++;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		function backPage()
		{
			
			var str=flag;
			var start=str.slice(0,3);
			var stop=str.slice(3);
			//console.log(start);
			//console.log(stop);
			var i=parseInt(stop);
			i--;
			flag=start+i;
			//console.log(flag);
			
			$(document).ready(function() {
				$("fieldset:not(#"+flag+")").hide();
					$("#"+flag).show();
				//console.log(div)
				showButton();
				//changeColor();
			});
		}
		
		/*function changeColor()
		{
			document.getElementById("#"+flag).style.backgroundColor="#D93600";
		}*/
		function generateTextbox(box) {
    var form = document.getElementById(flag);
    var input = document.createElement("input");
    input.type = "text";
					if(project.slice(0,7)==box)
					{
						input.id=project;
						input.name=project;
						var start=project.slice(0,7);
						var stop=project.slice(7);
						var i=parseInt(stop);
						i++;
						project=start+i;
					}
					else if(achievement.slice(0,11)==box)
					{
						input.id=achievement;
						input.name=achievement;
						var start=achievement.slice(0,11);
						var stop=achievement.slice(11);
						var i=parseInt(stop);
						i++;
						achievement=start+i;
					}
					else if(skill.slice(0,5)==box)
					{
						input.id=skill;
						input.name=skill;
						
						var start=skill.slice(0,5);
						var stop=skill.slice(5);
						var i=parseInt(stop);
						i++;
						skill=start+i;
					}
					else if(interest.slice(0,8)==box)
					{
						input.id=interest;
						input.name=interest;
						var start=interest.slice(0,8);
						var stop=achievement.slice(8);
						var i=parseInt(stop);
						i++;
						interest=start+i;
					}
    var br = document.createElement("br");
    form.appendChild(br);
    form.appendChild(input);
	
	}

	//$(document).ready(function() {	
	function showDiploma(course)
	{
		if(course==1)
		{
				document.getElementById('optional_12').style.display='none';
				document.getElementById('optional_diploma').style.display='block';
		}
		else if(course==0)
		{
				document.getElementById('optional_12').style.display='block';
				document.getElementById('optional_diploma').style.display='none';
		}
		//else
		//{
				
		//}
	}
	//});
		</script>
       <style>

 

#b1{
        background-image: url("");

}




#main{
	height:190%;
	position:absolute;
	width:90%;
	margin-bottom: -70px;
        margin-top: 15px;
	<!--border:10px solid #1f857a;-->
        border-radius: 30px;
	top:0px;
	left:5%;
}
#header{
	text-align:center;
	
	
}

#resume_builder{
	font-family:Georgia;
	font-size:450%;
	color: #660066;
        text-decoration:underline;

}



#select_toggle{
	
	position:absolute;
	display:block;
        margin-top: 30px;
        margin-left:1100px;
        border-radius:5px;
        
}


.toggle1{
	width:300px;
	height:70px;
	background-color: #bdbd9c;
	padding:5px;
        font-size:22px;
	text-align:center;
        text-decoration:none;
        border: 1px solid #a2a274;
        border-radius:5px;
        
        
        	
}

.option{
       color:#b93a3a;          <!--#262626-->
       text-decoration:none;
}

.toggle1:hover {
  opacity: 0.75;
  
}


.option:hover {
   color:black;
}
.option a:link,a:visited {
   
   text-decoration:none;
   
   
}


#footer{
	color:white;
	<!--background-color:#C80000;-->
	position:fixed;
	top:90%;
	height:10%;
	width:90%;
}

#name{
	
	margin:auto;
}

#next{
	float:right;
        
        
}
.btn:hover {
  opacity: 0.75;
}

#content{
	margin-top:10%;
	margin-left:15%;
}

.labels{
	margin-top:15px;
}

 #TemplateList input
{
	position: absolute;
	margin-top: 320px;
	width: 20px;
	height: 20px;
	margin-left: 100px;
}

#TemplateList img
{
	margin: 5%;
	height: 300px;
	width: 200px;
	margin-bottom: 40px;
	border: solid 1px #eee;
}
									
fieldset {
    border: 0;
}
</style>		


		
	</head>
	<body id="b1">
          
       
		<div id="main"><br>
			<div id="header">
				<span id="resume_builder">RESUME GENERATOR</span>
			</div>
                <br>
			
		<div id="select_toggle">	
			
			<div class="toggle1" onclick="show('div1')"><br>
				<span class="option" class="single"><strong>Basics</strong></span>
			</div>
                        
			
			<div class="toggle1" onclick="show('div2')"><br>
				<span class="option"><strong>Educational Details</strong></span>
			</div>
                        
			
			<div class="toggle1" onclick="show('div3')"><br>
				<span class="option"><strong>Internship</strong></span>
			</div>
                        
			
			<div class="toggle1" onclick="show('div4')"><br>
				<span class="option"><strong>Projects Undertaken</strong></span>
			</div>
			
			
			<div class="toggle1" onclick="show('div5')"><br>
				<span class="option" class="single"><strong>Awards</strong></span>
			</div>
			
			
			<div class="toggle1" onclick="show('div6')"><br>
				<span class="option"><strong>Skill Set</strong></span>
			</div>
			
			
			<div class="toggle1" onclick="show('div7')"><br>
				<span class="option"><strong>Areas of Interest</strong></span>
			</div>
			
			
			<div class="toggle1" onclick="show('div8')"><br>
				<span class="option"><strong>Personal Details</strong></span>
			</div>
			
			
			<div class="toggle1" onclick="show('div9')"><br>
				<span class="option" class="single"><strong>Finish</strong></span>
			</div>
			
		</div>
		
		<div id="content">
		<?php
			include 'form.html';
		?>
		</div>
		<div id="footer"><br><br>
			<input type="button" class="btn" value="< Back" style="height:60px; width:110px; font-size:21px; font-family:cursive;  margin-left:100px; background-color: #04AA6D; color:white;  border-radius: 10%;" id="back" onclick="backPage()">
			<input type="button" class="btn" value="Next >" style="height:60px; width:110px; font-size:21px; font-family:cursive;  margin-right:200px; background-color: #04AA6D; color:white;  border-radius: 10%;" id="next" onclick="nextPage()">
		</div>
		</div>

	</body>
</html>