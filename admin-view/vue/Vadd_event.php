
<div class="container">
    <h3>Ajouter Evenement</h3>
<form action="" method="post">


<div class="row">
    <div class="col">
   
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Nom :</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom" placeholder="Enter Nom" required >
     
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Debut :</label>
      <input type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp "   name="start"placeholder="HH:MM" required >
     
    </div>


    </div>
    <div class="col">
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Date : </label>
      <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="date" placeholder="Enter Nom" required <?php  if(isset($_GET['day'])){ if($_GET['mois']<10){ ?> value="<?php echo $_GET['year'].'-0'.$_GET['mois'].'-'.$_GET['day'] ?>" <?php } else { ?> value="<?php echo $_GET['year'].'-'.$_GET['mois'].'-'.$_GET['day'] ?>" <?php } }?>>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4" >Fin :</label>
      <input type="time" class="form-control" id="exampleInputEmail1"  name="end" aria-describedby="emailHelp" required>
     
    </div>
</div>
<div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4 "  placeholder="Entrer une Description">Description</label>
      <textarea type="text" class="form-control" name="des" rows="4" required></textarea >
    </div>
</div>
<div class="form-group">
<input type="hidden" class="form-control" id="exampleInputEmail1"  name="id" aria-describedby="emailHelp" value="<?php echo $_SESSION['id']; ?>" >
    </div>
    <br>

    <button type="submite" class="btn btn-success">AJouter</button>
</div>

</form>
</div>