    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/toastr.min.css">
        <script src="js/index.js" type="text/javascript"></script>
        <script src="js/toastr.min.js" type="text/javascript"></script>
        <title>requisição de pagina com AJAX</title>
    </head>
    <body>
       
        <form id="formulario">
            <fieldset>
            <label for="email">Receba as ultimas novidades.</label>
            <input class="form-control" type="email" name="email" id="email" autocomplete="off" placeholder="Digite seu Nome" required="required">
            </fieldset><br>
            <button class="btn btn-outline-secondary" type="button" id="salvar" name="salvar" >Newsletter</button>
        </form>
        <div id="resposta"><!--div para retornar Toast--></div>
    </body>
