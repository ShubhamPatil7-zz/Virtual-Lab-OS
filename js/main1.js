$(document).ready(function()
{
	$(".button-collapse").sideNav();
});

$(document).ready(function()
{
	$('.slider').slider(
	{
		full_width: true
	});
	$('.slider').slider(
	{
		height: 580
	});
});

var st = [];
var et = [];
var idle = [];
var idle1 = [];
var ind1 = [];
var st1 = [];
var et1 = [];

function createtable()
{
	var n = document.getElementById('n').value;
	if (n > 10 || n <= 0)
		alert("Enter value between 1 and 10");
	if (n > 0 && n < 11)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("demo").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "table.php?n=" + n, true);
		xhttp.send();
	}
}

function createtable1()
{
	var n = document.getElementById('n').value;
	var q = document.getElementById('Q').value;
	if (n > 10 || n <= 0 || q > 10 || q <= 0)
		alert("Enter value between 1 and 10");
	if (n > 0 && n < 11 && q > 0 && q < 11)
	{
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if (xhttp.readyState == 4 && xhttp.status == 200)
			{
				document.getElementById("demo").innerHTML = xhttp.responseText;
			}
		};
		xhttp.open("GET", "table.php?n=" + n, true);
		xhttp.send();
	}
}

function fcfs1(n)
{
	var atv = [];
	var btv = [];
	var wtv = [];
	var tatv = [];
	var awt = 0;
	var atat = 0;
	var temp;
	var temp1;
	var temp2;

	for (i = 1; i <= n; i++)
	{
		if (document.getElementById('atv' + i).value == "" || document.getElementById('btv' + i).value == "" ||
			parseFloat(document.getElementById('atv' + i).value) < 0.0 || parseFloat(document.getElementById('atv' + i).value) > 40.0 ||
			parseFloat(document.getElementById('btv' + i).value) < 0.0 || parseFloat(document.getElementById('btv' + i).value) > 40.0)
			var check = true;
	}
	if (check)
		alert("Please fill all the values between 0 to 40");
	else
	{
		for (i = 1; i <= n; i++)
		{
			atv[i] = parseFloat(document.getElementById('atv' + i).value); //Arival Time
			btv[i] = parseFloat(document.getElementById('btv' + i).value); //Burst Time
			ind1.push(i);
		}

		for (i = 1; i < n; i++)
		{
			for (j = i + 1; j <= n; j++)
			{
				if (atv[i] > atv[j])
				{
					temp = atv[i];
					atv[i] = atv[j];
					atv[j] = temp;
					temp1 = btv[j];
					btv[j] = btv[i];
					btv[i] = temp1;
					temp2 = ind1[j - 1];
					ind1[j - 1] = ind1[i - 1];
					ind1[i - 1] = temp2;

				}
			}
		}

		var g = [];
		g[1] = 0;
		for (i = 1; i <= n; i++)
			g[i + 1] = g[i] + btv[i];
		for (i = 1; i <= n; i++)
		{
			wtv[i] = g[i] - atv[i];
			if (wtv[i] < 0)
				wtv[i] = 0;
			tatv[i] = wtv[i] + btv[i];
			awt = awt + wtv[i];
			atat = atat + tatv[i];
			if (i == 1)
			{
				st[i] = atv[i];
				idle[i] = 0;
				et[i] = btv[i];
			}
			else if (atv[i] >= et[i - 1])
			{
				idle[i] = atv[i] - et[i - 1];
				st[i] = atv[i];
				et[i] = btv[i] + st[i];
			}
			else
			{
				idle[i] = 0;
				st[i] = et[i - 1];
				et[i] = st[i] + btv[i];
			}
			wtv[i] = st[i] - atv[i];
			document.getElementById('tat' + i).innerHTML = tatv[i];
			document.getElementById('wt' + i).innerHTML = wtv[i];
		}
		awt = awt / n;
		atat = atat / n;
		//document.getElementById('avg1').innerHTML="Start Time="+st+"<br/>End  Time="+et;
		document.getElementById('avg').style.display="block";
		document.getElementById('avg').innerHTML = "Average Waiting Time = " + awt.toFixed(2) + "<br/>Average Turnaround Time = " + atat.toFixed(2);
	}
}

