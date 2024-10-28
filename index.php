<?php include 'log/header.php'?>


<div
    class="container" style=" margin-top:25px"
>
    

    <div
        class="table-responsive" 
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
</svg></th>
                    <th scope="col">Lunes</th>
                    <th scope="col">Martes</th>
                    <th scope="col">Miercoles</th>
                    <th scope="col">Jueves</th>
                    <th scope="col">Viernes</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Productos</td>
                    <td id="demo1"> </td>
                    <td id="demo2"> </td>
                    <td id="demo3"></td>
                    <td id="demo4"></td>
                    <td id="demo5"></td>
                </tr>
                <tr class="">
                    <td scope="row">Gastos</td>
                    <td id="gasto1"></td>
                    <td id="gasto2"></td>
                    <td id="gasto3"></td>
                    <td id="gasto4"></td>
                    <td id="gasto5"></td>
                </tr>
            </tbody>
        </table>
    </div>
    <button type="button" class="btn btn-danger" onclick="function1()" >MIS COMPRAS</button>
    
    <div style="padding:20px; background-color:beige; border:2px solid black; height:200px; width: 400px;  float: inline-end;">
    <p style="text-align:center">Gastos Semanales:</p>
    <br>
    <p id="totalGasto">Gastos Totales:</p>
    </div>

    
</div>



<?php include 'log/footer.php'?>