<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-07-18 07:08:14
         compiled from "backend/design/html/stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8040232565d301ade252d81-54119461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e32776903b242de45790b36a27a1ca401fd95e' => 
    array (
      0 => 'backend/design/html/stats.tpl',
      1 => 1563433388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8040232565d301ade252d81-54119461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5d301ade2652d6_80191791',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d301ade2652d6_80191791')) {function content_5d301ade2652d6_80191791($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->stats_stats, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_stats, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap">
            <div id='container'></div>
        </div>
    </div>
</div>

<script>
    var stats_orders = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_orders, ENT_QUOTES, 'UTF-8', true);?>
';
    var stats_message = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_message, ENT_QUOTES, 'UTF-8', true);?>
';
    var stats_orders_amount =  '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->stats_orders_amount, ENT_QUOTES, 'UTF-8', true);?>
';
</script>

    <script src="design/js/highcharts/highcharts.js" type="text/javascript"></script>
    <script src="design/js/highcharts/themes/grid.js" type="text/javascript"></script>
    <script src="design/js/highcharts/modules/exporting.js" type="text/javascript"></script>

<script>
    var chart;
    $(function() {
        var options = {
            exporting: {
                chartOptions: { // specific options for the exported image
                    plotOptions: {
                        series: {
                            dataLabels: {
                                enabled: true
                            }
                        }
                    }
                },
                fallbackToExportServer: false
            },
            chart: {
                zoomType: 'x',
                renderTo: 'container',
                defaultSeriesType: 'area',
                type : "line"
            },
            title: {
                text: stats_orders
            },
            subtitle: {
                text: stats_message
            },
            xAxis: {
                type: 'datetime',
                minRange: 7 * 24 * 3600000,
                maxZoom: 7 * 24 * 3600000,
                gridLineWidth: 1,
                ordinal: true,
                showEmpty: false
            },
            yAxis: {
                title: {
                    text: '<?php echo $_smarty_tpl->tpl_vars['currency']->value->name;?>
'
                }
            },


            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: true,
                    connectNulls: false
                },
                area: {
                    marker: {
                        enabled: false
                    },
                }
            },
            series: []

        };

        $.get('ajax/stat.php', function(data){
            var series = {
                data: []
            };


            var minDate = Date.UTC(data[0].year, data[0].month-1, data[0].day),
                maxDate = Date.UTC(data[data.length-1].year, data[data.length-1].month-1, data[data.length-1].day);

            var newDates = [], currentDate = minDate, d;

            while (currentDate <= maxDate) {
                d = new Date(currentDate);
                newDates.push((d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear());
                currentDate += (24 * 60 * 60 * 1000); // add one day
            }
            series.name = stats_orders_amount + '<?php echo $_smarty_tpl->tpl_vars['currency']->value->sign;?>
';

            // Iterate over the lines and add categories or series
            $.each(data, function(lineNo, line) {
                series.data.push([Date.UTC(line.year, line.month-1, line.day), parseInt(line.y)]);
            });
            //
            options.series.push(series);

            // Create the chart
            var chart = new Highcharts.Chart(options);
        });
    });
    // Apply the theme
    var highchartsOptions = Highcharts.setOptions(Highcharts.theme);

</script>

<?php }} ?>
