<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
<form action="jeux" method="post">
 @csrf
 <div class="form-group">
 
<label for="exampleFormControlSelect1">TODO</label>

    <select class="form-control" id="exampleFormControlSelect1" name="note"> 
      <option>Victoire home</option>
      <option>Victoire away</option>
      <option>Nul</option>
    </select>
    

 </div>
  <button type="submit" class="btn btn-primary"> Valider</button>
  


</form>