function datasend()
{
	var n = document.getElementById('n').value;
	var total = 100 / et[n];
	var output = "";
	var output1 = "";
	for (i = 1; i <= n; i++)
	{
		if (idle[i] != 0 && i != 1)
		{
			output += "<div id='idle" + (i - 1) + "'>Idle</div>";
			output1 += "<div id='midle" + (i - 1) + "'></div>";
		}
		output += "<div id='div" + i + "'>P" + ind1[i - 1] + "</div>";
		output1 += "<div id='mdiv" + i + "'></div>";
	}
	output1 += "<div id='mdiv" + (n+1) + "'></div>";
	document.getElementById('avg2').innerHTML = output;
	document.getElementById('avg3').innerHTML = output1;
	var pos = []; //optional array which stores left position of each div. not used anywhere. kept for further reference
	var color = ["red", "green", "blue", "orange", "purple"];
	for (i = 1; i <= n; i++)
	{
		(function(i)
		{
			if (i == 1)
				time = 0;
			else time = 1000 * i;
			setTimeout(function()
			{
				document.getElementById('div' + i).style.backgroundColor = color[i % color.length];
				document.getElementById('div' + i).style.width = total * (et[i] - st[i]) + "%";
				document.getElementById('mdiv' + i).style.width = total * (et[i] - st[i]) + "%";
				if(i==1)
					document.getElementById('mdiv' + i).innerHTML = "0";
				else document.getElementById('mdiv' + i).innerHTML = st[i];
				try
				{
					if (idle[i + 1] != 0)
					{
						document.getElementById('idle' + i).style.backgroundColor = "black";
						document.getElementById('idle' + i).style.width = total * (st[i + 1] - et[i]) + "%";
						document.getElementById('midle' + i).style.width = total * (st[i + 1] - et[i]) + "%";
						document.getElementById('midle' + i).innerHTML = et[i];
					}
				}
				catch (e)
				{
					//dont put anything in the catch block
				}
			}, time)
		})(i);
	}
	document.getElementById('mdiv' + (n+1)).innerHTML = et[n];
}

