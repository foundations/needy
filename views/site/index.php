<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <title>Abbey全自动要饭系统</title>
    <meta name="keywords" content="Abbey全自动要饭系统,全网首发">
    <meta name="description" content="Abbey全自动要饭系统,全网首发永久免费提供使用">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link href="https://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">

    <style>
        .panel {
            border: none;
            border-radius: 10px;
        }

        .panel {
            box-shadow: 1px 1px 5px 5px rgba(169, 169, 169, 0.35);
            -moz-box-shadow: 1px 1px 5px 5px rgba(169, 169, 169, 0.35);
        }
    </style>
<body background="https://ww2.sinaimg.cn/large/a15b4afegy1fpp139ax3wj200o00g073.jpg">
<div class="container" style="padding-top:20px;">
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
        <div class="panel panel-primary">
            <div class="panel-heading" style="background: linear-gradient(to right,#8ae68a,#5ccdde,#b221ff);">
                <center><font color="#000000"><b>老板行行好吧~</b></font></center>
            </div>
            <div class="panel-body">
                <center>
                    <div class="alert alert-success">
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=228812493&site=qq&menu=yes"><img
                                class="img-circle m-b-xs"
                                style="border: 2px solid #1281FF; margin-left:3px; margin-right:3px;"
                                src="https://q4.qlogo.cn/headimg_dl?dst_uin=228812493&spec=100" ; width="60px"
                                height="60px" alt="Abbey全自动要饭系统"><br>
                        </a>大哥哥大姐们啊！你们都是有钱的人呐～谁有那多余的零钱？给我这流浪的人啊...
                    </div>
                </center>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span> 施舍单号</span>
                    <input size="30" onkeyup="this.value=this.value.replace(/[^\d]/g,'')"
                           onafterpaste="this.value=this.value.replace(/[^\d]/g,'')" name="WIDout_trade_no"
                           id="WIDout_trade_no" class="form-control"/>
                </div>
                <br/>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span> 施舍留言</span>
                    <input size="30" name="WIDsubject" id="WIDsubject" class="form-control" required="required"/>
                </div>
                <br/>
                <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-yen"></span> 施舍金额</span>
                    <input size="30" name="WIDtotal_fee" id="WIDtotal_fee"
                           onkeyup="this.value=this.value.replace(/[^\d.]/g,'')"
                           onafterpaste="this.value=this.value.replace(/[^\d.]/g,'')" class="form-control"
                           required="required"/>
                </div>
                <br/>
                <center>
                    <div class="btn-group btn-group-justified" role="group" aria-label="...">
                        <div class="btn-group" role="group">
                            <button type="radio" name="pay" id="pay" value="pay" class="btn btn-primary">点击打赏</button>
                        </div>
                    </div>
            </div>
            </center>
        </div>
    </div>
    <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">
        <div class="panel panel-primary">
            <div class="panel-heading" style="background: linear-gradient(to right,#b221ff,#14b7ff,#8ae68a);">
                <center><font color="#000000"><b>大佬们的施舍记录</b></font></center>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>
                            订单号
                        </th>
                        <th>
                            施舍金额
                        </th>
                        <th>
                            状态
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach ($orders as $item) {
                        $status = $item->trade_status ? "施舍成功" : "未完成施舍";
                        echo "<tr><td>{$item->trade_id}</td><td>{$item->money}元</b></td><td><font color='red'>{$status}</font>
                        </td>
                    </tr>";
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading" style="background: linear-gradient(to right,#14b7ff,#5ccdde,#b221ff);">
                <center><font color="#000000"><b>站点日志</b></font></center>
                </h3>
            </div>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <td align="center">
                        <font color="#808080"><b>今日施舍总数</b></br>
                            <code><?php echo $totals[0]['trader_count']; ?></code></br>次</font>
                    </td>
                    <td align="center">
                        <font color="#808080"><b>今日施舍金额</b></br>
                            <code><?php echo $totals[0]['trader_money']; ?></code></br>元</font>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <font color="#808080"><b>昨日施舍总数</b></br>
                            <code><?php echo $totals[1]['trader_count']; ?></code></br>次</font>
                    </td>
                    <td align="center">
                        <font color="#808080"><b>昨日施舍金额</b></br>
                            <code><?php echo $totals[1]['trader_money']; ?></code></br>元</font>
                    </td>
                </tr>
                <tr height="50">
                    <td align="center">
                        <font color="#808080"><b>累计施舍总数</b></br>
                            <code><?php echo $totals[2]['trader_count']; ?></code></br>次</font>
                    </td>
                    <td align="center">
                        <font color="#808080"><b>累计施舍金额</b></br>
                            <code><?php echo $totals[2]['trader_money']; ?></code></br>元</font>
                    </td>
                <tbody>
            </table>
        </div>
        <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdn.bootcss.com/layer/3.1.0/layer.js"></script>
        <script type="text/javascript">
        //*******************提交按钮************************
          $("#pay").click(function(){
            var a = $('#kc').attr("alt");
            if(a <= 0){
              layer.msg('该商品库存不足，无法购买！');
              return;
            }
            var money = $("#WIDtotal_fee").val();//获取商品价格<展示>
            var out_trade_no = $("#WIDout_trade_no").val();//订单编号 *
            var str = "老板，谢谢打赏<br>订单编号："+out_trade_no+
            "<br>打赏金额：￥"+money;

            layer.confirm(str, {
                btn: ['我要打赏','不打赏了'] //按钮
              }, function(){
                //异步创建订单
                var ii = layer.load(2, {shade:[0.1,'#fff']})
                $.ajax({
                  type : "POST",
                  url : "/index.php?r=site/order",
                  data : {"out_trade_no":out_trade_no,"money":money},
                  dataType : 'json',
                  //timeout : 5000,
                  success : function(data) {
                     layer.close(ii);
                     if(data.code != 0){
                        layer.msg('服务器错误');
                        return false;
                      }
                      else{
                        str="微信/支付宝扫码支付<br><img src='"+data.qr_pc+"'>";
                        // // pc显示二维码
                        // if (ispc){
                        //   str="微信/支付宝扫码支付<br><img src='"+data.qr_pc+"'>";
                        // }
                        // //手机显示付款方式
                        // else{
                        //   str="<a href='"+data.qr_mobile+"' target='_blank'>点击付款</a>";
                        // }
                        layer.confirm(str, {
                            btn: ['已打赏','后悔了'] //按钮
                          },function(index){
                          window.location.reload();
                          layer.close(index);
                        });
                      }
                  },
                  error:function(data){
                     layer.close(ii);
                    layer.msg('服务器错误');
                    return false;
                    }
                })
                //*********************************************


              }, function(){
                layer.msg('老板行行好吧....我已经3天没吃饭了', {
                  time: 5000, //20s后自动关闭
                  btn: ['再考虑一下~']
                });
              });
          })
        //生成单号
        function d(){
           var d=new Date() ;
           var e;
           e=d.getFullYear()+""+d.getMonth()+""+d.getDate()+""+d.getHours()+""+d.getMinutes()+""+d.getMilliseconds();
           return e;
        }
        //随机金额
        function m(){
           var moneys=[[0.66,'66大顺'],[0.88,'恭喜发财'],[1.1,'一生一世'],[2.33,'笑看人生'],[3.14,'数学之美'],[5.20,'爱你哟'],[6.66,'真的很6']];
           var value = moneys[Math.round(Math.random()*(moneys.length-1))];
           $('#WIDsubject').val(value[1]);
           $('#WIDtotal_fee').val(value[0]);
        }
        $('#WIDout_trade_no').val(d());
        m();




        </script>

