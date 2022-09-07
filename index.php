<?php
require_once("sql/connect.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PersonalFin - Dashboard</title>
        <link rel="stylesheet" href="css/style.css"></link>
    </head>

    <body>
        <header>
            <nav>
                <div class="logo"><img src="img/secure-payment.png" width="50px"></div>
                <div class="nav-list"><span>Bruno Vidal</span></div>
            </nav>
        </header>
        <main>
            <section class="cards">
                <div class="card despesas"><p><img src="img/expenses.png" width="20px"> Total Mês </p> <p class="expense"><span class="expMonth"></span></p></div>
                <div class="card despesas"><p><img src="img/expenses.png" width="20px"> Total </p> <p class="expense"><span class="amExpMonth"></span></p></div>
                <div class="card entrada"><p><img src="img/joins.png" width="20px"> Total Mês </p> <p class="more"><span class="billedMonth"></span></p></div>
                <div class="card entrada"><p><img src="img/joins.png" width="20px"> Total </p> <p class="more"><span class="amBilled"></span></p></div>


            </section >

            <section class="info">
                                    

                <div class="table-container"></div>
            </section>
        </main>
        <aside>
            <ul class="list-main">
                <li><a class="list-item menu" id="menu1"><span class="sinal1">+</span>Etradas</a>
                    <ul class="list-main sub" id="submenu1">
                        <li><a class="list-item submenu" id="entradaAvulsa">Entrada Avulsa</a></li>
                        <li><a class="list-item submenu">Entrada Fixa</a></li>
                    </ul>
                </li>
                <li><a class="list-item menu" id="menu2"><span class="sinal2">+</span>Despesas</a>
                    <ul class="list-main sub" id="submenu2">
                        <li><a class="list-item submenu" id="despesaAvulsa">Despesa Avulsa</a></li>
                        <li><a class="list-item submenu">Despesa Fixa</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <footer>

        </footer>


        <div class="modalEntMont">

            <a href="#!" class="closebutton">X</a>

            <div class="msg"></div>
            <form method="POST" class="form-EntMont">
                <input type="text" name="title" placeholder="Title" id="title">
                <input type="date" name="date" id="date">
                <select name="reco" id="reco">
                    <option value="s">Single</option>
                    <option value="w">Weekly</option>
                    <option value="m">Monthy</option>
                    <option value="a">Annual</option>
                    <option value="o">Other</option>
                </select>
                <input type="number" step="0.1" name="amount" placeholder="R$ 0,00" id="amount">
                <textarea name="obs" rows="4" cols="50" maxlength="255" placeholder="Observation" id="obs"></textarea>
                <input type="hidden" name="dif" value="1" id="dif">
                <input type="submit" id="btn" value="Save">
            </form>
        </div>


        <div class="modalExp">

            <a href="#!" class="closebuttonExp">X</a>

            <div class="msgExp"></div>
            <form method="POST" class="form-Exp">
                <input type="text" name="title_Exp" placeholder="Title" id="title-Exp">
                <input type="date" name="date_Exp" id="date-Exp">
                <select name="reco_Exp" id="reco-Exp">
                    <option value="s">Single</option>
                    <option value="w">Weekly</option>
                    <option value="m">Monthy</option>
                    <option value="a">Annual</option>
                    <option value="o">Other</option>
                </select>
                <input type="number" step="0.1" name="amount_Exp" placeholder="R$ 0,00" id="amount-Exp">
                <textarea name="obs_Exp" rows="4" cols="50" maxlength="255" placeholder="Observation" id="obs-Exp"></textarea>
                <input type="hidden" name="dif_Exp" value="0" id="dif-Exp">
                <input type="submit" id="btn-Exp" value="Save">
            </form>
        </div>

        <script src="http://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="js/ajax.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </body>
    
</html>