function sjf(n)
{
	var currentShortest = 9999999999999999;
	var processFinished = 0;
	var currentTime = 0;
	var currIndex = 0;
	var sum = 0;
	var ta = 0;
	var temp;
	var temp1;
	var temp2;
	var temp3;
	var temp4;
	var temp5;
	var awt = 0;
	var atat = 0;
	var wtv = [];
	var tatv = [];
	var atv = [];
	var btv = [];
	var index;
	var index1;
	var indices = [];
	var indices1 = [];
	var copyatv = [];
	var copyatv1 = [];
	var finalOrder = [];
	var burstOrder = [];
	var copyburst = [];

	for (i = 0; i < n; i++)
	{
		if (document.getElementById('atv' + i).value == "" ||  document.getElementById('btv' + i).value == "" ||
            parseFloat(document.getElementById('atv' + i).value) < 0.0 || parseFloat(document.getElementById('atv' + i).value) > 40.0 ||
			parseFloat(document.getElementById('btv' + i).value) < 0.0 || parseFloat(document.getElementById('btv' + i).value) > 40.0)
			var check = true;
	}
	if (check)
		alert("Please fill all the values between 0 to 40");
	else
	{
		for (i = 0; i < n; i++)
		{
			atv[i] = parseFloat(document.getElementById('atv'+i).value); //Arival Time
			//console.log("atv is: "+atv[i]);
			copyatv[i] = atv[i];
			copyatv1[i] = atv[i];
			//console.log("atv is: "+copyatv[i]);
			btv[i] = parseFloat(document.getElementById('btv' + i).value); //Burst Time
			copyburst[i] = btv[i];
			indices[i] = -1;
			indices1[i] = -1;
			ind1.push(i + 1);
		}
		for (i = 0; i < n; i++)
		{
			for (j = i + 1; j <= n; j++)
			{
				if (atv[i] > atv[j])
				{
					temp = atv[i];
					atv[i] = atv[j];
					atv[j] = temp;
					temp1 = btv[j];
					btv[j] = btv[i];
					btv[i] = temp1;
					temp2 = ind1[j];
					ind1[j] = ind1[i];
					ind1[i] = temp2;
				}
			}
		} //console.log(ind1);


		//assumes that the arrival time array is sorted
		while (processFinished <= n)
		{
			var i = 0;

			while (atv[i] <= currentTime && i < n)
			{
				if (btv[i] < currentShortest)
				{
					currentShortest = btv[i];
					currIndex = i;
				} // end of if loop
				i++;
			} //end of inner while loop
			console.log("current shortest is: " + currentShortest);
			console.log(currIndex);
			finalOrder.push(atv[currIndex]);
			burstOrder.push(currentShortest);
			currentTime += currentShortest;
			btv.splice(currIndex, 1);
			atv.splice(currIndex, 1);
			console.log("array: " + atv);
			console.log("burst: " + btv);
			currentShortest = 999999999999;
			processFinished++;
			//console.log(burstOrder);

		} //end of executing all processes

		//console.log("final order: "+finalOrder);
		// console.log("burst order: "+burstOrder);
		for (i = 0; i < n; i++)
		{
			/* //my code begins
			 var properIndex;
			 for(var j=0;j<n;j++){
			     if(finalOrder[j]==copyatv[i] && burstOrder[j]==copyburst[i]){
			         properIndex=j;
			         break;
			     }
			 }
			 */
			// my code ends
			index = copyatv.indexOf(finalOrder[i]);
			copyatv[index] = -1;
			indices[i] = index;
			index1 = copyatv1.indexOf(finalOrder[i]);
			copyatv1[index1] = -1;
			indices1[i] = index1;
		} //console.log("this is indices: "+indices);
		for (i = 0; i < n; i++)
		{
			if (i == 0)
			{
				st1[i] = finalOrder[i];
				idle1[i] = 0;
				et1[i] = burstOrder[i];
			}
			else if (finalOrder[i] >= et1[i - 1])
			{
				idle1[i] = finalOrder[i] - et1[i - 1];
				st1[i] = finalOrder[i];
				et1[i] = burstOrder[i] + st1[i];
			}
			else
			{
				idle1[i] = 0;
				st1[i] = et1[i - 1];
				et1[i] = st1[i] + burstOrder[i];
			}
		}

		wtv[0] = 0;
		for (i = 1; i < n; i++)
		{
			sum = sum + burstOrder[i - 1];
			wtv[i] = sum - finalOrder[i];
			awt = awt + wtv[i];
		}

		for (i = 0; i < n; i++)
		{
			if (indices[i] != -1)
			{
				document.getElementById('wt' + indices[i]).innerHTML = wtv[i];
				indices[i] = -1;
			}
			else document.getElementById('wt' + indices[i]).innerHTML = wtv[i];
		}
		for (i = 0; i < n; i++)
		{
			ta = ta + burstOrder[i];
			tatv[i] = ta - finalOrder[i];
			atat = atat + tatv[i];
		}
		for (i = 0; i < n; i++)
		{
			if (indices1[i] != -1)
			{
				document.getElementById('tat' + indices1[i]).innerHTML = tatv[i];
				indices1[i] = -1;
			}
			else document.getElementById('tat' + indices1[i]).innerHTML = tatv[i];
		}


		awt = awt / n;
		atat = atat / n;
		document.getElementById('avg').style.display="block";
		document.getElementById('avg').innerHTML = "Average Waiting Time = " + awt.toFixed(2) + "<br/>Average Turnaround Time = " + atat.toFixed(2);
	}
}

