        <div class="conteiner-fluid">
            <div class="col-xs-12 col-md-offset-2" style="padding:10px">
                <div class="list-group">
                    <?php foreach (json_decode($dados, true)['agendamentos'] as $agendamentoDecoded):
                        $agendamento = AgendamentoEntity::criarViaJson($agendamentoDecoded);
                        $sala = SalaEntity::criarViaJson($agendamento->getSala());
                        $colaborador = ColaboradorEntity::criarViaJson($agendamento->getColaborador());
                        ?>
                    <button type="button" class="list-group-item">  
                        <table class="item-table">
                            <tr>
                                <td>
                                    <p><b>Nome:</b></p>
                                </td>
                                <td>
                                    <p><?php echo $sala->__get('nome') ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Status:</b></p>
                                </td>
                                <td>
                                    <p style="color: <?php echo ($sala->__get('status') == StatusSala::DISPONIVEL) ? 'green': 'red' ?>"><?php echo $sala->__get('status') ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Colaborador:</b></p>
                                </td>
                                <td>
                                    <p><?php echo $colaborador->getNome() ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p><b>Data:</b></p>
                                </td>
                                <td>
                                    <p><?php echo ($sala->__get('status') == StatusSala::DISPONIVEL) ? '-': '31/04/2018' ?></p>
                                </td>
                                <td>
                                    <p><b>Hora:</b></p>
                                </td>
                                <td>
                                    <p><?php echo ($sala->__get('status') == StatusSala::DISPONIVEL) ? '-': '11:00' ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="item-table" style="width: 100%">
                                        <tr>
                                            <td><i class="material-icons md-18" style="color: <?php echo $sala->__get('temProjetor') ? 'green' : 'red' ?>">videocam</i></td>
                                            <td><i class="material-icons md-18" style="color: green">event_seat</i><b style="color: green"> <?php echo $sala->__get('qtdCadeiras') ?></b></td>
                                            <td><i class="material-icons md-18" style="color: <?php echo $sala->__get('temVideoConferencia') ? 'green' : 'red' ?>">contact_phone</i></td>
                                            <td><i class="material-icons md-18" style="color: <?php echo $sala->__get('temComputador') ? 'green' : 'red' ?>">desktop_mac</i></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </button>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="bottom-right">
            <button type="submit" class="btn btn-sm" style="background-color: transparent;">
                <i class="material-icons md-36" style="color: green">add_circle</i>
            </button>
        </div>
    