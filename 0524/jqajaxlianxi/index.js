/**
 * Created by sks on 2016/5/24.
 *
 *
 *
 * google closure
 */

//函数重载


(function () {
    function init(){
        $("#btnGetServerData").click(function(){
            $.ajax("data.json",{method:"POST",complete:function(xhr){
                console.log(xhr.responseText);
            }});
        });

    }
    function btnGetServerDataClickedHandler() {
        $.ajax("data.json");
        $.ajax({url:"data.json"});

        $.ajax("data.json1", {
            method: "POST",
            //数据加载完成后执行的函数
            complete: function (xhr) {
                console.log(xhr.responseText);
            },
            //数据加载失败时执行的函数
            error: function (xhr) {
                alert("无法加载数据");
            }
        });

        //启动一个异步通信的连接
        $.ajax("data.json").done(function (data) {
            //如果成功获取数据，执行该函数
            console.log(data);
        }).fail(function () {
            //如果无法访问该页面，则执行该函数
            alert("无法加载数据");
        });
    };


    function btnGetJsonDataClickedHandler() {
        $.getJSON("data.json").done(function (data) {
            console.log(data);
        });
    }

    function btnSendGetClickedHandler() {
        $.get("server.php",{name:"ucai"},function (data) {
            console.log(data);
        });
    }


    function btnSendPostRequestClickedHandler() {
        $.post("server.php",{name:"ucai"},function (data) {
            console.log(data);
        });
    }

    function init() {
        //监听事件
        $("#btnGetServerData").click(btnGetServerDataClickedHandler);
        $("#btnGetJSONData").click(btnGetJsonDataClickedHandler);
        $("#btnSendGet").click(btnSendGetClickedHandler);
        $("#btnSendPostRequest").click(btnSendPostRequestClickedanHdler);

    }

    init();
}());