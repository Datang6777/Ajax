/**
 * Created by ll on 2016/5/25.
 */

function doAjaxGet() {
    //������
    $.get('ucai.json').done(function (data) {
        console.log(data);
    }).fail(function () {
        alert('�޷���������');
    });
}