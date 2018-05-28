        <div class="container-fluid">
            <form action="<?php echo ACTION ?>" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" required="true">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" required="true">
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" class="form-control" id="telefone" data-mask="(00) 0000-0000" onkeyup="mascaraTelefone();">
                </div>
            </form>
        </div>
        <div class="bottom-right">
            <button type="submit" class="btn btn-sm" style="background-color: transparent;">
                <i class="material-icons md-36" style="color: green">done</i>
            </button>
        </div>
    