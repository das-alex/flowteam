
var middle,width,limit1,limit2,step,State=0;

	function WorkMiddle(){

		middle = document.getElementById('middle');
		middleStyle = window.getComputedStyle(middle);
		string=middleStyle.width;
		string=string.slice(0,string.indexOf("px"));
		width=Math.ceil(Number(string));

		if (State==0){
			limit1=Math.ceil(width*10/100); limit2=width;
			step=Math.ceil(Math.abs(width-limit1)/30);
			State=1;
		}else if (State==1) {
			HideMiddle();
			State=2;
		}else if (State==2) {
			ShowMiddle();
			State=1;
		}

	}

	function HideMiddle(){
		width-=step;
		middle.style.width = String(width)+'px';
		setTimeout("if (width>limit1+step) HideMiddle()",3);
	}

	function ShowMiddle(){
		width+=step;
		middle.style.width = String(width)+'px';
		setTimeout("if (width<limit2) ShowMiddle()",3);
	}
