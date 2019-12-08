<!DOCTYPE html>
<html lang="en">

<head>
    <title>PERFIL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>

<body>

    <div class="container">

        <ul class="nav nav-tabs">

            <li><a data-toggle="tab" href="#Perfil">Perfil</a></li>
            <li><a data-toggle="tab" href="#MisCalificaciones">Mis Calificaciones</a></li>
        </ul>

        <div class="tab-content">

            <div id="Perfil" class="tab-pane fade">
                <div class="modal-dialog text-center">
                    <div class="col-sm-8">
                        <div class="modal-content">
                            <div class="col-12">
                                <img src="avatar.jpg">

                            </div>

                            <form class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Matricula">
                                    <input type="text" class="form-control" placeholder="Nombre">
                                    <input type="text" class="form-control" placeholder="Apellidos">
                                    <input type="text" class="form-control" placeholder="Sexo">
                                    <input type="text" class="form-control" placeholder="Fecha De Nacimiento">
                                    <input type="tel" class="form-control" placeholder="Telefono">
                                    <input type="email" class="form-control" placeholder="Correo">
                                    <input type="password" class="form-control" placeholder="Nip">

                                </div>


                            </form>
                        </div>

                    </div>

                </div>


            </div>


            <div id="MisCalificaciones" class="tab-pane fade">

                <form class="form-inline" action="/action_page.php">


                    <div class="row border">

                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="TRIMESTRE"> TRIMESTRE: </label>
                                <select name="select1" id="select1" class="form-control">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label for="PARCIAL"> PARCIAL: </label>
                                <select name="select1" id="select1" class="form-control">
                                    <option value="1"> 1 </option>
                                    <option value="2"> 2 </option>
                                    <option value="3"> 3 </option>
                                </select>


                            </div>
                        </div>

                        <table border="1" class="table table-striped">

                            <tr class="bg-warning">


                                <th><mark> ID </mark></th>
                                <th><mark> MATERIA </mark></th>
                                <th><mark> DOCENTE </mark></th>
                                <th><mark> CALIFICACION </mark></th>


                            </tr>


                            <tr class="bg">

                                <td><b> 1 </b></td>
                                <td><b> INGLES </b></td>
                                <td><b> CALEB GOMEZ </b></td>
                                <td><b> 8 </b></td>


                            </tr>


                            <tr class="bg">

                                <td><b> 2 </b></td>
                                <td><b> ESPAÑOL </b></td>
                                <td><b> HUGO HERNANDEZ </b></td>
                                <td><b> 9 </b></td>


                            </tr>
                            <tr class="bg">

                                <td><b> 3 </b></td>
                                <td><b> CALCULO </b></td>
                                <td><b> EDUARDO MEJIA</b></td>
                                <td><b> 7 </b></td>


                            </tr>

                            <tr class="bg">
                                <td><b> 4 </b></td>
                                <td><b> FISICA </b></td>
                                <td><b> CESAR GUTIERREZ</b></td>
                                <td><b> 10 </b></td>




                            </tr>
                            <tr class="bg">
                                <td><b> 5 </b></td>
                                <td><b> EXPRESION ORAL Y ESCRITA </b></td>
                                <td><b> LUIS MARTINEZ</b></td>
                                <td><b> 10 </b></td>




                            </tr>


                        </table>

                    </div>
                </form>
            </div>



        </div>



    </div>



</body>

</html>