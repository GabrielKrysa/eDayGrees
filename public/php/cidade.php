<?php 

use Illuminate\Support\Facades\DB;

$estado_id = $_POST['id'];

$queryM = DB::table('cidade')
            ->where('estado_id', '=' , $estado_id)
            ->get();

            for($i = 0; i < count($queryM); $i++){
                $html = "<option value='".$queryM[$i]->$id."'>".$queryM[$i]->nome."</option>";
            }

            echo $html;
            var_dump($html);
            
            console.log(ffefe);

?>