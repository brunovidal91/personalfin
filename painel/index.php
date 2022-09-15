<?php
require_once("../sql/connect.php");
require_once("protect.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $system_name .' - Dashboard' ?></title>
        <link rel="stylesheet" href="../css/style.css"></link>
        <link rel="shortcut icon" href="../img/secure-payment.png" >
    </head>

    <body>
        <header>
            <nav>
                <div class="logo"><img src="../img/secure-payment.png" width="50px"></div>
                <div class="nav-list">
                    <span class="drop" id="drop"><?php echo @$_SESSION['name'] .' '. @$_SESSION['lastname'] ?></span>
                    <a href="#!" class="mobile-menu" id="mobile-menu">
                        <div class="line"></div>
                        <div class="line"></div>
                        <div class="line"></div>

                    </a>


                

                </div>

                    <div class="modalUser">
                    <a href="#!" class="editUserButton">Edit</a>
                        <a href="logout.php" class="logoutButton">Logout</a>
                        
                    </div>

            </nav>
        </header>
        <main>
            <section class="cards">
                <div class="card despesas"><p><img src="../img/expenses.png" width="20px"> Total Month </p> <p class="expense"><span class="expMonth"></span></p></div>
                <div class="card despesas"><p><img src="../img/expenses.png" width="20px"> Total </p> <p class="expense"><span class="amExpMonth"></span></p></div>
                <div class="card entrada"><p><img src="../img/joins.png" width="20px"> Total Month </p> <p class="more"><span class="billedMonth"></span></p></div>
                <div class="card entrada"><p><img src="../img/joins.png" width="20px"> Total </p> <p class="more"><span class="amBilled"></span></p></div>


            </section >

            <section class="info">
                                    

                <div class="table-container"></div>
            </section>
        </main>
        <aside>
            <ul class="list-main">
                <li><a class="list-item menu" id="menu1"><span class="sinal1">+</span>Profit</a>
                    <ul class="list-main sub" id="submenu1">
                        <li><a class="list-item submenu singleProfit" id="singleProfit">Single Profit</a></li>
                        <li><a class="list-item submenu">Fixed Profit</a></li>
                    </ul>
                </li>
                <li><a class="list-item menu" id="menu2"><span class="sinal2">+</span>Expenditure</a>
                    <ul class="list-main sub" id="submenu2">
                        <li><a class="list-item submenu singleExpenditure" id="singleExpenditure">Single Expenditure</a></li>
                        <li><a class="list-item submenu">Fixed Expenditure</a></li>
                    </ul>
                </li>
            </ul>
        </aside>
        <footer>
            <div class="credits"><span>Developed by Bruno Vidal</span></div>
        </footer>


        <div class="modalEntMont">

            <a href="#!" class="closebutton">X</a>

            <div class="msg"></div>
            <form method="POST" class="form-EntMont">
                <input type="text" name="title" placeholder="Title" id="title">
                <input type="date" name="date" id="date" value="<?php echo date('Y-m-d') ?>">
                <select name="reco" id="reco">
                    <option value="s">Single</option>
                    <option value="w">Weekly</option>
                    <option value="m">Monthy</option>
                    <option value="a">Annual</option>
                    <option value="o">Other</option>
                </select>
                <input type="number" step="0.01" name="amount" placeholder="R$ 0,00" id="amount">
                <textarea name="obs" rows="4" cols="50" maxlength="255" placeholder="Observation" id="obs"></textarea>
                <input type="hidden" name="dif" value="1" id="dif">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>" id="id_user">
                <input type="submit" id="btn" value="Save">
            </form>
        </div>


        <div class="modalExp">

            <a href="#!" class="closebuttonExp">X</a>

            <div class="msgExp"></div>
            <form method="POST" class="form-Exp">
                <input type="text" name="title_Exp" placeholder="Title" id="title-Exp">
                <input type="date" name="date_Exp" id="date-Exp" value="<?php echo date('Y-m-d'); ?>">
                <select name="reco_Exp" id="reco-Exp">
                    <option value="s">Single</option>
                    <option value="w">Weekly</option>
                    <option value="m">Monthy</option>
                    <option value="a">Annual</option>
                    <option value="o">Other</option>
                </select>
                <input type="number" step="0.01" name="amount_Exp" placeholder="R$ 0,00" id="amount-Exp">
                <textarea name="obs_Exp" rows="4" cols="50" maxlength="255" placeholder="Observation" id="obs-Exp"></textarea>
                <input type="hidden" name="dif_Exp" value="0" id="dif-Exp">
                <input type="hidden" name="id_user" value="<?php echo $_SESSION['id'] ?>" id="id_user">
                <input type="submit" id="btn-Exp" value="Save">
            </form>
        </div>

        <div class="modalEditUser">
            <div class="msgEdit">MSG</div>
            <form action="edit.php" method="POST" class="form-edit-user" id="form-edit-user">
                <div>
                    <input type="text" id="name" value="<?php echo $_SESSION['name'] ?>">
                    <input type="text" id="lastname" value="<?php echo $_SESSION['lastname'] ?>">
                </div>
                <div>
                    <input type="email" id="email" value="<?php echo $_SESSION['email'] ?>" >
                    <input type="text" id="level" value="<?php echo $_SESSION['level'] ?>" disabled>
                </div>
                <div>
                    <input type="password" id="pass1" placeholder="password..." value="<?php echo $_SESSION['pass']?>">
                    <input type="password" id="pass2" placeholder="confirm password..." autocomplete="off">
                </div>
               
                <input type="hidden" id="id" value="<?php echo $_SESSION['id']?>">
                <input type="submit" value="Save">
            </form>
            <div class="closeButton-edit-user">X</div>
        </div>

        <div class="modalMobile" id="modalMobile">

            <div class="insert-list">
                <a  href="#!" class="singleProfitMobile"><img src="../img/joins.png" width="20px"> Single Profit</a>
                <a href="#!" class="singleExpenditureMobile"><img src="../img/expenses.png" width="20px"> Single Expenditure</a>
            </div>

            <div class="options-list">
                <a href="#!" class="editUserButtonMobile">Edit</a>
                <a href="logout.php" class="logoutButton">Logout</a>
            </div>

        </div>

        <script  src="http://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script  src="../js/ajax.js"></script>
        <script type="text/javascript" src="../js/script.js"></script>
    </body>
    
</html>