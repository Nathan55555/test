
<form action="" method="post">
<div class="container">
    <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <br>
                
                <div class="alert alert-secondary" role="alert" style="text-align:center;">
 Information Client 
</div>
                </div>
            </div>
       
        </div>
    </div>
<div class="row">
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Nom :</label>
      <input type="text" class="form-control"  name="nom" value="<?php echo $f[0]['Nom']; ?>">
      <label for="exampleInputPassword1" class="form-label mt-4">Adresse</label>
      <input type="text" name="adresse" class="form-control" id="exampleInputPassword1" value="<?php if(isset($f[0]['ad']))  { echo $f[0]['ad']; }?>">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Situation Familial</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="situation_f" value="<?php if(isset($f[0]['sit']))  { echo $f[0]['sit']; }?>" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Age Mr</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="age_mr" value="<?php if(isset($f[0]['age_mr']))  { echo $f[0]['age_mr']; }?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Proffesion Mme</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="pro_mme" value="<?php if(isset($f[0]['pro_mme']))  { echo $f[0]['pro_mme']; }?>">
    </div>
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Email</label>
      <input type="text" name="email" class="form-control" id="exampleInputPassword1" value="<?php if(isset($f[0]['email']))  { echo $f[0]['email']; } ?>">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Ville</label>
      <input type="text" name="ville" class="form-control" id="exampleInputPassword1" value="<?php if(isset($f[0]['ville']))  { echo $f[0]['ville']; }?>">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Enfants a charge</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="enfants" value="<?php if(isset($f[0]['enfants']))  { echo $f[0]['enfants']; }?>" >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Age Mme</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="age_mme" value="<?php if(isset($f[0]['age_mme']))  { echo $f[0]['age_mme']; }?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Ref avis :</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="ref" value="<?php if(isset($f[0]['ref']))  { echo $f[0]['ref']; }?>">
    </div> 
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Téléphone</label>
      <input type="text" name="phone" class="form-control"  id="exampleInputPassword1" value="<?php echo $f[0]['Num']; ?>">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Code Postal</label>
      <input type="text" name="cp"class="form-control"  id="exampleInputPassword1" value="<?php echo $f[0]['cp']; ?>">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Numéro fiscal</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="num_f" value="<?php if(isset($f[0]['num_f']))  { echo $f[0]['num_f']; }?>">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Profession Mr</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="pro_mr" value="<?php if(isset($f[0]['pro_mr']))  { echo $f[0]['pro_mr']; }?>">
    </div>
    </div> 
     <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <br>
                
                    <div class="alert alert-secondary" role="alert" style="text-align:center;">
 Informations Maison
</div>
                </div>
            </div>
       
        </div>
    </div>

  </div>

<div class="row">
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Propriétaire depuis :</label>
      <input type="date" class="form-control" id="exampleInputPassword1" >
      <label for="exampleInputPassword1" class="form-label mt-4">Consomation:</label>
      <input type="text" class="form-control" name="conso" id="exampleInputPassword1" value="<?php echo $f[0]['Conso']; ?>" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Age Chaudiere</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> 
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Superficie</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Mode de chauffage</label>
      <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $f[0]['mode_c']; ?>" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Planchet chauffant</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
 
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Age de la maison:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Materiaux Radiateur</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div> 
    </div>
    <!-- <div class="container">
        <div class="container">
            <div class="container">
                <div class="container">
                    <br>
                
                    <div class="alert alert-secondary" role="alert" style="text-align:center;">
 Informations Revenue
</div>
                </div>
            </div>
       
        </div>
    </div>
    <div class="row">
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Prime Rénovation :</label>
      <input type="date" class="form-control" id="exampleInputPassword1" >
      <label for="exampleInputPassword1" class="form-label mt-4">Consomation:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Age Chaudiere</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> 
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Prime CEE</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Mode de chauffage</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Planchet chauffant</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
 
    </div>
    <div class="col-sm">
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Revenue:</label>
      <input type="password" class="form-control" id="exampleInputPassword1" >
    </div> <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Materiaux Radiateur</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div> -->
    </div>
    <br>
    <button type="submite" class="btn btn-success">Success</button>

</div> 
</div> 
<br>



</form>
<br>