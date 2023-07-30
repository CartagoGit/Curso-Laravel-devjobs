 <!-- resources/views/emails/verify-email.blade.php -->
 <html>

 <head>
     <style>
         /* Estilos CSS para el correo electrónico */
         html,
         body {
             font-family: Arial, Helvetica, sans-serif !important;
             font-size: 16px !important;
             line-height: 1.6 !important;
             margin: 0 !important;
             padding: 0 !important;
             background: #ccc !important;
         }

         .title {
             font-size: 2.25rem;
             line-height: 2.5rem;
             --tw-text-opacity: 1;
             color: #3d4852;
             margin: 20px 0;
         }

         .subtitle {
             font-weight: 800;
         }

         .container {
             width: 100%;
             display: flex;
             align-items: center;
             justify-content: center;
             flex-direction: column;
         }

         .card {
             margin: 0 40px;
             background: #eee;
             border: 1px solid #777;
             border-radius: 8px;
             padding: 20px;
         }

         .container-button {
             display: flex;
             align-items: center;
             justify-content: center;
             width: 100%;
             margin: 20px 0;
         }

         .button {
             background-color: rgb(88 28 135);
             border: solid 3px #333;
             color: white;
             padding: 15px 15px;
             text-align: center;
             text-decoration: none;
             display: inline-block;
             font-size: 16px;
             margin: 4px 2px;
             cursor: pointer;
             border-radius: 8px;
             transition: 0.3 all ease;
             box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.2);
         }

         .button:hover {
             background-color: rgb(88 28 135);
             opacity: 0.8;
         }

         footer {
             width: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
         }

         .extra-info {
            margin-top: 20px;
             width: 100%;
             display: flex;
             justify-content: center;
             align-items: center;
             flex-direction: column;
         }

         .extra-info>a {
             text-decoration: none !important;
             color: #999 !important;
             text-decoration: underline !important;
             word-wrap: break-word !important;
         }
     </style>
 </head>

 <body>
     <div class="container">
         <h1 class="title">
             Dev<span class="subtitle">Jobs</span>
         </h1>
         <div class="card">
             <h1>{{ config('app.name') }}: Verifica tu correo electrónico</h1>
             <p>Hola {{ $notifiable->name }}!</p>
             <p>Gracias por registrarte en {{ config('app.name') }}.</p>
             <p>Por favor, haz clic en el siguiente enlace para verificar tu
                 correo
                 electrónico:</p>
             <div class="container-button">

                 <a
                     class="button"
                     href="{{ $url }}"
                 >
                     Verificar email
                 </a>
             </div>
             <footer>

                 <span>Si no has solicitado este correo electrónico, puedes
                     ignorarlo.
                 </span>
                 <span>De parte de todo el equipo de
                     {{ config('app.name') }},</span>
                 <span>¡muchas gracias por confiar en nosotros!</span>
             </footer>
         </div>
         <div class="extra-info">
             <span>
                 Si el enlace no funciona, copia y pega la siguiente URL en tu
                 navegador:
             </span>
             <a href="{{ $url }}">{{ $url }}</a>
         </div>
     </div>

 </body>

 </html>
