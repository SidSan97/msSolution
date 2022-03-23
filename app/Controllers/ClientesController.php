<?php
   require('../Models/conexao.php');
   
   $draw            = $_POST['draw'];
   $row             = $_POST['start'];
   $rowperpage      = $_POST['length']; 
   $columnIndex     = $_POST['order'][0]['column']; 
   $columnName      = $_POST['columns'][$columnIndex]['data']; 
   $columnSortOrder = $_POST['order'][0]['dir']; 
   $searchValue     = $_POST['search']['value']; 

   $searchArray = array();

   // Search
   $searchQuery = " ";
   if($searchValue != '')
   {
      $searchQuery = " AND (nome LIKE :nome OR 
           email LIKE :email OR
           cpf   LIKE :cpf   OR 
           data_cadastro LIKE :data_cadastro ) ";

      $searchArray = array( 
           'nome' =>"%$searchValue%",
           'email'=>"%$searchValue%",
           'cpf'  =>"%$searchValue%",
           'data_cadastro'=>"%$searchValue%"
      );
   }

   $sql = $conn->prepare("SELECT COUNT(*) AS allcount FROM clientes ");
   $sql->execute();
   $records = $sql->fetch();
   $totalRecords = $records['allcount'];

   $sql = $conn->prepare("SELECT COUNT(*) AS allcount FROM clientes WHERE 1 ".$searchQuery);
   $sql->execute($searchArray);
   $records = $sql->fetch();
   $totalRecordwithFilter = $records['allcount'];

   $sql = $conn->prepare("SELECT * FROM clientes WHERE 1 ".$searchQuery." ORDER BY ".$columnName." ".$columnSortOrder." LIMIT :limit,:offset");

   foreach ($searchArray as $key=>$search) {
      $sql->bindValue(':'.$key, $search,PDO::PARAM_STR);
   }

   $sql->bindValue(':limit', (int)$row, PDO::PARAM_INT);
   $sql->bindValue(':offset', (int)$rowperpage, PDO::PARAM_INT);
   $sql->execute();
   $empRecords = $sql->fetchAll();

   $data = array();

   foreach ($empRecords as $row) 
   {
      $data[] = array(
         "nome"  =>$row['nome'],
         "email" =>$row['email'],
         "cpf"   =>$row['cpf'],
         "data_cadastro"=>$row['data_cadastro']
      );
   }

   // Response
   $response = array(
      "draw" => intval($draw),
      "iTotalRecords" => $totalRecords,
      "iTotalDisplayRecords" => $totalRecordwithFilter,
      "aaData" => $data
   );

   echo json_encode($response);