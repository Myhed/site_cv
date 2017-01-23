<?php $this->layout('Layout.admin.responsive', ['title' => 'Competences','LayoutLateralBar' => 'Compétence']);?>

<?php $this->start('main_content');?>
	
<?php $this->stop('main_content');?>

<?php $this->start('sidebar');?>
	<table class="table">
		<thead>
			<?php foreach($columns as $column):?>
					
				<th><?=$column['name']?></th>

			<?php endforeach;?>
			<th>Modifications</th>
			<th>upprimer</th>
			<th>Ajouter</th>
		</thead>
		<tbody>
		
			<?php foreach($datas_competence as $key => $c):?>
					
					
					<tr>
						<td><?=$c['id_competence']?></td>
						<td><?=$c['competence_titre']?></td>
						<td><?=$c['competence']?></td>
				<td><a href="<?=$this->url('Admin_modifier' , ['chemin' => 'Admin_competence','table' => $columns[0]['table'],'setPrimaryKey' => $columns[0]['name'],'id' => $c['id_competence']]) ?>" class="btn btn-warning btn-xs" >Modification</a></td>
				<td><a href="<?=$this->url('Admin_supprimer' , ['chemin' => 'Admin_competence','table' => $columns[0]['table'],'setPrimaryKey' => $columns[0]['name'],'id' => $c['id_competence']]) ?>" class="btn btn-danger btn-xs" >Supprimer</a></td>
				<td><a href="<?=$this->url('Admin_ajouter',['chemin' => 'Admin_competence','table' => $columns[0]['table']]);?>" class="btn btn-info btn-xs ">Ajouter</a></td>
					
				</tr>

			<?php endforeach;?>
		</tbody>
	</table>
<?php $this->stop('sidebar');?> 