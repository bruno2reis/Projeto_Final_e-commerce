<?php
require_once "funcoescarrinho.php";
require_once "membros.php";
?>

<!-- Título -->

<section class="container p-t-3">
	<div class="row">
		<div class="col-lg-12">
			<h3><span style="color: rgb(38,95,167)">Resultados da busca</span></h3>
		</div>
	</div>
</section>


<!-- Inserção dos resultados da busca -->
<div class="container">

<?php
$output='';
if(isset($_POST['search'])){
    $searchkey= $_POST['search'];

    $query = mysqli_query($connection,"SELECT * FROM tbl_product WHERE name LIKE '%$searchkey%' OR brand LIKE '%$searchkey%'") or die("Não foi possível efetuar a busca!");
    $count = mysqli_num_rows($query);

    if($count == 0){
		
		$output="Nenhum resultado foi encontrado. Tente novamente.";

			echo "$output";		

    }
    else{
        while($row=mysqli_fetch_array($query)){
            $name=$row['name'];
            $brand=$row['brand'];

            $output .='<div>'.$name.''.$brand.'</div>';

            echo "$output";

        }
    }
}
?>﻿

</div>