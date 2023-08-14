function createXmlRequest()
        {
            if(window.ActiveXObject) {
                var xmlHttps=["Microsoft.XMLHTTP","MSXML2.XMLHttp.5.0","MSXML2.XMLHttp4.0", "MSXML2.XMLHttp3.0","MSXML2.XMLHttp"];
                try  {
                    for(var i=0;i<xmlHttps.length;i++) {
                        var xmlHttp=new ActiveXObject(xmlHttps[i]);
                        return xmlHttp;
                    }
                } catch (error) { }
            } else  {
                var xmlHttp=new XMLHttpRequest();
                return xmlHttp;
            }
        }
        function ajaxget(xmlHttp, url) {
            xmlHttp.open("GET", url, true);//true为异步请求
            xmlHttp.setRequestHeader("If-Modified-Since", "0");//头部字段的名称和信息
            xmlHttp.send("");//send方法中的参数表示需要请求发送的数据
        }
		/*
        function pageload() {//此函数是实现页面显示时间的另一种方式，通过在body标签中增加onLoad="pageload();"即可
            loadTime();
        }
        */
        var xmlget;
        function loadTime(){
            var url = "time/getdate.php";
            xmlget = createXmlRequest();
            xmlget.onreadystatechange = callback;
            ajaxget(xmlget, url);
        }
        function callback(){
            if (xmlget.readyState == 4) {
                if(xmlget.status == 200){
                    var sta = xmlget.responseText;
                    document.getElementById("showtime").innerHTML = sta;
                    setTimeout("loadTime()",1000);
                }
            }
        }
window.onload = loadTime();