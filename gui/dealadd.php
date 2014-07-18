<?php include("head.php"); ?> 
<body>
    <?php include("header.php"); ?>
    <?php
    include("../services/impliment/dealdao.php");
    include("../services/impliment/categoriedao.php");
    include("../domain/user.php");
//$categorieDao = new CategorieDao();
//$resultCategorie = $categorieDao->liste();
//$catDao->liste();

    $dealDao = new DealDao();
    $user = new User('Omar', 'Najar', 'omar', 'omar');
    $user->setLogin('mohamed');
    $resultSet = $dealDao->listePerso($user);
    $resultCategorie = $dealDao->listeCategorie();
    ?>


    <!-- Le corps -->

    <div class="container">

        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="page-header">
            <h1>List Of My Deals</h1>
        </div>
        <div class="col-md-6">
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
                            echo '  <td><button type="button" class="btn btn-lg btn-primary"  data-toggle="modal" data-target="#myModal">Update</button></td>';
                            echo ' </tr>';
                        }
                    } else {
                        for ($i = 0; $i < 5; $i++) {
                            ?>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>



                </tbody>
            </table>
        </div>


        <!-- Le pied de page -->


    </div> <!-- /container -->
    <div class="container">   
        <form class="form-actions text-center" method="post" action="dealaddAction.php">
            <h2 class="form-signin-heading">New Deal</h2>
            <p> <input type="text" class="input-xxlarge" name="name" placeholder="Name Deal"></p>
            <p> <input type="number" class="input-xxlarge" name="price"placeholder="Price Deal"></p>
            <p> <input type="text" class="input-xxlarge" name="owner" placeholder="Owner Deal"></p>
            <p> <input type="datetime-local" class="input-xxlarge" name="startDate" placeholder="Start Date Deal"></p>
            <p>  <input type="datetime-local" class="input-xxlarge" name="duration"placeholder="Duration Deal"></p>
            <p>   <input list="browsers"  class="input-xxlarge" name="category" placeholder="Category Deal"></p>
            <p>  <datalist id="browsers">
                    <?php
                    if ($resultCategorie->num_rows > 0) {
                        while ($row = $resultCategorie->fetch_object()) {
                            ?>
                            <option value="<?php echo $row->category; ?>">
                                <?php
                            }
                        }
                        ?>
                </datalist></p>
            <p>  <textarea cols="1" class="input-xxlarge" rows="8"  name="desc" placeholder="Descrption Deal" ></textarea>  </p>               

            <p> <button class="btn btn-large btn-primary" type="submit">Add Deal</button></p>
        </form>
    </div>
    <!-- /container -->
    <div class="container">   
        <?php include("footer.php"); ?>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-width="760">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Update Deal</h4>
                </div>
                <div class="modal-body text-center  ">
                    <div class="container " style=" width: 100%;">  
                        <form class="form-signin " method="post" action="dealaddAction.php">
<!--                            <h2 class="form-signin-heading"></h2>-->
                            <p> <input type="text" class="input-xxlarge" name="name" placeholder="Name Deal"></p>
                            <p> <input type="number" class="input-xxlarge" name="price"placeholder="Price Deal"></p>
                            <p> <input type="text" class="input-xxlarge" name="owner" placeholder="Owner Deal"></p>
                            <p> <input type="datetime-local" class="input-xxlarge" name="startDate" placeholder="Start Date Deal"></p>
                            <p> <input type="datetime-local" class="input-xxlarge" name="duration"placeholder="Duration Deal"></p>
                            <p> <input list="browsers"  class="input-xxlarge" name="category" placeholder="Category Deal"></p>
                            <p> <datalist id="browsers">
                                    <?php
                                    if ($resultCategorie->num_rows > 0) {
                                        while ($row = $resultCategorie->fetch_object()) {
                                            ?>
                                            <option value="<?php echo $row->category; ?>">
                                                <?php
                                            }
                                        }
                                        ?>
                                </datalist></p>
                            <p>  <textarea cols="1" class="input-xxlarge" rows="8"  name="desc" placeholder="Descrption Deal" ></textarea>  </p>               

                            <p> <button class="btn btn-large btn-primary" type="submit">Save changes</button></p>
                        </form> 
                    </div>
                    <!-- /container -->
                </div>
                <div class="modal-footer">
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Le javascript
    ================================================== -->    <!-- Placed at the end of the document so the pages load faster -->


</body>
</html>

