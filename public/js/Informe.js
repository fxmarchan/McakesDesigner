$(document).ready(function() {

    // document.getElementById('example_length').style.display = 'none';
    // document.getElementById('example_filter').style.display = 'none';
    // document.getElementById('example_info').style.display = 'none';
    // document.getElementById('example_paginate').style.display = 'none';

    var table = $('#TablaDatos').DataTable({
        orderCellsTop: true,
        fixedHeader: true,
        "createdRow": function(row, data, index) {
            //pintar una celda
            if (data[5] >= 1000) {
                /* $('td', row).eq(5).css({
                    'background-color':'#ff5252',
                    'color':'white', 
                }); */

                //pintar una fila
                $('td', row).css({
                    'background-color': '#ff5252',
                    'color': 'black',
                    'border-style': 'solid',
                    'border-color': '#bdbdbd'
                });
            }
        },
        "drawCallback": function() {
            //alert("La tabla se está recargando"); 
            var api = this.api();
            $(api.column(9).footer()).html(
                'Total: ' + api.column(9, {
                    page: 'current'
                }).data().sum()
            )
            $(api.column(11).footer()).html(
                'Total: ' + api.column(11, {
                    page: 'current'
                }).data().sum()
            )
            $(api.column(12).footer()).html(
                'Total: ' + api.column(12, {
                    page: 'current'
                }).data().sum()
            )
            $(api.column(13).footer()).html(
                'Total: ' + api.column(13, {
                    page: 'current'
                }).data().sum()
            )
            $(api.column(14).footer()).html(
                'Total: ' + api.column(14, {
                    page: 'current'
                }).data().sum()
            )
        }
    });

    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#TablaDatos thead tr').clone(true).appendTo('#TablaDatos thead');

    $('#TablaDatos thead tr:eq(1) th').each(function(i) {
        var title = $(this).text(); //es el nombre de la columna
        $(this).html('<input type="text" style="width: 61px" />');

        $('input', this).on('keyup change', function() {
            if (table.column(i).search() !== this.value) {
                table
                    .column(i)
                    .search(this.value)
                    .draw();
            }
        });
    });
});
function ocultar(){

    let bot0 = document.getElementById('bot0');
    let bot1 = document.getElementById('addParam');
    let bot2 = document.getElementById('showResults');
    let bot3 = document.getElementById('resetgrap');
    let form = document.getElementById('box');
    
    bot0.style.display = 'none';
    bot1.style.display = 'none';
    bot2.style.display = 'none';
    bot3.style.display = 'none';
    form.submit();
}