function datasend1()
{
	//delete all the avg3 children in case someone is making a new gantt chart otherwise all its children will get duplicated
	document.getElementById("avg3").innerHTML = "";

	var n = document.getElementById('n').value;
	var total = 100 / et1[n - 1];
	var output = "";
	var output1 = "";
	for (i = 0; i < n; i++)
	{

		if (idle1[i] != 0 && i != 0)
		{
			output += "<div id='idle" + (i - 1) + "'>Idle</div>";
		}
		output += "<div id='div" + i + "'>P" + ind1[i] + "</div>";
	}
	document.getElementById('avg2').innerHTML = output;
	var pos = []; //optional array which stores left position of each div. not used anywhere. kept for further reference

	var color = ["red", "green", "blue", "orange", "purple"];
	for (i = 0; i <= n; i++)
	{
		(function(i)
		{
			if (i == 0)
				time = 0;
			else time = 1000 * (i + 1);
			setTimeout(function()
			{
				document.getElementById('div' + i).style.backgroundColor = color[i % color.length];
				document.getElementById('div' + i).style.width = total * (et1[i] - st1[i]) + "%";


				//get current div of gantt chart. push left value into pos(optional). find out left value and store in left for use below
				var ele = document.getElementById('div' + i);
				pos.push(ele.offsetLeft);
				var left = ele.offsetLeft;

				//create div for numbering gantt chart dynamically. assign it name myDivX (X value of i). assign innerhtml as required start time of process
				document.getElementById("avg3").innerHTML += '<div style="left:' + left + 'px;" id="myDiv' + i + '" class="ganttNumber">';
				document.getElementById("myDiv" + i).innerHTML = st1[i];


				//try catch used in case array goes out of bounds
				try
				{
					if (idle[i + 1] != 0)
					{
						document.getElementById('idle' + i).style.backgroundColor = "black";
						document.getElementById('idle' + i).style.width = total * (st1[i + 1] - et1[i]) + "%";

						//repeat same steps as those for dynamic div mentioned above
						var idleEle = document.getElementById("idle" + i);
						var idleLeft = idleEle.offsetLeft;
						pos.push(idleLeft);

						//document.getElementById("avg3").innerHTML+='<div style="left:'+idleLeft+'px;" id="myIdleDiv'+i+'" class="ganttNumber">';
						//document.getElementById("myIdleDiv"+i).innerHTML=et[i];
					}
				}
				catch (e)
				{
					//dont put anything in the catch block
				}
			}, time)
		})(i);
	}
	//code below is used to attach end time of last process

	var positionForLast = document.getElementById("avg2").offsetLeft + document.getElementById("avg2").offsetWidth;
	//document.getElementById("avg3").innerHTML+='<div style="top:'+topPositionForLast+'px; left:'+positionForLast+'px;" id="myLastDiv" class="ganttNumber">';
	document.getElementById("avg3").innerHTML += '<div style="left:' + positionForLast + 'px;" id="myLastDiv" class="ganttNumber">';
	document.getElementById("myLastDiv").innerHTML = et1[n - 1];
}

