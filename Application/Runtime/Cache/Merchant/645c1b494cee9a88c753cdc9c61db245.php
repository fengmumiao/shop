<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Divmove</title>
        <style>
            *{
                /*margin:0;*/
            }
            #box{
                
                background:red;
                opacity: 0.3;
                position:absolute;
                border:1px dashed black;  
                z-index: 999;

            }
            #bk{
                margin:20px 0px;
                position: absolute;
                z-index: 888;
            }
            span{
                margin-left: 20px;
            }
            #photo{
                line-height: 31px;
            }
        </style>
        <link rel="stylesheet" href="/Public/Merchant/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="/Public/Merchant/css/bootstrap-theme.min.css">
        <script src="/Public/Merchant/js/jquery.min.js"></script>
        <script src="/Public/Merchant/js/bootstrap.min.js"></script>
<!--         <link rel="stylesheet" type="text/css" href="css/style.css" /> -->
        <script type="text/javascript" src="/Public/Merchant/js/jquery.js"></script>
        <link rel="stylesheet" type="text/css" href="/Public/Home/map/style.css" />

        <script src="/Public/Home/map/jquery-1.7.2.min.js" type="text/javascript"></script>
        <script language="javascript" src="/Public/Home/map/jquery.easing.min.js"></script>
        <script language="javascript" src="/Public/Home/map/custom.js"></script>
    </head>
        <body style="padding:0px;margin:0px">
            <div class="common"> 
                <!-- <li class="openlogin"><a onclick="return false;">商品绑定框框</a></li>    -->
                <form action="/merchant.php/Merchant/Group/add" enctype="multipart/form-data" method="post" > 
                    <input id="photo" type="file" name="photo" style="float:left" class="btn btn-primary" style="margin-left:17px;"/>
                    <input type="submit" value="上传图片" style="float:left;heigth:20px;" class="btn btn-success"/>
                </form>
                <div id="box" style="top:35px;left:35px;width:400px;height:400px;display:none">       
                </div>
                <div id="bk" style="top:20px;left:17px;">
                    <img id="img" class="img-thumbnail" src="/Public/Home/images/map/<?php echo ($src); ?>" style="display:none">
                </div>


        <span id="button1">
            <button type="button" class="btn btn-danger">100/100px</button>
        </span>       
        <span id="button2">
            <button type="button" class="btn btn-danger">200/200px</button>
        </span>     
        <span id="button3">
            <button type="button" class="btn btn-danger">300/300px</button>
        </span>    
        <span id="button4">
            <button type="button" class="btn btn-danger">400/400px</button>
        </span>     
        <span id="button5" >
            <!-- <button type="button" onclick="return false;" class="btn btn-warning"> -->
                <li class="openlogin" style="float:left;margin-left:20px;width:100px;height:30px;"><a id="guanbi" class="btn btn-warning" onclick="return false;">商品绑定框框</a></li>
            <!-- </button> -->
        </span>

</div>

<div class="clear"></div>
<div class="loginmask"></div>
<div id="loginalert">
 <div class="pd20 loginpd">
     <h3><i class="closealert fr"></i>
         <div class="clear"></div>
     </h3>
        <div class="loginwrap">
          <div class="loginh">
             <div class="fl">商品绑定</div>
          </div>
          <div class="clear"></div>
            <!-- <form class="form-horizontal" role="form"> -->
                      <div class="form-group"  style="margin-top:10px">
                        <label for="inputEmail3" class="col-sm-2 control-label">商品</label>
                        <div class="col-sm-10">
                          <input id="sname" type="text" class="form-control" id="inputText3" placeholder="商品编号">
                        </div>
                      </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <br/>
                          &nbsp;&nbsp;&nbsp;&nbsp;
                          <!-- <button id="button7" type="submit" class="btn btn-default">只绑定该商品</button> -->
                          <button id="button8" type="submit" class="btn btn-default">继续绑定</button>&nbsp;&nbsp;&nbsp;&nbsp;
                          <button id="button9" type="submit" class="btn btn-default">完成绑定</button>
                        </div>
                      </div>
                    <!-- </form> -->
         </div>
    </div>
