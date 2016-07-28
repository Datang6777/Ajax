
        //命名空间 //只要加载,全局可用-->
    (function () {
        window.ucai = {};
        ucai.hello = function () {
            console.log('hello');
        }
    })();
ucai.hello();
        var sayHello = function() {
            return 'Hello var';
        };

        function sayHello(name) {
            return 'Hello function';
        };

        sayHello();
//null 是已经知道类型但是没给值的 变量-->
//define是未知类型的变量-->
//        命名空间
        (function () {
            window.ucai = {};
            ucai.post= function(){
                console.log('hello');
            };
        }());
