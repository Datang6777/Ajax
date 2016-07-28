/**
 * Created by ll on 2016/5/25.
 */

function doAjaxGet() {
    //函数法
    $.get('ucai.json').done(function (data) {
        console.log(data);
    }).fail(function () {
        alert('无法加载数据');
    });
}