</body>
    <script type="text/javascript" charset="utf-8">
        var box = document.getElementById("box");
        var bk = document.getElementById("bk");
        var img = document.getElementById("img");
        var bkk = document.getElementById("bkk");
        var ent = document.getElementById("ent");

        // 获取box像素值
        var button1 = document.getElementById('button1');
        var button2 = document.getElementById('button2');
        var button3 = document.getElementById('button3');
        var button4 = document.getElementById('button4');
        var button7 = document.getElementById('button7');
        
        // 获取input
        var sname = document.getElementById('sname');
        var tname = document.getElementById('tname');

        // 指定像素
        button1.onclick = function(){
            box.style.display = "block";
            box.style.width = "100px";
            box.style.height = "100px";
            box.style.top = "35px";
            box.style.left= "35px";
        }       
        button2.onclick = function(){
            box.style.display = "block";
            box.style.width = "200px";
            box.style.height = "200px";
            box.style.top = "35px";
            box.style.left= "35px";
        }        
        button3.onclick = function(){
            box.style.display = "block";
            box.style.width = "300px";
            box.style.height = "300px";
            box.style.top = "35px";
            box.style.left= "35px";
        }        
        button4.onclick = function(){
            box.style.display = "block";
            box.style.width = "400px";
            box.style.height = "400px";
            box.style.top = "35px";
            box.style.left= "35px";
        }
        // var box = document.getElementById('im');
        var flag = false;   //用于判断鼠标是否在按下状态
        var w = 0;          //用于计算DIV的绝对定位
        var h = 0;
        // 获取图片
        var imgs = new Image();
        imgs.src = img.src;
        var imgw = parseInt(imgs.width);
        var imgh = parseInt(imgs.height);

        // 背景图片赋值
        bk.style.backgroundImage = 'url('+imgs.src+')';
        bk.style.width = imgw+"px";
        bk.style.height = imgh+"px";

        box.onmousedown = function(event){   //当鼠标按下时
            flag = true;   //鼠标的状态赋值为true
            var ent = event||window.event;   //事件对象赋给一个变量
            var sx = ent.clientX;           //得到鼠标的当前X坐标
            var sy = ent.clientY;            //得到鼠标的当前Y坐标
            w = sx - parseInt(this.style.left);  //计算出鼠标X与DIV左边的距离
            h = sy - parseInt(this.style.top);  //计算出鼠标Y与DIV和上边的距离
        }

        box.onmousemove = function(event){ //鼠标移动时
            if(flag){   //判断鼠标是否在按下
                var ent = event||window.event;
                var sx = ent.clientX;     
                var sy = ent.clientY;
                var boxleft = sx - w;   //计算出DIV的当前绝对定位值LEFT
                var boxtop = sy - h;    //计算出DIV的当前绝对定位值TOP
                this.style.left = boxleft + "px";   //改变DIV的绝对定位LEFT
                this.style.top = boxtop + "px";   //改变DIV的绝对定位TOP
                //判断图片是否超出范围
                var bkx = parseInt(bk.style.top);
                var bky = parseInt(bk.style.left);

                // 限制大小x1
                if (parseInt(box.style.left) < 35) {
                    this.style.top = "35px";
                    this.style.left= "35px";
                    flag = false;                   
                }

                // 限制大小x2
                var a = parseInt(this.style.left);
                var b = imgw - parseInt(this.style.width) +35;
                if (a > b) {
                    this.style.top = "35px";
                    this.style.left= "35px";
                    flag = false;
                }

                // 限制大小y1
                if (parseInt(box.style.top) < 35) {
                    this.style.top = "35px";
                    this.style.left= "35px";
                    flag = false;                   
                }

                // 限制大小y2
                var aa = parseInt(this.style.top);
                var bb = imgh - parseInt(this.style.height) + 50;
                if (aa > bb) {
                    this.style.top = "35px";
                    this.style.left= "35px";
                    flag = false;
                }
            }
        }


        box.onmouseup = function(){  //鼠标抬起时
            flag = false;   //把鼠标的状态改变为false
            // 测试
/*          box.style.display = "none";
            bk.style.display = "none";
            ceshi.style.display = 'block';
            ceshii.style.display = 'block';
            imgc.src = img.src;
            area1.coords = maps;
            area1.href = "www.baidu.com";*/

        }
        // 生成按钮
/*        button7.onclick = function(){

        }*/

        $(function(){
            var imgpash;
           $('.btn').not('#photo').css('height', '38px');
/*           $('#button7').click(function(event) {
                var mapx1 = parseInt(box.style.left) - 35;
                var mapy1 = parseInt(box.style.top) - 35;
                var mapx2 = mapx1 + parseInt(box.style.width);
                var mapy2 = mapy1 + parseInt(box.style.height);
                var maps = "'"+mapx1+","+mapy1+","+mapx2+","+mapy2+"'";
                var n = maps+"|"+imgs.src+"|"+sname.value;
                var d = Math.random();
                var img = '<img width="1190" height="466" border="0" usemap="#'+d+'" alt="" src="'+imgs.src+'">';
                var map = '<map name="'+d+'"><area target="_blank" href="/merchant.php/index.php/Lists/number/'+sname.value+'" coords="'+maps+'" shape="rect"></map>';
                alert(img + map);
           });*/

           var arr = '';
           var d;
           var img = '';
           var path = '';
           $('#button8').live('click', function(event) {
                var mapx1 = parseInt(box.style.left) - 35;
                var mapy1 = parseInt(box.style.top) - 35;
                var mapx2 = mapx1 + parseInt(box.style.width);
                var mapy2 = mapy1 + parseInt(box.style.height);
                var maps = "'"+mapx1+","+mapy1+","+mapx2+","+mapy2+"'";
                d = Math.random();
                img = '<img width="1190" height="466" border="0" usemap="#'+d+'" alt="" src="'+imgs.src+'">';
                arr = arr+ '<area target="_blank" href="/index.php/Info/index/number/'+sname.value+'" coords="'+maps+'" shape="rect">'
                $(this).attr('src', imgs.src);
                $('#loginalert').css('display', 'none');
                $('.loginmask').css('display', 'none');
                path = '<map name="'+d+'">'+arr+'</map>';
           });
            

           $('#guanbi').click(function(event){
                var mapx1 = parseInt(box.style.left) - 35;
                var mapy1 = parseInt(box.style.top) - 35;
                if (mapx1 == 0 && mapy1 == 0) {
                    alert('请上传图片后/选择商品标识位!');
                    location.reload();
                }else{
                    $('#loginalert').css('display', 'block');
                    $('.loginmask').css('display', 'block');                    
                }
           }); 

           $('#button9').live('click', function(event) {
               var content = {'path':img+path,'name':$('#sname').val()};
               $.ajax({
                    url:'/merchant.php/Merchant/Group/add',
                    data:content,
                    type:'POST',
                    success:function(data){
                        if (data) {
                            alert('完成绑定');
                            window.location.href = '/merchant.php/Merchant/Group/grouplist';
                        }
                    }
               });
           });
        })
    </script>
</html>