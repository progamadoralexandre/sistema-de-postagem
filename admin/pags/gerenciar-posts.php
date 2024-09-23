
<div class="col-12">
	
<h4>Visão geral</h4>
    <p>Apresentando dados de 27 Janeiro 2024 a 20 Fevereiro de 2024</p>
</div>
<div id="form-publicar" class="table-responsive">
	<table class="table custom-table">
		<thead>
		<tr>
			<th class="first">
                    <svg width="3" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#322D44"/>
                    </svg>  
					Id
			</th>
			<th>
                    <svg width="3" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#322D44"/>
                    </svg>  
					Titulo
			</th>
			<th>
                    <svg width="3" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#322D44"/>
                    </svg>  
					Data
			</th>
			<th>
                    <svg width="3" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#322D44"/>
                    </svg>  
				Gerenciar
			</th>
		</tr>
		</thead>

		<tbody>
		<?php
			$query = $con->prepare("SELECT * FROM posts ORDER BY id DESC");
			$query->execute();
			$get = $query->get_result();
			$total = $get->num_rows;
			if($total > 0){
				while($dados = $get->fetch_array()){
		?>
		<tr class="acoes">
			<td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
					<?php echo $dados['id'];?>
			</td>
			<td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
					<?php echo $dados['titulo'];?>
			</td>
			<td class="small">
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
					<?php echo $dados['data'];?>
				</td>
			<td>
                    <svg width="3" class="me-2" height="31" viewBox="0 0 3 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.80225 0.958806V30.8594H0.422985V0.958806H2.80225Z" fill="#B5B5C3"/>
                    </svg>
					<button id="dropdownbtn" type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" arial-expanded="false">Gerenciar</button>
			<div class="dropdown-menu" aria-labelledby="dropdownbtn">
				<a href="p/<?php echo $dados['id'];?>" class="dropdown-item">Ver Publicação</a>
				<a href="admin/editar-post/<?php echo $dados['id'];?>" class="dropdown-item">Editar Publicação</a>
				<a href="admin/deletar-post/<?php echo $dados['id'];?>" class="dropdown-item">Deletar Publicação</a>
			</div>

			</td>
		</tr>
	<?php }}?>
		</tbody>

	</table>
</div>

<style>
        .custom-table{
            thead{
                tr{
                    th{
                        background-color: #322D44;
                        padding: 15px;
                        border: none;
                        color: #fff;
                        font-size: 13px;
                        min-width: 200px;
                    }
                    .first{
                        border-radius: 8px 0 0 0;
                    }
                    .last{
                        border-radius: 0 8px 0 0;
                    }
                }
            }
            tbody{
                tr{
					background: #fff;
                    border-bottom: solid 1px #EAEAEA;
                    td{
                        padding: 15px;
                        font-size: 15px;
                        line-height: 22px;
                        color: #2F2B3DE5;
                        img{
                            width: 33px;
                            height: 33px;
                            border-radius: 4px;
                        }
                    }
                }
            }
        }
    
</style>