function rr(n)
{
	var atv = [];
	var btv = [];
	var qtv = parseFloat(document.getElementById('Q').value); //Quantum time
	var remain = n;
	var flag = 0;
	var rtv = [];
	var wtv = [];
	var tatv = [];
	var awt = 0;
	var atat = 0;
	var time = 0;

	for (i = 0; i < n; i++)
	{
		if (document.getElementById('atv' + i).value == "" || document.getElementById('btv' + i).value == "" ||
			parseFloat(document.getElementById('atv' + i).value) < 0.0 || parseFloat(document.getElementById('atv' + i).value) > 40.0 ||
			parseFloat(document.getElementById('btv' + i).value) < 0.0 || parseFloat(document.getElementById('btv' + i).value) > 40.0)
			var check = true;
	}
	if (check)
		alert("Please fill all the values between 0 to 40");
	else
	{
		for (i = 0; i < n; i++)
		{
			atv[i] = parseFloat(document.getElementById('atv' + i).value); //Arival Time
			btv[i] = parseFloat(document.getElementById('btv' + i).value); //Burst Time
			rtv[i] = btv[i];
		}
		for (time = 0, i = 0; remain != 0;)
		{
			if (rtv[i] <= qtv && rtv[i] > 0)
			{
				time = time + rtv[i];
				rtv[i] = 0;
				flag = 1;
			}
			else if (rtv[i] > 0)
			{
				rtv[i] = rtv[i] - qtv;
				time = time + qtv;
			}

			if (rtv[i] == 0 && flag == 1)
			{
				remain = remain - 1;
				tatv[i] = time - atv[i];
				wtv[i] = tatv[i] - btv[i];
				document.getElementById('tat' + i).innerHTML = tatv[i];
				document.getElementById('wt' + i).innerHTML = wtv[i];
				awt = awt + wtv[i];
				atat = atat + tatv[i];
				flag = 0;
			}
			if (i == n - 1)
				i = 0;
			else if (atv[i + 1] <= time)
				i++;
		}
		awt = awt / n;
		atat = atat / n;
		document.getElementById('avg').style.display="block";
		document.getElementById('avg').innerHTML = "Average Waiting Time = " + awt.toFixed(2) + "<br/>Average Turnaround Time = " + atat.toFixed(2);
	}
}
function rrp(n)
{
    var btv = [];
    var p = [];
    qtv = parseFloat(document.getElementById('Q').value);//Quantum time
    var flag = 0;
    var rem = [];
    var wtv = [];
    var tatv = [];
    var process = [];
	var copyp = [];
	var copyp1 = [];
    var awt = 0;
	var index;
	var index1;
	var indices=[];
	var indices1=[];
	var atat = 0;
    var i,j,k,l;
    for(i=0;i<n;i++)
    {
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time       
        p[i]=parseFloat(document.getElementById('pv'+i).value);//Priority
		copyp[i]=p[i];
		copyp1[i]=p[i];
        process[i]=i;
        wtv[i] = 0;
        tatv[i] = 0;
        rem[i] = 0;
        
    }

    for(k=0;k<n;k++) 
    {
        for (l=k+1;l<n;l++) 
        {
            if (p[k]>p[l]) 
            {
                temp = p[k];
                p[k] = p[l];
                p[l] = temp;
                temp = process[k];
                process[k] = process[l];
                process[l] = temp;
                temp = btv[k];
                btv[k] = btv[l];
                btv[l] = temp;
            }
        }
    }//alert(btv);
    
    for(i=0;i<n;i++)
        rem[i]=btv[i];
    do
    {
        flag = 0;
        for(i=0;i<n;i++) 
        {
            if (rem[i] >= qtv) 
            {
                for(j=0;j<n;j++) 
                {
                    if(j==i)
                        rem[i]=rem[i]-qtv;
                    else if(rem[j]>0)
                            wtv[j]+=qtv;
                }
            } 
            else if (rem[i] > 0) 
            {
                for (j = 0; j < n; j++) 
                {
                    if (j == i)
                        rem[i] = 0;
                    else if (rem[j] > 0)
                            wtv[j] += rem[i];
                }
            }
        }
        for (i = 0; i < n; i++)
            if (rem[i] > 0)
                flag = 1;
        //alert(wtv[i]);
        //alert(tatv[i]);
    } while (flag == 1);
    
    for(i=0;i<n;i++)
    {            
        tatv[i]=wtv[i]+btv[i];
        //alert(wtv[i]);
        //alert(tatv[i]);
    }
    
     for(i=0;i<n;i++)
           {
               index=copyp.indexOf(p[i]);
               copyp[index]=-1;
               indices[i]=index; 
               index1=copyp1.indexOf(p[i]);
               copyp1[index1]=-1;
               indices1[i]=index1;
           }
     for(i=0; i<n; i++)
              {
                  if(indices[i]!=-1)
                      {
                          document.getElementById('wt'+indices[i]).innerHTML=wtv[i];
                          indices[i]=-1;
                      }
              
                  else document.getElementById('wt'+indices[i]).innerHTML=wtv[i];
              }
	 for(i=0; i<n; i++)
              {
                  if(indices1[i]!=-1)
                      {
                          document.getElementById('tat'+indices1[i]).innerHTML=tatv[i];
                          indices1[i]=-1;
                      }
              
                  else document.getElementById('tat'+indices1[i]).innerHTML=tatv[i];
              }  
	
	for(i=0;i<n;i++)
    {
        //document.getElementById('tat'+i).innerHTML=tatv[i];
        //document.getElementById('wt'+i).innerHTML=wtv[i];
        awt += wtv[i];
        atat += tatv[i];
    }
    
    awt=awt/n;
    atat=atat/n;
    document.getElementById('avg').style.display="block";
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

//Page Replacement Algos

function lru()
{
	document.getElementById('temp').innerHTML = "";
	var f, pages, ph, index, tmp = 0,
		pf = 0,
		flag = 0;
	f = parseInt(document.getElementById('frame').value);
	var frame = [];
	var used = [];
	pages = document.getElementById('page').value;
	pages = pages.replace(/\s/g, ""); //Removes all whitespaces from string
	pages = pages.split(""); //String to Character array conversion
	var p = pages.length;

	if ((f < 1 || f > 9) || (p < 1 || p > 30))
		alert("Enter the frame size between 1 and 9 \nMAX page limit is 30");
	else
	{
		for (i = 0; i < f; i++)
			frame[i] = -1;

		for (i = 0; i < p; i++)
		{
			flag = 0;
			for (j = 0; j < f; j++)
			{
				if (frame[j] == pages[i])
				{
					flag = 1;
					break;
				}
			}
			/* program for lru page replacement algorithm in c */
			if (flag == 0)
			{
				for (j = 0; j < f; j++)
					used[j] = 0;
				for (j = 0, tmp = i - 1; j < f - 1; j++, tmp--)
				{
					for (k = 0; k < f; k++)
					{
						if (frame[k] == pages[tmp])
							used[k] = 1;
					}
				}
				for (j = 0; j < f; j++)
					if (used[j] == 0)
						index = j;
				frame[index] = pages[i];
				pf++;
			}
			var content = "<table class='responsive-table centered striped frametable'>";
			for (k = 0; k < f; k++)
			{
				if (frame[k] == -1)
					frame[k] = "-";
				content = content.concat("<tr><td>" + frame[k] + "</td></tr>");
			}
			content = content.concat("</table>");
			$("#temp").append(content);
		}
		var ph = p - pf;
		$("#temp").append("<br/><br/>Page Hits : " + ph);
		$("#temp").append("<br/>Page Fault : " + pf);
	}
}

function fifo()
{
	document.getElementById('temp').innerHTML = "";
	var f, pages;
	f = parseInt(document.getElementById('frame').value);
	var frame = [];
	var num = 0;
	var pageHit = 0;
	var flag = true;
	pages = document.getElementById('page').value;
	pages = pages.replace(/\s/g, ""); //Removes all whitespaces from string
	pages = pages.split(""); //String to Character array conversion
	var p = pages.length;

	if ((f < 1 || f > 9) || (p < 1 || p > 30))
		alert("Enter the frame size between 1 and 9 \nMAX page limit is 30");
	else
	{
		for (i = 0; i < f; i++)
		{
			frame[i] = -1;
		}
		for (i = 0; i < p; i++)
		{
			flag = true;
			var page = pages[i];
			for (j = 0; j < f; j++)
			{
				if (frame[j] == page)
				{
					flag = false;
					pageHit++;
					break;
				}
			}
			if (num == f)
				num = 0;

			if (flag)
			{
				frame[num] = page;
				num++;
			}
			var content = "<table class='responsive-table centered striped frametable'>";
			for (k = f - 1; k >= 0; k--)
			{
				if (frame[k] == -1)
					frame[k] = "-";
				content = content.concat("<tr><td>" + frame[k] + "</td></tr>");
			}
			content = content.concat("</table>");
			$("#temp").append(content);
		}
		var pageFault = p - pageHit;
		$("#temp").append("<br/><br/>Page Hits : " + pageHit);
		$("#temp").append("<br/>Page Fault : " + pageFault);
	}
}

function optimal()
{
	document.getElementById('temp').innerHTML = "";
	var f, pages;
	f = parseInt(document.getElementById('frame').value);
	var frame = [];
	var j, flag = 0,
		pf = 0;
	var max, index, m;
	var lp = [];
	pages = document.getElementById('page').value;
	pages = pages.replace(/\s/g, ""); //Removes all whitespaces from string
	pages = pages.split(""); //String to Character array conversion
	var p = pages.length;


	if ((f < 1 || f > 9) || (p < 1 || p > 30))
		alert("Enter the frame size between 1 and 9 \nMAX page limit is 30");
	else
	{
		for (i = 0; i < p; i++)
		{
			frame[i] = -1;
		}

		for (j = 0; j < f; j++)
		{
			frame[j] = pages[j];
			flag = 1;
			pf++;
			var content = "<table class='responsive-table centered striped frametable'>";
			for (k = f - 1; k >= 0; k--)
			{
				if (frame[k] == -1)
					frame[k] = "-";
				content = content.concat("<tr><td>" + frame[k] + "</td></tr>");
			}
			content = content.concat("</table>");
			$("#temp").append(content);
		}

		for (j = f; j < p; j++)
		{
			flag = 0;
			for (i = 0; i < f; i++)
			{
				if (frame[i] == pages[j])
				{
					flag = 1;
					var content = "<table class='responsive-table centered striped frametable'>";
					for (k = f - 1; k >= 0; k--)
					{
						if (frame[k] == -1)
							frame[k] = "-";
						content = content.concat("<tr><td>" + frame[k] + "</td></tr>");
					}
					content = content.concat("</table>");
					$("#temp").append(content);
					break;
				}
			}
			if (flag == 0)
			{
				for (i = 0; i < f; i++)
					lp[i] = 0;
				for (i = 0; i < f; i++)
				{
					for (m = j + 1; m < p; m++)
					{
						if (frame[i] == pages[m])
						{
							lp[i] = m - j;
							break;
						}
					}
				}
				max = lp[0];
				index = 0;
				for (i = 0; i < f; i++)
				{
					if (lp[i] == 0)
					{
						index = i;
						break;
					}
					else
					{
						if (max < lp[i])
						{
							max = lp[i];
							index = i;
						}
					}
				}
				frame[index] = pages[j];
				pf++;
				var content = "<table class='responsive-table centered striped frametable'>";
				for (k = f - 1; k >= 0; k--)
				{
					if (frame[k] == -1)
						frame[k] = "-";
					content = content.concat("<tr><td>" + frame[k] + "</td></tr>");
				}
				content = content.concat("</table>");
				$("#temp").append(content);
			}
		}

		var ph = p - pf;
		$("#temp").append("<br/><br/>Page Hits : " + ph);
		$("#temp").append("<br/>Page Fault : " + pf);
	}
}

function lfu()
{
	document.getElementById('temp').innerHTML = "";
	var f, pages;
	f = parseInt(document.getElementById('frame').value);
	var frame = [];
	var freq = [];
	var count = [];
	var page, num = 0,
		pageFault = 0,
		min = 0,
		counter = 0,
		k = 0;
	var flag = true;
	pages = document.getElementById('page').value;
	pages = pages.replace(/\s/g, ""); //Removes all whitespaces from string
	pages = pages.split(""); //String to Character array conversion
	var p = pages.length;


	if ((f < 1 || f > 9) || (p < 1 || p > 30))
		alert("Enter the frame size between 1 and 9 \nMAX page limit is 30");
	else
	{
		for (i = 0; i < f; i++)
		{
			frame[i] = -1;
			count[i] = 0;
		}

		do {
			for (i = 0; i < p; i++)
			{
				page = pages[i];
				flag = true;
				for (j = 0; j < f; j++)
				{
					if (page == frame[j])
					{
						flag = false;
						count[j]++;
						break;
					}
				}
				if (flag)
				{
					min = count[0];
					for (j = 0; j < f; j++)
					{
						if (count[j] < min)
						{
							min = count[j];
							break;
						}
					}
					for (j = 0; j < f; j++)
					{
						if (min == count[j])
						{
							frame[j] = page;
							k = j;
							break;
						}
					}
					count[k] = 1;
					var content = "<table class='responsive-table centered striped frametable'>";
					for (j = f - 1; j >= 0; j--)
					{
						if (frame[j] == -1)
							frame[j] = "-";
						content = content.concat("<tr><td>" + frame[j] + "</td></tr>");
					}
					content = content.concat("</table>");
					$("#temp").append(content);
					pageFault++;
				}
				else
				{
					var content = "<table class='responsive-table centered striped frametable'>";
					for (j = f - 1; j >= 0; j--)
					{
						if (frame[j] == -1)
							frame[j] = "-";
						content = content.concat("<tr><td>" + frame[j] + "</td></tr>");
					}
					content = content.concat("</table>");
					$("#temp").append(content);
				}
				counter++;
			}
		} while (counter != p);

		var pageHit = p - pageFault;
		$("#temp").append("<br/><br/>Page Hits : " + pageHit);
		$("#temp").append("<br/>Page Fault : " + pageFault);
	}
}