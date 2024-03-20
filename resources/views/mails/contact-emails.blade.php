<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
            height: auto;
        }

        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .info-table td {
            padding: 8px; /* Ajustar el padding para reducir el espacio */
            border-bottom: 1px solid #dddddd;
            color: #333333;
        }

        .info-table td:first-child {
            font-weight: bold;
            width: 100%;
        }
        .info-table td:first-child span{
            font-weight: normal;
            margin-right: 10px;
            margin-top: 10px;
        }
        .message p {
            color: #333333;
            margin-bottom: 10px;
            margin-top: 10px;
            padding: 8px;
            line-height: 1.5em;
        }

        /* Reglas de medios para hacer responsive el diseño */
        @media only screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
            .logo img {
                max-width: 150px;
            }
            .info-table td {
                padding: 10px;
            }
            .info-table td:first-child span {
                margin-top: 3px;
                
            }

        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://b93c35af31.imgdist.com/pub/bfra/q58p54r2/g8k/s6v/g2z/logo.png" alt="Logo">
        </div>
        <table class="info-table">
            <tr>
                <td>Nombre:  <span>{{$data->name}}</span></td>
                <td></td>
            </tr>
            <tr>
                <td>Apellido: <span>{{$data->last_name}}</span></td>
                <td></td>
            </tr>
            <tr>
                <td>Correo: <span>{{$data->email}}</span></td>
                <td></td>
            </tr>
            <tr>
                <td>Teléfono: <span>{{$data->phone}}</span></td>
                <td></td>
            </tr>
 
        </table>
        <div class="message">
            <p><strong>Mensaje:</strong>{{$data->message}}</p>
        </div>
    </div>
</body>
</html>
