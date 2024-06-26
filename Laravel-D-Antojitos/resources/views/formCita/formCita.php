<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Cita</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<head>
    <style>
         {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    background-color: #d7f7ff;
    font-family: Arial, Helvetica, sans-serif;
}

.wrapper {
    background-color: #fff;
    width: 500px;
    padding: 25px;
    margin: 25px auto 0;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
}

.wrapper h2 {
    background-color: #fcfcfc;
    color: #21cdd3;
    font-size: 24px;
    padding: 10px;
    margin-bottom: 8px;
    text-align: center;
    border: 1px dashed #21cdd3;
}

.wrapper h4 {
    padding-bottom: 5px;
    color: #21cdd3;
}

.input_group {
    margin-bottom: 8px;
    width: 100%;
    position: relative;
    display: flex;
    flex-direction: row;
    padding: 5px 0;
}

.input_box {
    width: 100%;
    margin-right: 12px;
    position: relative;
}

.input_box:last-child {
    margin-right: 0;
}

.input_box .name {
    padding: 14px 10px 14px 50px;
    width: 100%;
    background-color: #fcfcfc;
    border: 1px solid #0003;
    outline: none;
    letter-spacing: 1px;
    transition: 0.3s;
    border-radius: 3px;
    color: #333;
}

.input_box .name:focus, .dob:focus {
    -webkit-box-shadow: 0 0 2px 1px #21cdd3;
    -moz-box-shadow: 0 0 2px 1px #21cdd3;
    box-shadow: 0 0 2px 1px #21cdd3;
    border: 1px solid #21cdd3;
}

.input_box .icon {
    width: 48px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    top: 0px;
    left: 0px;
    bottom: 0px;
    color: #333;
    background-color: #f1f1f1;
    border-radius: 2px 0 0 2px;
    transition: 0.3s;
    font-size: 20px;
    pointer-events: none;
    border: 1px solid #00000003;
    border-right: none;
}

.name:focus+.icon {
    background-color: #21cdd3;
    color: #fff;
    border-right: 1px solid #21cdd3;
    border: none;
    transition: 1s;
}

.dob {
    width: 30%;
    padding: 14px;
    text-align: center;
    background-color: #fcfcfc;
    transition: 0.3s;
    outline: none;
    border: 1px solid #c0bfbf;
    border-radius: 3px;
}

.radio {
    display: none;
}

.input_box label {
    width: 50%;
    padding: 13px;
    background-color: #fcfcfc;
    display: inline-block;
    float: left;
    text-align: center;
    border: 1px solid #c0bfbf;
}

.input_box label:first-of-type {
    border-top-left-radius: 3px;
    border-bottom-right-radius: 3px;
    border-right: none;
}

.input_box label:last-of-type {
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
}

.radio:checked+label {
    background-color: #21cdd3;
    color: #fff;
    transition: 0.5s;
}

.input_box button {
    width: 100%;
    background-color: #21cdd3;
    border: none;
    color: #fff;
    padding: 15px;
    border-right: 4px;
    font-size: 16px;
    transition: all 0.3s ease;
    border-radius: 8px;
}

.input_box button:hover {
    cursor: pointer;
    background-color: #05b1a3;
}
        
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Pide tu cita !!!</h2>
        <form action="" method="post">
            <!--Account Information Start-->
            <h4>Cuenta</h4>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Nombre cliente" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
                <div class="input_box">
                    <input type="text" placeholder="Name on Card" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="email" placeholder="Email Address" required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Lugar de encuentro" required class="name">
                    <i class="fa fa-map-marker icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="input_group">
                <div class="input_box">
                    <input type="text" placeholder="Ciudad" required class="name">
                    <i class="fa fa-institution icon"></i>
                </div>
            </div>

            <div class="input_group">
                <div class="input_box">
                    <div class="input_box">
                        <input type="number" placeholder="Fecha cita" required class="name">
                        <i class="fa fa-calendar icon" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="input_box">
                    <input type="number" placeholder="Hora cita" required class="name">
                    <i class="fa fa-calendar-o icon" aria-hidden="true"></i>
                </div>
            </div>
            <!--Account Information End-->


           


            <!--detalle de pago-->
            <div class="input_group">
                <div class="input_box">
                    <h4>Detalle de pago Cita</h4>
                    <input type="" name="pay" class="radio" id="bc1" checked>
                    
                    <input type="" name="pay" class="radio" id="bc2">
                    <label for="bc2"><span>
                            <i class="fa fa-cc-paypal"></i>Paypal</span></label>
                </div>
            </div>
             <!--fianl detalle de pago-->

            <div class="input_group">
                <div class="input_box">
                    <input type="tel" class="name" placeholder="Numero de Cuenta 1111-2222-3333-4444 BANCO SANTA CRUZ" checked>
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>
            </div>
            

            <div class="input_box">
                <input type="number" placeholder="Enter Amount" required class="name">
                <i class="fa fa-money icon" aria-hidden="true"></i>
            </div>
            <!--final de detalle de pago-->

            <div class="input_group">
                <div class="input_box">
                    <button type="submit">PAY NOW</button>
                </div>
            </div>

        </form>
    </div>

</body>

</html>
        