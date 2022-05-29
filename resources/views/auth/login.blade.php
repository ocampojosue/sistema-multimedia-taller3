<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
   <title>{{env('APP_NAME')}}</title>
   <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
   <link rel="icon" href="/escudo.ico" type="image/x-icon">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->
   <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
   <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
   <!-- END GLOBAL MANDATORY STYLES -->
   <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
   <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
   <style>
      /* modificado de form-1,css */
      .form-image .l-image {
         background-image: url('img/logo.png');
      }
      .form-form .terms-conditions {
         margin-top: 40px;
      }
      .form-form .form-form-wrap {
         max-width: 600;
      }
   </style>
</head>
<body class="form">
   <div class="form-container">
      <div class="form-form">
         <div class="form-form-wrap">
            <div class="form-container">
               <div class="form-content">
                  <h1 class="h2 text-center font-weight-bold">SISTEMA MULTIMEDIA DE LA UNIDAD EDUCATIVA YACUIBA</h1>
                  <form method="POST" action="{{route('login')}}">
                     @csrf
                     <div class="form">
                        <div id="username-field" class="field-wrapper input">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-user">
                              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                              <circle cx="12" cy="7" r="4"></circle>
                           </svg>
                           <input id="username" name="username" type="text" class="form-control" placeholder="Ingresar su Nombre de Usuario">
                        </div>
                        <div id="password-field" class="field-wrapper input mb-2">
                           <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                              fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round" class="feather feather-lock">
                              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                           </svg>
                           <input id="password" name="password" type="password" class="form-control"
                              placeholder="Ingresar su Contraseña">
                        </div>
                        <div class="d-sm-flex justify-content-between">
                           <div class="field-wrapper toggle-pass">
                              <p class="d-inline-block">Mostrar contraseña</p>
                              <label class="switch s-primary">
                                 <input type="checkbox" id="toggle-password" class="d-none">
                                 <span class="slider round"></span>
                              </label>
                           </div>
                           <div class="field-wrapper">
                              <button type="submit" class="btn btn-primary" value="">Ingresar</button>
                           </div>
                        </div>
                        <div class="field-wrapper text-center keep-logged-in">
                           <div class="n-chk new-checkbox checkbox-outline-primary">
                              <label class="new-control new-checkbox checkbox-outline-primary">
                                 <input type="checkbox" class="new-control-input">
                                 <span class="new-control-indicator"></span>Mantenme conectado
                              </label>
                           </div>
                        </div>

                     </div>
                  </form>
                  <p class="terms-conditions">
                     © 2022 Todos los derechos reservados U.A.J.M.S. Desarrollado con <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="red" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-heart">
                        <path
                           d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                        </path>
                     </svg> por <a target="__blank" href="https://www.facebook.com/josue.ocampo.9883">Univ. Josué
                        Ocampo</a>
                  </p>
               </div>
            </div>
         </div>
      </div>
      <div class="form-image">
         <div class="l-image">
         </div>
      </div>
   </div>
   <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
   <script src="bootstrap/js/popper.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
   <!-- END GLOBAL MANDATORY SCRIPTS -->
   <script src="assets/js/authentication/form-1.js"></script>
</body>

</html>