
<?php include("head.php"); ?> 
<?php include("header.php"); ?>
<?php
include("../services/impliment/dealdao.php");
$dealDao = new DealDao();
$resultSet = $dealDao->liste();
//if ($resultSet->num_rows > 0) {
//    while ($row = $resultSet->fetch_object()) {
//        foreach ($row as $fieldValue) {
//            $bigString .= "<em>$fieldValue</em><br />\n";
//        }
//        $bigString .= "<hr />";
//    }
////    $this->dbh->close();
//    echo $bigString;
//}
?>


<!-- Le corps -->

<div class="container">

    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="page-header">
        <h1>Main page</h1>
    </div>
    <div class="col-md-6" style="min-height: 700px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name Deal</th>
                    <th>Description</th>
                    <th>price</th>  
                    <th>Category</th>
                    <th>Owner</th>  
                    <th>startDate</th>
                    <th>duration</th>
                    <th> </th>
                    <th> </th>
                    <th> </th>

                </tr>
            </thead>
            <tbody>
                <?php
                if ($resultSet->num_rows > 0) {
                    while ($row = $resultSet->fetch_object()) {
//                        foreach ($row as $fieldValue) {
                        echo '<tr> ';
                        echo "  <td>" . $row->id . "</td>";
                        echo "  <td>" . $row->name . "</td>";
                        echo "  <td>" . $row->desc . "</td>";
                        echo "  <td>" . $row->price . "</td>";
                        echo "  <td>" . $row->category . "</td>";
                        echo "  <td>" . $row->owner . "</td>";
                        echo "  <td>" . $row->startDate . "</td>";
                        echo "  <td>" . $row->duration . "</td>";
                        echo '  <td><button type="button" class="btn btn-lg btn-primary">Primary</button></td>';
                        echo '  <td><button type="button" class="btn btn-lg btn-info">View</button></td>';
                        echo '  <td><button type="button" class="btn btn-lg btn-success">Success</button></td>';
                        echo ' </tr>';
                    }
                }
                ?>



            </tbody>
        </table>
    </div>


    <!-- Le pied de page -->

    <?php include("footer.php"); ?>
</div> <!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=" js/jquery.js"></script>
<script src=" js/bootstrap-transition.js"></script>
<script src=" js/bootstrap-alert.js"></script>
<script src=" js/bootstrap-modal.js"></script>
<script src=" js/bootstrap-dropdown.js"></script><div id="woo_head" class="woo_content" style="display:none;"><script type="text/html" id="L-template"><iframe id="L-margin" name="L-margin"  class="woo_content_container woo_main_content" src="chrome-extension://hlngmmdolgbdnnimbmblfhhndibdipaf/images/loader.gif" style="display: block !important;"><p>Iframes not supported.</p></iframe></script><iframe id="L-margin" name="L-margin" class="woo_content_container woo_main_content" src="chrome-extension://hlngmmdolgbdnnimbmblfhhndibdipaf/images/loader.gif" style="display: block !important;">&lt;p&gt;Iframes not supported.&lt;/p&gt;</iframe><div id="woo_projected" class="woo_content_trigger hide_txt"><span style="display:none;"><em style="font-size:11px; font-style:normal; font-weight:bold;line-height:26px;text-indent:0;text-decoration:none;overflow:hidden;color:#fff;float:left;position:absolute;text-align:center;left:1px;top:0px;height:25px;width:22px;"></em></span><span class="loader L-loader" style="display:none;"><img class="" src="chrome-extension://hlngmmdolgbdnnimbmblfhhndibdipaf/images/loader.gif"></span><div id="woo_initiate" class="trigger_ctrl"><a id="clickable" href="javascript:void(0);" class="hide_txt" style="display:none;">Trigger</a></div></div><div class="woo_controllers upper_header"><a id="woo_hide" href="Javascript:void(0)" class="hide_margin hide_txt" title="Hide"><span style="background-image:url(chrome-extension://hlngmmdolgbdnnimbmblfhhndibdipaf/images/woo-cancel.png)">x</span></a></div></div>
<script src=" js/bootstrap-scrollspy.js"></script>
<script src=" js/bootstrap-tab.js"></script>
<script src=" js/bootstrap-tooltip.js"></script>
<script src=" js/bootstrap-popover.js"></script>
<script src=" js/bootstrap-button.js"></script>
<script src=" js/bootstrap-collapse.js"></script>
<script src=" js/bootstrap-carousel.js"></script>
<script src=" js/bootstrap-typeahead.js"></script>



</body>
</html>
