
<html lang="pt-br">  
<head>  
<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1.0">  
<title>SISTEMA DE FILMES</title>  
<link href="css.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">  
<link href="css/bootstrap.css" rel="stylesheet">  
<link href="css/bootstrap-responsive.css" rel="stylesheet">  
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">  
<script src="http://code.jquery.com/jquery-latest.js"></script>  
<script src="js/bootstrap.min.js"></script>

<div id="header">
		<h2><img src="imagens/logo.png"></h2>
		<h2><img src="imagens/texto.png" height="60px" width="300px"></h2>	





		<form class="form-inline" action="php/insert.php" method="POST">
  			
        <div class="form-group">

   				<label class="sr-only" for="Nome">Nome</label>
          <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome">

    			<label class="sr-only" for="diretor">Diretor</label>
    			<input name="diretor" id="diretor" type="text" class="form-control" placeholder="Diretor">
          

   				<label class="sr-only" for="nota">Nota</label>
    			<input name="nota" id="nota" type="text" class="form-control" placeholder="Nota">


          <button type="submit" name="inseri" id="inseri" value="inseri" class="btn btn-danger">Salvar</button>

  			</div>
		</form>
	</div>


<br></br>
<br></br>



<div id="list" >

<table border="1" class="table-responsive col-md-12">
  <thead>
  <tr class="primeira">
    <th>Nome</th> 
    <th>Diretor</th> 
    <th>Nota</th> 
    <th>Alteracoes</th>
  </tr>
  </thead>



  <tbody>


  <tr class="segunda">
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td class="actions">
    <a class="btn btn-default" href="#" role="button" href="edit.html">Editar</a>
	<a class="btn btn-default" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></td>
  	</tr>

    <tr class="segunda">
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td class="actions">
    <a class="btn btn-default" href="#" role="button" href="edit.html">Editar</a>
	<a class="btn btn-default" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></td>
  	</tr>

    <tr class="segunda">
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td> Filme 1</td>
    <td class="actions">
    <a class="btn btn-default" href="#" role="button" href="edit.html">Editar</a>
	<a class="btn btn-default" href="#" data-toggle="modal" data-target="#delete-modal">Excluir</a></td>
  	</tr>

</tbody>

</table>
</div>

<div id="bottom" class="row">
    <div class="col-md-12">
         
        <ul class="pagination">
            <li class="disabled"><a>&lt; Anterior</a></li>
            <li class="disabled"><a>1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
        </ul><!-- /.pagination -->
 
    </div>
</div> <!-- /#bottom -->

<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">Deseja realmente excluir este item? </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>


</body>
</html>
