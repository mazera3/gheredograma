<!doctype html>
<html lang="pt-br">

<head>
    <title>Heredogramas</title>
    <link rel="icon" href="./imagens/favinco.ico">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>

<body style=" background-color: #ffff;">
    <div class="container">
        <h2 class="text-center text-primary"><img src="./imagens/her.png" width="60px" /> Gerador de Heredograma</h2>
        <form method="POST" action="heredograma.php">
            <div class="row" style="text-align: center; background-color: #F0E68C;">
                <div class="col-2">
                    <!-- Individuos -->
                    <div class="form-group">
                        <label>1ª Geração A</label>
                        <select class="form-control" name="f1">
                            <option>opções</option>
                            <option value="1">1 Elemento</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <!-- 1ª Geração A -->
                    <div class="form-group">
                        <label>1</label>
                        <select class="form-control" name="g1A">
                            <option>Tipo</option>
                            <!-- <option value="1">Teste</option> -->
                            <option value="3">□─○ Casal Normal</option> <!-- Casal Normal -->
                            <option value="2">■─● Casal Afetado</option> <!-- Casal Afetado -->
                            <option value="13">■─○ Casal Macho Afetado</option> <!-- Casal Macho Afetado -->
                            <option value="14">□─● Casal Femea Afetada</option> <!-- Casal Femea Afetada -->
                            <option value="4">□═○ Casal Consanguineo</option> <!-- Casal Consanguineo -->
                            <option value="5">□---○ Casal ExtraMarital</option> <!-- Casal ExtraMarital -->
                            <option value="6">□-/-○ Casal Divorciado</option> <!-- Casal Divorciado -->
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <!-- heredograma.php -->
                    <div class="form-group">
                        <label>Heredograma</label>
                        <select class="form-control" name="id_her" style="width:150px;">
                            <option value="0">opções</option>
                            <option value="1">Heredograma 1</option>
                            <option value="2">Heredograma 2</option>
                            <option value="3">Exemplo 1</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Tema -->
                    <div class="form-group">
                        <label>Tema</label>
                        <select class="form-control" name="tema">
                            <option value="1" selected>Padrão</option>
                            <option value="2">Azul</option>
                            <option value="3">Vermelho</option>
                            <option value="4">Verde</option>
                            <option value="5">Marrom</option>
                            <option value="6">Roxo</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Tamanho -->
                    <div class="form-group">
                        <label>Tamanho</label>
                        <select class="form-control" name="size">
                            <option value="1" selected>1200 x 600 (Padrão)</option>
                            <option value="2">600 x 400 (Pequeno)</option>
                            <option value="3">800 x 500 (Médio) </option>
                            <option value="4">1400 x 800 (Grande)</option>
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <!-- Legenda -->
                    <div class="form-group">
                        <label>Legenda</label>
                        <select class="form-control" name="legenda">
                            <option value="0" selected>não exibir (Padrão)</option>
                            <option value="1">╩ exibir abaixo</option>
                            <option value="2">╣ exibir a direita</option>
                            <option value="3">╠ exibir a esquerda</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- 2ª Geração A -->
            <div class="row" style="text-align: center; background-color: #accaca;">
                <div class="col-2">
                    <!-- Nascimentos -->
                    <div class="form-group">
                        <label>2ª Geração A</label>
                        <select class="form-control" name="f2" style="width:150px;">
                            <option>Elem.</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A0 -->
                    <div class="form-group">
                        <label>2A0</label>
                        <select class="form-control" name="g2A0" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A1 -->
                    <div class="form-group">
                        <label>2A1</label>
                        <select class="form-control" name="g2A1" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A2 -->
                    <div class="form-group">
                        <label>2A2</label>
                        <select class="form-control" name="g2A2" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A3 -->
                    <div class="form-group">
                        <label>2A3</label>
                        <select class="form-control" name="g2A3" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A4 -->
                    <div class="form-group">
                        <label>2A4</label>
                        <select class="form-control" name="g2A4" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A5 -->
                    <div class="form-group">
                        <label>2A5</label>
                        <select class="form-control" name="g2A5" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A6 -->
                    <div class="form-group">
                        <label>2A6</label>
                        <select class="form-control" name="g2A6" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A7 -->
                    <div class="form-group">
                        <label>2A7</label>
                        <select class="form-control" name="g2A7" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A8 -->
                    <div class="form-group">
                        <label>2A8</label>
                        <select class="form-control" name="g2A8" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Femea Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Macho Afetado)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Macho Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Femea Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option>
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 2ª Geração A9 -->
                    <div class="form-group">
                        <label>2A9</label>
                        <select class="form-control" name="g2A9" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Femea Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Macho Afetado)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Macho Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Femea Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option>
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option>
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- 3ª Geração A -->
            <div class="row" style="text-align: center; background-color: #cfafff;">
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Nascimentos -->
                    <div class="form-group">
                        <label>3ª GA</label>
                        <select class="form-control" name="f3A" style="width:80px;">
                            <option>Elem A</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                </div>
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Ligação -->
                    <div class="form-group">
                        <label>Ligar</label>
                        <select class="form-control" name="r2A" style="width:80px;">
                            <option>Ramo</option>
                            <option value="0">2A0</option>
                            <option value="1">2A1</option>
                            <option value="2">2A2</option>
                            <option value="3">2A3</option>
                            <option value="4">2A4</option>
                            <option value="5">2A5</option>
                            <option value="6">2A6</option>
                            <option value="7">2A7</option>
                            <option value="8">2A8</option>
                            <option value="9">2A9</option>
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A0 -->
                    <div class="form-group">
                        <label>3A0</label>
                        <select class="form-control" name="g3A0" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A1 -->
                    <div class="form-group">
                        <label>3A1</label>
                        <select class="form-control" name="g3A1" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A2 -->
                    <div class="form-group">
                        <label>3A2</label>
                        <select class="form-control" name="g3A2" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A3 -->
                    <div class="form-group">
                        <label>3A3</label>
                        <select class="form-control" name="g3A3" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A4 -->
                    <div class="form-group">
                        <label>3A4</label>
                        <select class="form-control" name="g3A4" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A5 -->
                    <div class="form-group">
                        <label>3A5</label>
                        <select class="form-control" name="g3A5" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A6 -->
                    <div class="form-group">
                        <label>3A6</label>
                        <select class="form-control" name="g3A6" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A7 -->
                    <div class="form-group">
                        <label>3A7</label>
                        <select class="form-control" name="g3A7" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A8 -->
                    <div class="form-group">
                        <label>3A8</label>
                        <select class="form-control" name="g3A8" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração A9 -->
                    <div class="form-group">
                        <label>3A9</label>
                        <select class="form-control" name="g3A9" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- 3ª Geração B -->
            <div class="row" style="text-align: center; background-color: #cfafff;">
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Nascimentos -->
                    <div class="form-group">
                        <label>3ª GB</label>
                        <select class="form-control" name="f3B" style="width:80px;">
                            <option>Elem B</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                </div>
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Ligação -->
                    <div class="form-group">
                        <label>Ligar</label>
                        <select class="form-control" name="r2B" style="width:80px;">
                            <option>Ramo</option>
                            <option value="0">2A0</option>
                            <option value="1">2A1</option>
                            <option value="2">2A2</option>
                            <option value="3">2A3</option>
                            <option value="4">2A4</option>
                            <option value="5">2A5</option>
                            <option value="6">2A6</option>
                            <option value="7">2A7</option>
                            <option value="8">2A8</option>
                            <option value="9">2A9</option>
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B0 -->
                    <div class="form-group">
                        <label>3B0</label>
                        <select class="form-control" name="g3B0" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B1 -->
                    <div class="form-group">
                        <label>3B1</label>
                        <select class="form-control" name="g3B1" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B2 -->
                    <div class="form-group">
                        <label>3B2</label>
                        <select class="form-control" name="g3B2" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B3 -->
                    <div class="form-group">
                        <label>3B3</label>
                        <select class="form-control" name="g3B3" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B4 -->
                    <div class="form-group">
                        <label>3B4</label>
                        <select class="form-control" name="g3B4" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B5 -->
                    <div class="form-group">
                        <label>3B5</label>
                        <select class="form-control" name="g3B5" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B6 -->
                    <div class="form-group">
                        <label>3B6</label>
                        <select class="form-control" name="g3B6" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B7 -->
                    <div class="form-group">
                        <label>3B7</label>
                        <select class="form-control" name="g3B7" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B8 -->
                    <div class="form-group">
                        <label>3B8</label>
                        <select class="form-control" name="g3B8" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B9 -->
                    <div class="form-group">
                        <label>3B9</label>
                        <select class="form-control" name="g3B9" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- 3ª Geração C -->
            <div class="row" style="text-align: center; background-color: #cfafff;">
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Nascimentos -->
                    <div class="form-group">
                        <label>3ª GC</label>
                        <select class="form-control" name="f3C" style="width:80px;">
                            <option>Elem C</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                </div>
                <div class="col-1" style="background-color: #cccfaa;">
                    <!-- Ligação -->
                    <div class="form-group">
                        <label>Ligar</label>
                        <select class="form-control" name="r2C" style="width:80px;">
                            <option>Ramo</option>
                            <option value="0">2A0</option>
                            <option value="1">2A1</option>
                            <option value="2">2A2</option>
                            <option value="3">2A3</option>
                            <option value="4">2A4</option>
                            <option value="5">2A5</option>
                            <option value="6">2A6</option>
                            <option value="7">2A7</option>
                            <option value="8">2A8</option>
                            <option value="9">2A9</option>
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração C0 -->
                    <div class="form-group">
                        <label>3C0</label>
                        <select class="form-control" name="g3C0" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B1 -->
                    <div class="form-group">
                        <label>3C1</label>
                        <select class="form-control" name="g3C1" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B2 -->
                    <div class="form-group">
                        <label>3C2</label>
                        <select class="form-control" name="g3C2" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B3 -->
                    <div class="form-group">
                        <label>3C3</label>
                        <select class="form-control" name="g3C3" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B4 -->
                    <div class="form-group">
                        <label>3C4</label>
                        <select class="form-control" name="g3C4" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B5 -->
                    <div class="form-group">
                        <label>3C5</label>
                        <select class="form-control" name="g3C5" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B6 -->
                    <div class="form-group">
                        <label>3C6</label>
                        <select class="form-control" name="g3C6" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B7 -->
                    <div class="form-group">
                        <label>3C7</label>
                        <select class="form-control" name="g3C7" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B8 -->
                    <div class="form-group">
                        <label>3C8</label>
                        <select class="form-control" name="g3C8" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 3ª Geração B9 -->
                    <div class="form-group">
                        <label>3C9</label>
                        <select class="form-control" name="g3C9" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
            </div>
            <!-- 4ª Geração A -->
            <div class="row" style="text-align: center; background-color: #bfbfcf;">
                <div class="col-1" style="background-color: #aaefaa;">
                    <!-- Nascimentos -->
                    <div class="form-group">
                        <label>4ª G</label>
                        <select class="form-control" name="f4A" style="width:80px;">
                            <option>Elem 4ªG</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                        </select>
                    </div>
                </div>
                <div class="col-2" style="background-color: #aaefaa;">
                    <!-- Conectar -->
                    <div class="form-group">
                        <label>Conectar</label>
                        <input type="number" min="0" step="5" value="430" class="form-control" name="r3A">
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 0 -->
                    <div class="form-group">
                        <label>1</label>
                        <select class="form-control" name="g4A0" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="40">○─□| Macho ♂ Inicio (Casal Normal)</option> <!-- Macho Inicio (Casal Normal) -->
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="37">□─○| Fêmea ♀ Inicio (Casal Normal)</option> <!-- Fêmea Inicio (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="24">■─●| Fêmea ♀ Inicio (Casal Afetado)</option> <!-- Fêmea Inicio (Casal Afetado) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="26">●─■| Macho ♂ Inicio (Casal Afetado)</option> <!-- Macho Inicio (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="30">□─●| Femea ♀ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Femea Inicio (Casal Femea Afetada) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="43">■─○| Femea ♀ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Femea Inicio (Casal Macho Afetado) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="33">○─■| Macho ♂ Inicio (Casal Com Macho ♂ Afetado)</option> <!-- Macho Inicio (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="46">●─□| Macho ♂ Inicio (Casal Com Femea ♀ Afetada)</option> <!-- Macho Inicio (Casal Femea Afetada) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="7">○○| Gêmeos Inicio Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Normais -->
                            <option value="8">●●| Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Inicio Mzigoticos Femeas ♀ Afetadas -->
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option>- - - - - - - - - - -</option>
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option value="49">□□| Gêmeos Inicio Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Inicio Mzigoticos Machos ♂ Normais -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="12">○∩○| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="51">●∩●| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="52">●∩○| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="53">○∩●| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="54">□∩□| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="55">■∩■| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="56">■∩□| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="57">□∩■| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="58">○∩□| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="59">●∩■| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="60">●∩□| Gêmeos Inicio Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Inicio Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="61">□∩●| Gêmeos Inicio Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Inicio Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="62">○∩■| Gêmeos Inicio Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Inicio Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="63">■∩○| Gêmeos Inicio Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Inicio Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 1 -->
                    <div class="form-group">
                        <label>2</label>
                        <select class="form-control" name="g4A1" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 2 -->
                    <div class="form-group">
                        <label>3</label>
                        <select class="form-control" name="g4A2" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 3 -->
                    <div class="form-group">
                        <label>4</label>
                        <select class="form-control" name="g4A3" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 4 -->
                    <div class="form-group">
                        <label>5</label>
                        <select class="form-control" name="g4A4" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 5 -->
                    <div class="form-group">
                        <label>6</label>
                        <select class="form-control" name="g4A5" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 6 -->
                    <div class="form-group">
                        <label>7</label>
                        <select class="form-control" name="g4A6" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 7 -->
                    <div class="form-group">
                        <label>8</label>
                        <select class="form-control" name="g4A7" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
                <div class="col-1">
                    <!-- 4ª Geração 9 -->
                    <div class="form-group">
                        <label>9</label>
                        <select class="form-control" name="g4A8" style="width:80px;">
                            <option></option>
                            <option value="0">░ Vazio</option> <!-- ░ Vazio -->
                            <option value="18">□ Macho ♂ Normal</option> <!-- Macho Normal -->
                            <option value="19">■ Macho ♂ Afetado</option> <!-- Macho Afetado -->
                            <option value="20">○ Femea ♀ Normal</option> <!-- Femea Normal -->
                            <option value="21">● Femea ♀ Afetada</option> <!-- Femea Afetada -->
                            <option value="15">◊ Sexo Indefinido</option> <!-- Sexo Indefinido -->
                            <option>- - - - - - - - - - -</option>
                            <option value="41">□|─○ Macho ♂ Centro (Casal Normal)</option> <!-- Macho Centro (Casal Normal) -->
                            <option value="38">○|─□ Femea ♀ Centro (Casal Normal)</option> <!-- Femea Centro (Casal Normal) -->
                            <option value="28">●|─■ Femea ♀ Centro (Casal Afetado)</option> <!-- Femea Centro (Casal Afetado) -->
                            <option value="29">■|─● Macho ♂ Centro (Casal Afetado)</option> <!-- Macho Centro (Casal Afetado) -->
                            <option value="31">●|─□ Femea ♀ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Femea Centro (Casal Femea Afetada) -->
                            <option value="44">○|─■ Femea ♀ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Femea Centro (Casal Macho Afetado) -->
                            <option value="32">■|─○ Macho ♂ Centro (Casal Com Macho ♂ Afetado)</option> <!-- Macho Centro (Casal Macho Afetado) -->
                            <option value="47">□|─● Macho ♂ Centro (Casal Com Femea ♀ Afetada)</option> <!-- Macho Centro (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="42">|□─○ Macho ♂ Final (Casal Normal)</option> <!-- Macho Final (Casal Normal) -->
                            <option value="39">|○─□ Fêmea ♀ Final (Casal Normal)</option> <!-- Fêmea Final (Casal Normal) -->
                            <option value="25">|●─■ Fêmea ♀ Final (Casal Afetado)</option> <!-- Fêmea Final (Casal Afetado) -->
                            <option value="27">|■─● Macho ♂ Final (Casal Afetado)</option> <!-- Macho Final (Casal Afetado) -->
                            <option value="34">|●─□ Femea ♀ Final (Casal Com Femea ♀ Afetada)</option> <!-- Femea Final (Casal Femea Afetada) -->
                            <option value="45">|○─■ Femea ♀ Final (Casal Com Macho ♂ Afetado)</option> <!-- Femea Final (Casal Macho Afetado) -->
                            <option value="35">|■─○ Macho ♂ Final (Casal Com Macho ♂ Afetado)</option> <!-- Macho Final (Casal Macho Afetado) -->
                            <option value="48">|□─● Macho ♂ Final (Casal Com Femea ♀ Afetada)</option> <!-- Macho Final (Casal Femea Afetada) -->
                            <option>- - - - - - - - - - -</option>
                            <option value="22">○|○ Gêmeos Centro Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Normais -->
                            <option value="36">●|● Gêmeos Centro Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Mzigoticos Femeas ♀ Afetadas -->
                            <option value="10">□|□ Gêmeos Centro Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Normais -->
                            <option value="11">■|■ Gêmeos Centro Mzigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Mzigoticos Machos ♂ Afetados -->
                            <option>- - - - - - - - - - -</option>
                            <option value="9">|○○ Gêmeos Final Mzigoticos Femeas ♀ Normais</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Normais -->
                            <option value="23">|●● Gêmeos Final Mzigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Final Mzigoticos Femeas ♀ Afetadas -->
                            <option value="50">|□□ Gêmeos Final Mzigoticos Machos ♂ Normais</option> <!-- Gêmeos Final Mzigoticos Machos ♂ Normais -->
                            <option>- - - - - - - - - - -</option>
                            <option value="78">○∩○ Gêmeos Centro Dizigoticos Femeas ♀ Normais</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Normais -->
                            <option value="79">●∩● Gêmeos Centro Dizigoticos Femeas ♀ Afetadas</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="80">□∩□ Gêmeos Centro Dizigoticos Machos ♂ Normais</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="81">■∩■ Gêmeos Centro Dizigoticos Machos ♂ Afetados</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="82">○∩□ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Normal -->
                            <option value="83">●∩■ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femeas ♀ Afetadas -->
                            <option value="84">□∩○ Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Normais -->
                            <option value="85">■∩● Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Machos ♂ Afetados -->
                            <option value="86">○∩■ Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Normal ∩ Macho Afetado -->
                            <option value="87">■∩○ Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal -->
                            <option value="88">●∩□ Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Centro Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal -->
                            <option value="89">□∩● Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Centro Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="64">|○∩○ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Normal -->
                            <option value="65">|●∩● Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Afetada -->
                            <option value="66">|●∩○ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Femea Normal -->
                            <option value="67">|○∩● Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Femea Afetada -->
                            <option>- - - - - - - - - - -</option>
                            <option value="68">|□∩□ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Normal -->
                            <option value="69">|■∩■ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Afetado -->
                            <option value="70">|■∩□ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Macho Normal -->
                            <option value="71">|□∩■ Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Macho Afetado -->
                            <option>- - - - - - - - - - -</option>
                            <option value="72">|○∩□ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Normal -->
                            <option value="73">|●∩■ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Afetado -->
                            <option value="74">|●∩□ Gêmeos Final Dizigoticos Femea ♀ Afetada ∩ Macho ♂ Normal</option> <!-- Gêmeos Final Dizigoticos Femea Afetada ∩ Macho Normal -->
                            <option value="75">|□∩● Gêmeos Final Dizigoticos Macho ♂ Normal ∩ Femea ♀ Afetada</option> <!-- Gêmeos Final Dizigoticos Macho Normal ∩ Femea Afetada -->
                            <option value="76">|○∩■ Gêmeos Final Dizigoticos Femea ♀ Normal ∩ Macho ♂ Afetado</option> <!-- Gêmeos Final Dizigoticos Femea Normal ∩ Macho Afetado -->
                            <option value="77">|■∩○ Gêmeos Final Dizigoticos Macho ♂ Afetado ∩ Femea ♀ Normal</option> <!-- Gêmeos Final Dizigoticos Macho Afetado ∩ Femea Normal -->
                        </select>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary mt-2" value="Gerar Heredograma">
            <button type="button" class="btn btn-outline-primary mt-2" data-toggle="modal" data-target="#exampleModal">
            Vizualizar
        </button>
        </form>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Heredograma</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <a href='heredograma.png'><img src="./heredograma.png" width="700px"/></a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="text-center"> -->
        <!-- <a href='heredograma.png'><img src="heredograma.php" /></a> -->
        <!-- <a href='heredograma.png'><img src="heredograma.png" /></a> -->
        <!-- <img src="heredograma.php" /> -->
        <!-- </div> -->
    </div>
    <p class="text-center text-primary">Heredograma gerado por <b>Gerador de Heredograma</b></p>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="./js/jquery-3.2.1.slim.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>

</html>