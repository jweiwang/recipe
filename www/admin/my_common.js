//框架内弹窗
function iframe_box(url, title, w, h) {
	var w = w || '1000px';
	var h = h || '600px';
	var title = title || '管理操作';
    layer.open({
        type: 2,
        title: title,
        shadeClose: true,
        shade: 0.7,
        maxmin: true,
        area: [w + 'px', h + 'px'],
        content: url,

    });
}
//初始化弹窗高度
function init_iframe_height()
{
    var index = parent.layer.getFrameIndex(window.name);
    parent.layer.iframeAuto(index);
}
layui.define(['element','layer','laydate','form'], function(exports){
        var $ = layui.jquery,form = layui.form,layer=layui.layer;

        //分页
        if($("#page")[0]) {
            layui.use('laypage',function() {
                var laypage = layui.laypage;
                var pageObj = $("#page");
                var total = pageObj.attr('total');
                var curr = pageObj.attr('curr');
                var limit = pageObj.attr('limit');
                laypage.render({
                    elem: 'page'
                    ,count: total
                    ,limit: limit
                    ,curr: curr
                    ,layout: ['count', 'prev', 'page', 'next', 'limit', 'refresh', 'skip']
                    ,jump: function(obj,first){
                        if(!first){
                            var href = location.href;
                            var arr = href.split('?');
                            href = arr[0];
                            var fields = '';
                            if(arr.length > 1) {
                                var arr1 = arr[1].split('&');
                                for (var i=0;i<arr1.length;i++){
                                    if(arr1[i].indexOf('page=') != -1 && arr1[i].indexOf('pagesize=') != -1) {
                                        fields =fields+'&'+arr1[i]
                                    }
                                }
                            }
                            href = href+'?page='+obj.curr+'&pagesize='+obj.limit;
                            if (fields) {
                                href = href+fields;
                            }
                            location.href = href;
                        }
                    }
                });
            });
        }
        


        var laydate = layui.laydate;
        //日期
        $("input.layui-date").each(function(){
            laydate.render({elem: this,type: $(this).attr('format-type')||'date'});
        });
        $(document).on("click","input.layui-date",function(){
            laydate.render({elem: this,type: $(this).attr('format-type')||'date'});
        });

        //全选
        if($(".checkbox_all")[0]) {
            layui.use('form',function() {
                var form = layui.form;
                form.on('checkbox(checkbox_all)', function(data){
                    $('input[name=idboxs]').prop('checked', $(this).prop('checked'));
                    form.render('checkbox');
                });    
            });
        }
        $(".J_tips").mouseover(function(){
            layer.tips($(this).attr('data-title'),$(this), {tips: 2});
        });
        
        exports('my_common');
});