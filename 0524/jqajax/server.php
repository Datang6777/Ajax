<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=utf-8">
    <title>ajax</title>
    <script type="text/javascript" src="jquery-2.2.3.js"></script>
    <script type="text/javascript">
        //命名空间
        //window.ucai = {};
        //ucai.post = function () {};
        //关键字:jit技术   chrome的v8用于js解析引擎  hhvm是PHP的编译引擎  es6
        // XML新的解析方式 e4x
        (function () {
            //jQuery('#id').val();
            var a = 1; //在 git 中遇到a时即指定a为num类型
            a = 'Hello';//git遇到a变成字符串又开始重新编译,所以git要把所有的变量写成同一个变量类型
        })();

        //ajax技术 异步JavaScript和XML  了解nwjs node.js
        //$.post 方法	$.get方法   $.ajax
        //josn格式 {"name":"ucai","add":"shijingshan"}
        //JSON定义用双引号
        //API  Application Programming Interface,应用程序编程接口
        // http://cdn.code.baidu.com/ 百度资源库
        // 服务器状态码(背诵) http://blog.sina.com.cn/s/blog_70726e0b0100w02v.html
        //APache可以直接设置某个页面需要登录才能访问

        //php函数 json_decode() 接受一个 JSON 格式的字符串并且把它转换为 PHP 变量
        //php函数 json_encode() 对变量进行 JSON 编码  value 值的 JSON 形式

        function lodedate() {
            //创建一个请求
            var xhr = new XMLHttpRequest();
            //
            xhr.onreadystatechange = function () {

                console.log(xhr.readyState);
                //
                if (xhr.readyState == 4) {	//完成状态
                    var data = JSON.parse(xhr.responseText);//解析json
                    console.log(xhr.responseText);
                    alert(data.name);
                }
            };
          //加载文件
            xhr.open('GET', 'ucai.json');
            xhr.send(); //发送请求
        }

        function lodedate_POST() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4) {
                    console.log(xhr.responseText);
                }
            };

            //xhr.open('GET', 'ucai.json');	//加载文件
            xhr.open('POST', 'test.php');
            var obj = {name: "ucai", age: 4};

            xhr.send(JSON.stringify(obj)); //发送请求
        }

        function btnCli() {
            lodedate();
        }

        ;
        function btnCli2() {
            lodedate_POST();
        }
        ;
    </script>
</head>
<body>
请输入姓名:<input type="text" name="username" id="id" value="ucai"><br>
<input type="button" onclick="btnCli()" value="GET">
<input type="button" onclick="btnCli2()" value="POST">
<br>

 <h3>ajax异步取数据</h3>
取数据<input type="text" id="data"><br>
<input type="button" id="Btn" value="$.ajax异步取数据">
<input type="button" id="Btn2" value="post异步取数据">
<input type="button" id="Btn3" value="$.get异步取数据">
<script type="text/javascript">
    function doAjax1() {
        //第一个方法
        $.ajax("ucai.json", {
            method: "POST", complete: function (xhr) {
                var data = JSON.parse(xhr.responseText);//解析json
                $('#data').val(data.name);
                // console.log(xhr.responseText);
            }, error: (function (xhr) {
                alert('数据获取失败');
            })
        });
    }


    function doAjax2() {
        //函数法
        $.ajax('ucai.json').done(function (data) {
            console.log(data);
        }).fail(function () {
            alert('无法加载数据');
        });
    }

    //快捷方法
    function doAjaxGetJSON() {
        //函数法
        $.getJSON('ucai.json').done(function (data) {
            console.log(data);
        }).fail(function () {
            alert('无法加载数据');
        });
    }
    function doAjaxGet() {
        //函数法
        $.get('ucai.json').done(function (data) {
            console.log(data);
        }).fail(function () {
            alert('无法加载数据');
        });
    }


    function doAjaxGetPost() {
        //函数法
        $.post('ucai.json').done(function (data) {
            //返回的data是一个obj类型
            var res = JSON.stringify(data);//把对象解析json
            var msg = JSON.parse(res);//把json解析成数组
            $('#data').val(msg.age);
        }).fail(function () {
            alert('无法加载数据');
        });
    }


    $('#Btn').click(function () {
        doAjax1()
    });
    $('#Btn2').click(function () {
        doAjaxGetJSON()
    });
    $('#Btn3').click(function () {
        doAjaxGetPost()
    });
</script>


<h3>命名空间问题</h3>
<script type="text/javascript">-->
   //命名空间 //只要加载,全局可用-->
    (function () {
        window.ucai = {};
               ucai.hello = function () {
        console.log('hello');
        }
    })();
   ucai.hello();
    //null 是已经知道类型但是没给值的 变量-->
   //define是未知类型的变量-->

</script>


<!--<h3>get SCRIPT 加载呈现</h3>-->
<!--<input type="button" id="" value="加载页面">-->
<!--<div id="con">loding..</div>-->
<!--<script type="text/javascript">-->
<!--    (function () {-->
<!--        $.getScript('ucai.json').done(function () {-->
<!--            //getScript开始执行是开辟新线程来执行加载ucai.json,-->
<!--            //此时主线程继续执行其他程序,等到cai.json,加载完成后由主程序来执行done程序-->
<!--            //涉及到线程安全网问题-->
<!--        })-->
<!--    })();-->


</script>


</body>
</html>