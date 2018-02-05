var value;

function updateLayout()
{
    document.getElementById("value1").innerHTML = x;
    document.getElementById("value2").innerHTML = y;
  
    document.getElementById("arrow1").style.transform = "rotate(" + x1 + "deg)";
    document.getElementById("arrow2").style.transform = "rotate(" + y1 + "deg)";
   
    document.getElementById("pointer1").style.transform = "translate(" + x2 + "px," + 0 + "px)";
    document.getElementById("pointer2").style.transform = "translate("+y2+ "px," + 0 + "px)";


    setTimeout(update, 100);
}

function update()
{
    var xhr = new XMLHttpRequest();

    xhr.open('GET', 'update.php');
    xhr.send();

    xhr.onreadystatechange = function()
    {
        if(this.readyState == 4)
        {
            value = (this.responseText).split(",");
            x = value[0];
            y = value[1];
			
			x1 = x;
			y1 = y;
			
			var xInt = parseInt(x);
			var yInt = parseInt(y);

			if (xInt>120) 
			{
				x1 = 120+'';
			} 
			
			if (xInt<-120) 
			{
				x1 = -120+'';
			}	 

			if (yInt>120) 
			{
				y1 = 120+'';
			}

			if (yInt<-120) 
			{
				y1 = -120+'';
			} 

			var xpas = xInt;
			var ypas = yInt;

			if (xInt>10) 
			{
				xpas = 10;
			} 
			if (xInt<-10) 
			{
				xpas = -10;
			}

			if (yInt>10) 
			{
				ypas = 10;
			} 
			if (yInt<-10) 
			{
				ypas = -10;
			}

			x2 = xpas*24.5+'';
			y2 = ypas*24.5+'';


			updateLayout();
        }
    };
}
