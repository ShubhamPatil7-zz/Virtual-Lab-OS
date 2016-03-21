$( document ).ready(function(){
            $(".button-collapse").sideNav();
});

$(document).ready(function(){
    $('.slider').slider({full_width: true});
    $('.slider').slider({height: 580});
});


//Scheduling Algo's

function createtable()
{
    var n=document.getElementById('n').value;
    if(n>10 || n<=0)
        alert("Enter value between 1 and 10");
    if(n>0 && n<11)
    {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() 
          {
            if (xhttp.readyState == 4 && xhttp.status == 200)
            {
              document.getElementById("demo").innerHTML = xhttp.responseText;
            }
          };
          xhttp.open("GET","table.php?n="+n, true);
          xhttp.send();
    }
}

var st = [];
var et = [];
var idle = [];


function fcfs1(n)
{
   var atv = [];
    var btv = [];
    var wtv = [];
    var tatv = [];
    var awt = 0;
    var atat = 0;
    for(i=1;i<=n;i++)
    {
        atv[i]=parseFloat(document.getElementById('atv'+i).value);//Arival Time
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time
    }
		
 var g=[];
    g[1]=0;
    for(i=1;i<=n;i++)
        g[i+1]=g[i]+btv[i];
    for(i=1;i<=n;i++)
    {
        wtv[i]=g[i]-atv[i];
        if(wtv[i]<0)
            wtv[i]=0;
        tatv[i]=wtv[i]+btv[i];
        awt=awt+wtv[i];
        atat=atat+tatv[i];
		if(i==1){
			st[i]=atv[i];
			idle[i]=0;
			et[i]=btv[i];
		}
		else if(atv[i]>=et[i-1]){
			idle[i]=atv[i]-et[i-1];
			st[i]=atv[i];
			et[i]=btv[i]+st[i];
		}
		else {
			idle[i]=0;
			st[i]=et[i-1];
			et[i]=st[i]+btv[i];
		}
		wtv[i]=st[i]-atv[i];
		document.getElementById('tat'+i).innerHTML=tatv[i];
        document.getElementById('wt'+i).innerHTML=wtv[i];
    }
	awt=awt/n;
    atat=atat/n;
	document.getElementById('avg1').innerHTML="Start Time="+st+"<br/>End  Time="+et;
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

function datasend()
{
	//delete all the avg3 children in case someone is making a new gantt chart otherwise all its children will get duplicated
	document.getElementById("avg3").innerHTML="";
	
	var n=document.getElementById('n').value;
	var total=100/et[n];
	var output="";
	for(i=1;i<=n;i++){
		if(idle[i]!=0 && i!=1){
			output+="<div id='idle"+(i-1)+"'>Idle</div>";
		}
		output+="<div id='div"+i+"'>P"+i+"</div>";
	}
	document.getElementById('avg2').innerHTML=output;
	var pos=[];	//optional array which stores left position of each div. not used anywhere. kept for further reference
	
	var color = ["red","green","blue","orange","purple"];
	for(i=1;i<=n;i++){
		document.getElementById('div'+i).style.backgroundColor=color[i%color.length];
		document.getElementById('div'+i).style.width=total*(et[i]-st[i])+"%";
		
		
		//get current div of gantt chart. push left value into pos(optional). find out left value and store in left for use below
		var ele=document.getElementById('div'+i);
		pos.push(ele.offsetLeft);
		var left=ele.offsetLeft;
		
		//create div for numbering gantt chart dynamically. assign it name myDivX (X value of i). assign innerhtml as required start time of process
		document.getElementById("avg3").innerHTML+='<div style="left:'+left+'px;" id="myDiv'+i+'" class="ganttNumber">';
		document.getElementById("myDiv"+i).innerHTML=st[i];
		
		
		//try catch used in case array goes out of bounds
		try{
			if(idle[i+1]!=0){
				document.getElementById('idle'+i).style.backgroundColor="black";
				document.getElementById('idle'+i).style.width=total*(st[i+1]-et[i])+"%";	
				
				//repeat same steps as those for dynamic div mentioned above
				var idleEle=document.getElementById("idle"+i);
				var idleLeft=idleEle.offsetLeft;
				pos.push(idleLeft);
				
				document.getElementById("avg3").innerHTML+='<div style="left:'+idleLeft+'px;" id="myIdleDiv'+i+'" class="ganttNumber">';
				document.getElementById("myIdleDiv"+i).innerHTML=et[i];
			}
		}catch(e){
			//dont put anything in the catch block
		}
   	}
	
	//code below is used to attach end time of last process
	
	var positionForLast=document.getElementById("avg2").offsetLeft+document.getElementById("avg2").offsetWidth;
	//document.getElementById("avg3").innerHTML+='<div style="top:'+topPositionForLast+'px; left:'+positionForLast+'px;" id="myLastDiv" class="ganttNumber">';
	document.getElementById("avg3").innerHTML+='<div style="left:'+positionForLast+'px;" id="myLastDiv" class="ganttNumber">';
	document.getElementById("myLastDiv").innerHTML=et[n];
    
}

function fcfs(n)
{
    var atv = [];
    var btv = [];
    var wtv = [];
    var tatv = [];
    var awt = 0;
    var atat = 0;
    for(i=1;i<=n;i++)
    {
        atv[i]=parseFloat(document.getElementById('atv'+i).value);//Arival Time
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time
    }
    var g=[];
    g[1]=0;
    for(i=1;i<=n;i++)
        g[i+1]=g[i]+btv[i];
    for(i=1;i<=n;i++)
    {
        wtv[i]=g[i]-atv[i];
        if(wtv[i]<0)
            wtv[i]=0;
        tatv[i]=wtv[i]+btv[i];
        awt=awt+wtv[i];
        atat=atat+tatv[i];
        document.getElementById('tat'+i).innerHTML=tatv[i];
        document.getElementById('wt'+i).innerHTML=wtv[i];
    }
    awt=awt/n;
    atat=atat/n;
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

function sjf(n)
{
    var atv = [];
    var btv = [];
    var wtv = [];
    var tatv = [];
    var stv = [];
    var awt = 0;
    var atat = 0;
    var flag = [];
    for(i=0;i<n;i++)
    {
        atv[i]=parseFloat(document.getElementById('atv'+i).value);//Arival Time
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time
        process[i]=i;
        flag=0;
    }
    for (i = 0; i<n; i++)
     {
          if (flag==1)
               continue;
          else
          {
                k = i;
                while(atv[i]<=tst && i<n)
                    i++;
                for (k = start; k<i; k++)
                {
                    for (j = k+1; j<i; j++)
                    {
                        if(btv[k] < btv[k])
                            continue;
                        else
                        {
                            temp = p[k];
                            p[k] = p[j];
                            p[j] = temp;
                        }
                    }
                }
                i = k;
                if(atv[i]<=tst)
                    stv[i] = tst;
                else
                    stv[i] = atv[i];
                stv[i] = tst;
                flag[i] = 1;
                tst += btv[i];
                wtv[i] = stv[i] - atv[i];
                tatv[i] = btv[i] + wtv[i]; 
                awt += wtv[i];
                atat += tatv[i];
          }
     }
    
    for(i=0;i<n;i++)
    {
        document.getElementById('tat'+i).innerHTML=tatv[i];
        document.getElementById('wt'+i).innerHTML=wtv[i];
    }
    awt=awt/n;
    atat=atat/n;
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

function rr(n)
{
    var atv = [];
    var btv = [];
    var qtv = 2;
    qtv = parseFloat(document.getElementById('Q').value);//Quantum time
    var remain = n;
    var flag = 0;
    var rtv = [];
    var wtv = [];
    var tatv = [];
    var awt = 0;
    var atat = 0;
    for(i=0;i<n;i++)
    {
        atv[i]=parseFloat(document.getElementById('atv'+i).value);//Arival Time
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time
        rtv[i]=btv[i];
    }
    for(time=0,i=0;remain!=0; )
    {
        if(rtv[i]<=qtv && rtv[i]>0)
        {
            time=time+rtv[i];
            rtv[i]=0;
            flag=1;
        }
        else if(rtv[i]>0)
             {
                rtv[i]=rtv[i]-qtv;
                time=time+qtv;
             }
        
        if(rtv[i]==0 && flag==1)
        {
            remain=remain-1;
            tatv[i]=time-atv[i];
            wtv[i]=time-atv[i]-btv[i];
            document.getElementById('tat'+i).innerHTML=tatv[i];
            document.getElementById('wt'+i).innerHTML=wtv[i];
            awt=awt+wtv[i];
            atat=atat+tatv[i];
            flag=0;
        }
        if(i==n-1)
            i=0;
        else if(atv[i+1]<=time)
                i++;
    }
    awt=awt/n;
    atat=atat/n;
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

function rrp(n)
{
    var btv = [];
    var p = [];
    var qtv = 2;
    qtv = parseFloat(document.getElementById('Q').value);//Quantum time
    var flag = 0;
    var rem = [];
    var wtv = [];
    var tatv = [];
    var process = [];
    var awt = 0;
    var atat = 0;
    var i,j,k,l;
    for(i=0;i<n;i++)
    {
        btv[i]=parseFloat(document.getElementById('btv'+i).value);//Burst Time       
        p[i]=parseFloat(document.getElementById('pv'+i).value);//Priority
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
    }
    
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
    } while (flag == 1);
    
    for(i=0;i<n;i++)
    {            
        tatv[i]=wtv[i]+btv[i];
    }
    
    for(i=0;i<n;i++)
    {
        document.getElementById('tat'+i).innerHTML=tatv[i];
        document.getElementById('wt'+i).innerHTML=wtv[i];
        awt=awt+wtv[i];
        atat=atat+tatv[i];
    }
    
    awt=awt/n;
    atat=atat/n;
    document.getElementById('avg').innerHTML="Average Waiting Time="+awt.toFixed(2)+"<br/>Average Turnaround Time="+atat.toFixed(2);
}

//Page Replacement Algo's

function fifo()
{
    document.getElementById('temp').innerHTML = "";
    var f,pages;
    f = parseInt(document.getElementById('frame').value);
    var frame =[];
    var num = 0;
    var pageHit = 0;
    var flag = true;
    pages = document.getElementById('page').value;
    pages = pages.replace(/\s/g, "");//Removes all whitespaces from string
    pages = pages.split(""); //String to Character array conversion
    var p = pages.length;
    
    for(i=0; i<f; i++)
    {
            frame[i] = -1;
    }

    for(i=0; i<p; i++)
    {
        flag = true;
        var page = pages[i];
        for(j=0; j<f; j++)
        {
            if(frame[j] == page)
            {
                flag = false;
                pageHit++;
                break;
            }
        }
        if(num == f)
            num = 0;

        if(flag)
        {
            frame[num] = page;
            num++;
        }
        
        for(k=0; k<f; k++)
        {
            if(frame[k]== -1)
                frame[k] = "-";
            $("#temp").append(frame[k]+"  ");
        }
        $("#temp").append("<br/>");
    }
    var pageFault = p - pageHit;
    $("#temp").append("Page Hits : "+pageHit);
    $("#temp").append("<br/>Page Fault : "+pageFault);
}

function lru()
{
    document.getElementById('temp').innerHTML = "";
    var f,pages;
    f = parseInt(document.getElementById('frame').value);
    var frame =[];
    var num = 0;
    var pageHit = 0;
    var flag = true;
    pages = document.getElementById('page').value;
    pages = pages.replace(/\s/g, "");//Removes all whitespaces from string
    pages = pages.split(""); //String to Character array conversion
    var p = pages.length;
    
    for(i=0; i<f; i++)
    {
            frame[i] = -1;
    }

    for(i=0; i<p; i++)
    {
        flag = true;
        var page = pages[i];
        for(j=0; j<f; j++)
        {
            if(frame[j] == page)
            {
                flag = false;
                pageHit++;
                break;
            }
        }
        if(num == f)
            num = 0;

        if(flag)
        {
            frame[num] = page;
            num++;
        }
        
        for(k=0; k<f; k++)
        {
            if(frame[k]== -1)
                frame[k] = "-";
            $("#temp").append(frame[k]+"  ");
        }
        $("#temp").append("<br/>");
    }
}