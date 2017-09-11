<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Modificadores dos Níveis de Critério de Avaliação - NCA</h3>
    </div>
    <div class="panel-body">



        <div class="form-group row">
            <div class="col-xs-4">
                <label for="dataMedicao">Data Medição</label>
                <input class="form-control" id="dataMedicao" name="dataMedicao" type="text"
                       value="{{session('dataMedicao')}}">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-6">
                <label for="inicio">Horário Inícial</label>

                <input class="form-control"  name="inicio" id="inicio" value="00:00"/>


            </div>


            <div class="col-xs-6">
                <label for="fim">Horário Final</label>

                <input class="form-control" name="fim" id="fim" value="00:00"/>

            </div>

        </div>


        <div class="form-group row">
            <div class="col-xs-12">
                <label for="provocadoPor">Descrição da Fonte de Ruído</label>
                <input class="form-control" id="ruido" name="ruido" type="text">
            </div>
        </div>


        <div class="form-group row">
            <div class="col-xs-4">
                <label for="distancia">Distânciamento Aprox. da Fonte (m)</label>
                <input class="form-control" id="distancia" name="distancia">
            </div>
        </div>

        <div class="form-group">
            <label for="escolaHospital">Modificar em caso de Creche, Hospital...</label>
            <select class="form-control" name="escolaHospital" id="escolaHospital">
                <option value="0" selected>Não se aplica</option>
                <option value="Ambulatório">Ambulatório</option>
                <option value="Biblioteca Pública">Biblioteca Pública</option>
                <option value="Casa de Saúde ou Similar">Casa de Saúde ou Similar</option>
                <option value="Creche">Creche</option>
                <option value="Escola">Escola</option>
                <option value="Hospital">Hospital</option>
            </select>
        </div>

        <div class="form-group">
            <label for="periodo">Período (inclui construção civil)</label>
            <select class="form-control" name="periodo" id="periodo">
                <option value="Diurno">Diurno</option>
                <option value="Vespertino">Vespertino</option>
                <option value="SEX,SAB,FER entre 22:00 e 23:00">SEX,SAB,FER entre 22:00 e 23:00</option>
                <option value="NOTURNO entre 22:00 e 23:59" selected>NOTURNO entre 22:00 e 23:59</option>
                <option value="NOTURNO entre 00:00 e 06:59">NOTURNO entre 00:00 e 06:59</option>
                <option value="Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00">Serviços de construção civil não passíveis de confinamento entre 10:00 e 17:00</option>
            </select>
        </div>

        <div class="form-group">
            <label for="local">Local da Medição</label>
            <select class="form-control" name="local" id="local">
                <option value="0" selected><b>DENTRO DOS LIMITES</b> de onde partiu a suposta reclamação</option>
                <option value="1"><b>NO PASSEIO CONTÍGUO</b> à propriedade de onde partiu a reclamação</option>
            </select>
        </div>


        <div class="form-group">
            <label for="sistemas">Sistemas Compressores, Ar Condicionado, Geradores ...</label>
            <select class="form-control" name="sistemas" id="sistemas">
                <option value="0" selected>Não se aplica</option>
                <option value="Ruído impulsivo e som com componentes tonais">Ruído impulsivo e som com componentes
                    tonais
                </option>
                <option value="Compressores">Compressores</option>
                <option value="Sistemas de Troca de Calor">Sistemas de Troca de Calor</option>
                <option value="Sistemas de Aquecimento">Sistema de Aquecimento</option>
                <option value="Geradores">Geradores</option>
                <option value="Sistemas de Condicionamento de Ar">Sistema de Condicionamento de Ar</option>
                <option value="Sistemas de Bombeamento Hidráulico ou Similares">Sistema de Bombeamento Hidráulico ou
                    Similares
                </option>
            </select>
        </div>

    </div>

</div>

