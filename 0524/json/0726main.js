/**
 * Created by sks on 2016/5/24.
 */
/**
 * jit hhvm v8 es5 es6 nwjs api e4x
 */

(function () {

    function loadData() {
        var xhr = new XMLHttpRequest();

        //状态改变事件
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4) {

                //将json数据解析成js对象
                // var data = JSON.parse(xhr.responseText);
                // console.log(data.name);
                console.log(xhr.responseText);
            }
        };
        // xhr.open("GET","data.xml");

        //打开连接
        // xhr.open("GET","data.php?name=ucai&age=4");
        xhr.open("POST", "data.php");
        // xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        //发送请求
        // xhr.send("name=ucai&age=4");
            xhr
        var obj = {name: "ucai", age: 4};
        //把javascript变成字符串
        xhr.send(JSON.stringify(obj));

    }


    window.btnClickedHandler = function () {
        loadData();
    };
}());