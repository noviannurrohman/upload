   <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>ORDERS OVERVIEW</h2>
                        </div>
                        <div class="body">
                            <button data-color="red" type="button" class="btn bg-red waves-effect m-r-20" data-toggle="modal" data-target="#myModal">Order!</button>
                            
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Domain</th>
                                        <th>API Key</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Domain</th>
                                        <th>API Key</th>
                                        <th>Date</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                                 <tbody>
                                 <!--    <?php  
                                        for ($i=0; $i < sizeof($hasil2); $i++) {
                                            echo '<tr>'; 
                                            for ($j=0; $j < sizeof($col2); $j++) {
                                                echo '<td>'.$hasil2[$i][$col2[$j]].'</td>';
                                            }
                                            echo '</tr>';
                                        }
                                    ?> -->
                                      <?php  
                                        for ($i=0; $i < sizeof($hasil2); $i++) {
                                            echo '<tr>'; 
                                            for ($j=0; $j < sizeof($col2); $j++) {
                                                if ($j == 0) 
                                                    echo '<td> <span data-toggle="modal" data-target="#myModal">ORD-'.$hasil2[$i][$col2[$j]].'</span></td>';
                                                else{
                                                    if($j == sizeof($col2)-1){
                                                        if ($hasil2[$i][$col2[$j]] == 1) 
                                                            echo '<td><span class="label bg-green">Verified</span></td>';
                                                        elseif($hasil2[$i][$col2[$j]] == 0) 
                                                            echo '<td><span class="label bg-yellow">Pending</span></td>';               
                                                    }
                                                    else
                                                        echo '<td>'.$hasil2[$i][$col2[$j]].'</td>';
                                                }
                                            }
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
    <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                AVAILABLE API
                            </h2>
                        </div>
                        <div class="body">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Owner</th>
                                        <th>Domain</th>
                                        <th>API Key</th>
                                        <th>Last Used</th>
                                        <th>Last IP</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php  
                                        for ($i=0; $i < sizeof($hasil); $i++) {
                                            echo '<tr>'; 
                                            for ($j=0; $j < sizeof($col); $j++) {
                                                if ($j == 0) 
                                                    echo '<td> <a target="_blank" href="http://ubig.co.id">ORD-'.$hasil[$i][$col[$j]].'</a></td>';
                                                else{
                                                    if($j == sizeof($col)-1)
                                                        echo '<td><span class="label bg-blue">Ready</span></td>';
                                                    else
                                                        echo '<td>'.$hasil[$i][$col[$j]].'</td>';
                                                }
                                            }
                                            echo '</tr>';
                                        }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id Order</th>
                                        <th>Owner</th>
                                        <th>Domain</th>
                                        <th>API Key</th>
                                        <th>Last Used</th>
                                        <th>Last IP</th>
                                        <th>Status</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>
     <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <?php echo form_open('', array('id' => 'form', 'role' => 'form')) ?>
       <div style="display:none">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
        </div>
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Request new API for your site</p>
              <div class="form-group">
                <label for="input_domain">Domain's Name</label>
                  <input type="text" class="form-control"
                  name="input_domain" id="input_domain" placeholder="Enter domain" required/>
              </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default"data-dismiss="modal">
            Close
            </button>
            <button id="btnSave" onclick="save()" type="button" class="btn btn-primary">
            Save 
            </button>
        </div>
      <?php echo form_close() ?>
      </div> 
    </div>
</div>