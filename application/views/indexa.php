<?php include 'Master.php' ?>
<div class="content">


<div id="page-wrapper" >
  <div class="row " >
    <div class="col-md-12 " style=" " >
      <div class="card">
      <div class="card-content">
        <h3 class="title text-center">Seleccione forma de registro</h3>
        <br />
        <div class="nav-center">
            <ul class="nav nav-pills nav-pills-info nav-pills-icons" role="tablist" >
                <!--color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"-->
                <li class="">
                    <a href="#re" role="tab" data-toggle="tab" >
                        <i class="fa fa-file-excel-o" aria-hidden="true"></i>Registro por medio de excel.
                    </a>
                </li>
                <li class="">
                    <a href="#ri" role="tab" data-toggle="tab">
                        <i class="fa fa-user"></i> Registro individual.
                    </a>
                </li>
            </ul>
        </div>
        </div>
        </div>
        <div class="tab-content">
          <?php include('Aprendices.php'); ?>
          <?php include('Aprendices2.php'); ?>
        </div>
    </div>
</div>
</div>

</div>
</div>
</div>
</div>
</body> 


<script src="public/js/Aprendices.js"></script>
