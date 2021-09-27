<?php
/* * * * * * * * * * * * * * * * * * * * * LEGENDA * * * * * * * * * * * * * * * * * * * * */
function legendaB($im, $x1, $y1, $cor) //  abaixo
{
    // Borda
    //$y1 = 480;
    //$x1 = 20;    
    $x2 = $x1 + 380;
    $y2 = $y1 + 100;
    imagerectangle($im, $x1, $y1, $x2, $y2, $cor);
    // Homem Afetado
    $x3 = $x1 + 10; //50;
    $y3 = $y1 + 10; //500;
    $x4 = $x3 + 15;
    $y4 = $y3 + 15;
    $xl = $x3 + 40;
    imagefilledrectangle($im, $x3, $y3, $x4, $y4, $cor);
    imagestring($im, 10, $xl, $y3, "Homem Afetado", $cor);
    // Homem normal
    $x5 = $x1 + 10; //50;
    $y5 = $y1 + 40; //550;
    $x6 = $x5 + 15;
    $y6 = $y5 + 15;
    $xl = $x5 + 40;
    imagerectangle($im, $x5, $y5, $x6, $y6, $cor);
    imagestring($im, 10, $xl, $y5, "Homem Normal", $cor);
    // Mulher Afetada
    $cx = $x1 + 200; //260;
    $cy = $y1 + 20; //510;
    $xl = $cx + 30;
    $yl = $cy - 10;
    imagefilledellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 10, $xl, $yl, "Mulher Afetada", $cor);
    // Mulher Normal
    $cx = $x1 + 200; //260;
    $cy = $y1 + 50; //560;
    $xl = $cx + 30;
    $yl = $cy - 10;
    imageellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 14, $xl, $yl, "Mulher Normal", $cor);
    // sexo não definido
    $x7 = $x1 + 10; //460;
    $y7 = $y1 + 80; //510;
    $xl = $x1 + 50; //520;
    $yl = $y1 + 70; // 500
    imagefilledpolygon(
        $im,
        array(
            $x7, $y7, // 1
            $x7 + 10, $y7 + 10, // 2
            $x7 + 20, $y7, // 3
            $x7 + 10, $y7 - 10, // 4
        ),
        4,
        $cor
    );
    imagestring($im, 14, $xl, $yl, "Sexo Indefinido", $cor);
}
function legendaD($im, $x1, $y1, $cor) // a direita
{
    // Borda
    //$y1 = 480;
    //$x1 = 20;    
    $x2 = $x1 + 200;
    $y2 = $y1 + 200;
    imagerectangle($im, $x1, $y1, $x2, $y2, $cor);
    // Homem Afetado
    $x3 = $x1 + 10;
    $y3 = $y1 + 10;
    $x4 = $x3 + 15;
    $y4 = $y3 + 15;
    $xl = $x3 + 40;
    imagefilledrectangle($im, $x3, $y3, $x4, $y4, $cor);
    imagestring($im, 10, $xl, $y3, "Homem Afetado", $cor);
    // Homem normal
    $x5 = $x1 + 10;
    $y5 = $y1 + 40;
    $x6 = $x5 + 15;
    $y6 = $y5 + 15;
    $xl = $x5 + 40;
    imagerectangle($im, $x5, $y5, $x6, $y6, $cor);
    imagestring($im, 10, $xl, $y5, "Homem Normal", $cor);
    // Mulher Afetada
    $cx = $x1 + 20;
    $cy = $y1 + 110;
    $xl = $cx + 30;
    $yl = $cy - 5;
    imagefilledellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 10, $xl, $yl, "Mulher Afetada", $cor);
    // Mulher Normal
    $cx = $x1 + 20;
    $cy = $y1 + 150;
    $xl = $cx + 30;
    $yl = $cy - 5;
    imageellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 14, $xl, $yl, "Mulher Normal", $cor);
    // sexo não definido
    $x7 = $x1 + 10; //460;
    $y7 = $y1 + 80; //510;
    $xl = $x1 + 50; //520;
    $yl = $y1 + 70; // 500
    imagefilledpolygon(
        $im,
        array(
            $x7, $y7, // 1
            $x7 + 10, $y7 + 10, // 2
            $x7 + 20, $y7, // 3
            $x7 + 10, $y7 - 10, // 4
        ),
        4,
        $cor
    );
    imagestring($im, 14, $xl, $yl, "Sexo Indefinido", $cor);
}
function legendaE($im, $x1, $y1, $cor) // a esquerda
{
    // Borda
    //$y1 = 480;
    //$x1 = 20;    
    $x2 = $x1 + 200;
    $y2 = $y1 + 200;
    imagerectangle($im, $x1, $y1, $x2, $y2, $cor);
    // Homem Afetado
    $x3 = $x1 + 10;
    $y3 = $y1 + 10;
    $x4 = $x3 + 15;
    $y4 = $y3 + 15;
    $xl = $x3 + 40;
    imagefilledrectangle($im, $x3, $y3, $x4, $y4, $cor);
    imagestring($im, 10, $xl, $y3, "Homem Afetado", $cor);
    // Homem normal
    $x5 = $x1 + 10;
    $y5 = $y1 + 40;
    $x6 = $x5 + 15;
    $y6 = $y5 + 15;
    $xl = $x5 + 40;
    imagerectangle($im, $x5, $y5, $x6, $y6, $cor);
    imagestring($im, 10, $xl, $y5, "Homem Normal", $cor);
    // Mulher Afetada
    $cx = $x1 + 20;
    $cy = $y1 + 110;
    $xl = $cx + 30;
    $yl = $cy - 5;
    imagefilledellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 10, $xl, $yl, "Mulher Afetada", $cor);
    // Mulher Normal
    $cx = $x1 + 20;
    $cy = $y1 + 150;
    $xl = $cx + 30;
    $yl = $cy - 5;
    imageellipse($im, $cx, $cy, 20, 20, $cor);
    imagestring($im, 14, $xl, $yl, "Mulher Normal", $cor);
    // sexo não definido
    $x7 = $x1 + 10; //460;
    $y7 = $y1 + 80; //510;
    $xl = $x1 + 50; //520;
    $yl = $y1 + 70; // 500
    imagefilledpolygon(
        $im,
        array(
            $x7, $y7, // 1
            $x7 + 10, $y7 + 10, // 2
            $x7 + 20, $y7, // 3
            $x7 + 10, $y7 - 10, // 4
        ),
        4,
        $cor
    );
    imagestring($im, 14, $xl, $yl, "Sexo Indefinido", $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalAfetado($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
//casalAfetado($canvas, 510, 225, $preto);
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalNormal($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
//casalNormal($canvas, 510, 320, $preto);
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalConsanguineo($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 22;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    imageline($im, $x3, $y3 + 3, $x4, $y4 + 3, $cor);
}
//casalConsanguineo($canvas, 610, 320, $preto);
/* * * * * * * * * * * * * * * casal Extra Marital * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalExtraMarital($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    //$x1 = 275;
    // $y1 = 25;
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    $b = imagecolorallocate($im, 255, 255, 255);
    $p = imagecolorallocate($im, 0, 0, 0);
    $style = array($p, $p, $p, $p, $p, $b, $b, $b, $b, $b);
    imagesetstyle($im, $style);
    imageline($im, $x3, $y3, $x4, $y4, IMG_COLOR_STYLED);
}
//casalExtraMarital($canvas, 610, 320, $preto);
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalDivorcio($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    imageline($im, $x3 + 20, $y3 + 5, $x4 - 20, $y4 - 5, $cor);
}
//casalDivorcio($canvas, 510, 320, $preto);
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
function casalMachoAfetado($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
function casalFemeaAfetada($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 15;
    $ya = $y1 + 10;
    $xb = $x1 + 15;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal branco 2
    $x3 = $x1 + 15;
    $y3 = $y1 + 25;
    $x4 = $x3 + 55;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 30
function FemeaCasalFemeaAfetadaInicio($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 40;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 10;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 43
function FemeaCasalMachoAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 - 40;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 10;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 31
function FemeaCasalFemeaAfetadaCentro($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 44
function FemeaCasalMachoAfetadoCentro($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo  branco 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 32
function MachoCasalMachoAfetadoCentro($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 47
function MachoCasalFemeaAfetadaCentro($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 33
function MachoCasalMachoAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 - 25;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 10;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 46
function MachoCasalFemeaAfetadaInicio($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 - 25;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 10;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 34
function FemeaCasalFemeaAfetadaFinal($im, $x1, $y1, $cor)
{
    // quadrado banco 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 45
function FemeaCasalMachoAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo banco 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 35
function MachoCasalMachoAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 48
function MachoCasalFemeaAfetadaFinal($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 24
function FemeaCasalAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 37
function FemeaCasalNormalInicio($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 28
function FemeaCasalAfetadoCentro($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 38
function FemeaCasalNormalCentro($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 29
function MachoCasalAfetadoCentro($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 41
function MachoCasalNormalCentro($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 15;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 26
function MachoCasalAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 40
function MachoCasalNormalInicio($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 + 70;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 + 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 + 45;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 25
function FemeaCasalAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 - 45;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 - 85;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 70;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 39
function FemeaCasalNormalFinal($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 45;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 - 85;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 70;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 27
function MachoCasalAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado preto 1
    $xa = $x1 - 100;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto 1
    $cx = $x1 - 30;
    $cy = $y1 + 25;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 70;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 42
function MachoCasalNormalFinal($im, $x1, $y1, $cor)
{
    // quadrado branco 1
    $xa = $x1 - 100;
    $ya = $y1 + 10;
    $xb = $xa + 30;
    $yb = $y1 + 40;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco 1
    $cx = $x1 - 30;
    $cy = $y1 + 25;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal preto 1
    $x3 = $x1 - 70;
    $y3 = $y1 + 25;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 7
function gemeosMonozigoticosFemeasNormaisInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 - 45;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 49
function gemeosMonozigoticosMachosNormaisInicio($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 - 45;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 54
function gemeosDizigoticosMNormalMNormalInicio($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 55
function gemeosDizigoticosMAfetadoMAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 56
function gemeosDizigoticosMAfetadoMNormalInicio($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 57
function gemeosDizigoticosMNormalMAfetadoInicio($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 58
function gemeosDizigoticosFNormalMNormalInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 59
function gemeosDizigoticosFAfetadaMAfetadoInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 60
function gemeosDizigoticosFAfetadaMNormalInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 61
function gemeosDizigoticosMNormalFAfetadaInicio($im, $x1, $y1, $cor)
{
    // circulo preto direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 62
function gemeosDizigoticosFNormalMAfetadoInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado direito 1
    $xa = $x1 - 10;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 63
function gemeosDizigoticosMAfetadoFNormalInicio($im, $x1, $y1, $cor)
{
    // circulo preto direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);

    // quadrado esquerdo 1
    $xa = $x1 - 75;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 64
function gemeosDizigoticosFNormalFNormalFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 65
function gemeosDizigoticosFAfetadaFAfetadaFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 66
function gemeosDizigoticosFAfetadaFNormalFinal($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 67
function gemeosDizigoticosFNormalFAfetadaFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo preto direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 68
function gemeosDizigoticosMNormalMNormalFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 69
function gemeosDizigoticosMAfetadoMAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 70
function gemeosDizigoticosMAfetadoMNormalFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 71
function gemeosDizigoticosMNormalMAfetadoFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 72
function gemeosDizigoticosFNormalMNormalFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 73
function gemeosDizigoticosFAfetadaMAfetadoFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 74
function gemeosDizigoticosFAfetadaMNormalFinal($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 75
function gemeosDizigoticosMNormalFAfetadaFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // circulo preto direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 76
function gemeosDizigoticosFNormalMAfetadoFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 77
function gemeosDizigoticosMAfetadoFNormalFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 78
function gemeosDizigoticosFemeasNormaisCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 50;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
//
// 79
function gemeosDizigoticosFemeasAfetadasCentro($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo preto direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    //linha Horizontal inferior
    $x3 = $x1 + 15;
    $y3 = $y1 + 65;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 80
function gemeosDizigoticosMachosNormaisCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 81
function gemeosDizigoticosMachosAfetadosCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 82
function gemeosDizigoticosFNormalMNormalCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 83
function gemeosDizigoticosFAfetadaMAfetadoCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 84
function gemeosDizigoticosMNormalFNormalCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco direito
    $cx = $x1 + 50;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 85
function gemeosDizigoticosMAfetadoFAfetadaCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo preto direito
    $cx = $x1 + 50;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 86
function gemeosDizigoticosFNormalMAfetadoCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 87
function gemeosDizigoticosMAfetadoFNormalCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // circulo branco direito
    $cx = $x1 + 50;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 88
function gemeosDizigoticosFAfetadaMNormalCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 89
function gemeosDizigoticosMNormalFAfetadaCentro($im, $x1, $y1, $cor)
{
    // circulo branco direito
    $cx = $x1 + 50;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 50
function gemeosMonozigoticosMachosNormaisFinal($im, $x1, $y1, $cor)
{
    // quadrado esquerdo 1
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // quadrado direito 1
    $xa = $x1 + 45;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);

    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 + 10;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}

function gemeosMonozigoticosFemeasNormaisFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 5;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 + 10;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 22
function gemeosMonozigoticosFemeasNormaisCentro($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);

    //linha Horizontal inferior
    $x3 = $x1 + 15;
    $y3 = $y1 + 65;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 36
function gemeosMonozigoticosFemeasAfetadasCentro($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 + 0;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo preto direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);

    //linha Horizontal inferior
    $x3 = $x1 + 15;
    $y3 = $y1 + 65;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 5;
    $y3 = $y1 + 50;
    $x4 = $x3 + 20;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 8
function gemeosMonozigoticosFemeasAfetadasInicio($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo preto direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 - 45;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
function gemeosMonozigoticosFemeasAfetadasFinal($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 5;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 55;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 + 0;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    //linha Horizontal inferior
    $x3 = $x1 + 10;
    $y3 = $y1 + 65;
    $x4 = $x3 + 35;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 10
function gemeosMonozigoticosMachosNormaisCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha Horizontal
    $x3 = $x1 + 10;
    $y3 = $y1 + 65;
    $x4 = $x3 + 30;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 11
function gemeosMonozigoticosMachosAfetadosCentro($im, $x1, $y1, $cor)
{
    // quadrado esquerdo
    $xa = $x1 - 20;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // quadrado direito
    $xa = $x1 + 40;
    $ya = $y1 + 50;
    $xb = $xa + 30;
    $yb = $ya + 30;
    imagefilledrectangle($im, $xa, $ya, $xb, $yb, $cor);
    // linha Horizontal
    $x3 = $x1 + 10;
    $y3 = $y1 + 65;
    $x4 = $x3 + 30;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 + 0;
    $y3 = $y1 + 50;
    $x4 = $x3 + 25;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 + 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
// 12
function gemeosDizigoticosFNormalFNormalInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 51
function gemeosDizigoticosFAfetadaFAfetadaInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 52
function gemeosDizigoticosFAfetadaFNormalInicio($im, $x1, $y1, $cor)
{
    // circulo preto esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo branco direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
// 53
function gemeosDizigoticosFNormalFAfetadaInicio($im, $x1, $y1, $cor)
{
    // circulo branco esquerdo
    $cx = $x1 - 60;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
    // circulo preto direito
    $cx = $x1 + 5;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // linha Horizontal superior
    $x3 = $x1 - 25;
    $y3 = $y1 + 0;
    $x4 = $x3 + 25;
    $y4 = $y3;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º esquerda
    $x3 = $x1 - 55;
    $y3 = $y1 + 50;
    $x4 = $x3 + 28;
    $y4 = $y3 - 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
    // linha 45º direita
    $x3 = $x1 - 28;
    $y3 = $y1 + 0;
    $x4 = $x3 + 30;
    $y4 = $y3 + 50;
    imageline($im, $x3, $y3, $x4, $y4, $cor);
}
function sexoIndefinido($im, $x1, $y1, $cor)
{
    // linha Vertical branco 1
    /* $x2 = $x1;
    $y2 = $y1 + 50;
    imageline($im, $x1, $y1, $x2, $y2, $cor); */
    // lozângulo
    $xa = $x1 - 18;
    $ya = $y1 + 68;
    imagefilledpolygon(
        $im,
        array(
            $xa, $ya, // 1
            $xa + 18, $ya + 18, // 2
            $xa + 36, $ya, // 3
            $xa + 18, $ya - 18, // 4
        ),
        4,
        $cor
    );
}
function linhaH($im, $x1, $y1, $l, $cor)
{
    // linha Horizontal 3
    //$x1 = 70;
    //$y1 = 125;
    $x2 = $x1 + $l;
    $y2 = $y1;
    imageline($im, $x1, $y1, $x2, $y2, $cor);
}
function linhaV($im, $x1, $y1, $l, $cor)
{
    // linha Vertical preto 1
    $x2 = $x1;
    $y2 = $y1 + $l;
    imageline($im, $x1, $y1, $x2, $y2, $cor);
}
function machoNormal($im, $x1, $y1, $cor)
{
    // linha Vertical branco 1
    /* $x2 = $x1;
    $y2 = $y1 + 50;
    imageline($im, $x1, $y1, $x2, $y2, $cor); */
    // quadro branco
    $x3 = $x1 - 15;
    $y3 = $y1 + 50;
    $x4 = $x3 + 30;
    $y4 = $y3 + 30;
    imagerectangle($im, $x3, $y3, $x4, $y4, $cor);
}
function machoAfetado($im, $x1, $y1, $cor)
{
    $x3 = $x1 - 15;
    $y3 = $y1 + 50;
    $x4 = $x3 + 30;
    $y4 = $y3 + 30;
    imagefilledrectangle($im, $x3, $y3, $x4, $y4, $cor);
}
function femeaNormal($im, $x1, $y1, $cor)
{
    // linha Vertical branco 1
    /* $x2 = $x1;
    $y2 = $y1 + 50;
    imageline($im, $x1, $y1, $x2, $y2, $cor); */
    // circulo branco 1
    $cx = $x1;
    $cy = $y1 + 65;
    imageellipse($im, $cx, $cy, 30, 30, $cor);
}
function femeaAfetada($im, $x1, $y1, $cor)
{
    // linha Vertical preto 1
    /* $x2 = $x1;
    $y2 = $y1 + 50;
    imageline($im, $x1, $y1, $x2, $y2, $cor); */
    // circulo preto 1
    $cx = $x1;
    $cy = $y1 + 65;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
}
function teste($im, $x1, $y1, $cor)
{
    // circulo
    $cx = $x1 + 50/2;
    $cy = $y1 + 50/2;
    imagefilledellipse($im, $cx, $cy, 30, 30, $cor);
    // quadrado
    $xa = $x1;
    $ya = $y1;
    $xb = $xa + 50;
    $yb = $ya + 50;
    imagerectangle($im, $xa, $ya, $xb, $yb, $cor);
}
