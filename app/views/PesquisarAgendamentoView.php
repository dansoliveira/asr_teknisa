        <div class="container">
            <form action="<?php echo ACTION ?>" method="post">
                <div class="form-group">
                    <label for="dataReserva">Data Reserva</label>
                    <input type="date" class="form-control" id="dataReserva">
                </div>
                <table class="container">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="horarioInicio">Horário Início</label>
                                <input type="time" class="form-control" id="horarioInicio">
                            </div>
                        </td>
                        <td style="width:10px"></td>
                        <td>
                            <div class="form-group">
                                <label for="horarioTermino">Horário Término</label>
                                <input type="time" class="form-control" id="horarioTermino">
                            </div>
                        </td>
                    </tr>
                </table>
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-2">Computador?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="computadorSim" name="computadorSim" class="custom-control-input">
                                    <label class="custom-control-label" for="computadorSim">Sim</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="computadorNao" name="computadorNao" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="computadorNao">Não</label>
                                </div>      
                            </div>
                        </div>
                </fieldset>
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-2">Projetor?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="projetorSim" name="projetorSim" class="custom-control-input">
                                    <label class="custom-control-label" for="projetorSim">Sim</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="projetorNao" name="projetorNao" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="projetorNao">Não</label>
                                </div>
                            </div>
                        </div>
                </fieldset>
                <fieldset class="form-group row">
                    <legend class="col-form-legend col-sm-2">Vídeo Conferência?</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="videoConfSim" name="videoConfSim" class="custom-control-input">
                                    <label class="custom-control-label" for="videoConfSim">Sim</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="videoConfNao" name="videoConfNao" class="custom-control-input" checked>
                                    <label class="custom-control-label" for="videoConfNao">Não</label>
                                </div>
                            </div>
                        </div>
                </fieldset>
            </form>
        </div>
        <div class="bottom-right">
            <button type="submit" class="btn btn-sm" style="background-color: transparent;">
                <i class="material-icons md-36" style="color: green">done</i>
            </button>
        </div>
    