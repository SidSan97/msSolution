$(document).ready(function() {
    $('#jquery-datatable-ajax-php').DataTable({
          'processing': true,
          'serverSide': true,
          'serverMethod': 'post',
          'ajax': {
              'url':'http://localhost/msSolution/public/Controller/ClientesController.php'
          },
          'columns': [
             { data: 'nome' },
             { data: 'email' },
             { data: 'cpf' },
             { data: 'data_cadastro' }
          ]
   });

} );