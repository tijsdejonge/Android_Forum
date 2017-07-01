<?php
include_once('../src/app/helpers_functions/helper_functions.php');
?>
<link rel="stylesheet" href="css/register.css" />
<button class="buttonback"><a href="index.php">go back</a></button>

    <div class="container main-content">
        <div class="row first-row">
            <div class="col s6 push-s3">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12" method="POST" action="../src/app/authentication/register_handler.php">
                                <h1 class="title">Registreren</h1>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="Username">Username</label>
                                        <br>
                                        <input id="Username" name="username" type="text" class="validate">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="Email">Email</label>
                                        <br>
                                        <input id="Email" name="email" type="text" class="validate">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="Password">Wachtwoord</label>
                                        <br>
                                        <input id="Password" type="password" name="password" class="validate">

                                    </div>
                                    <br>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light right" type="submit" name="action">Registreren
                                            <i class="material-icons right">send</i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

